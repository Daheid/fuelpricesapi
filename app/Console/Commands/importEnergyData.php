<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Area;
use App\Models\Product;
use App\Models\Data;
use Carbon\Carbon;

class importEnergyData extends Command
{
    protected $signature = 'import:energy-data';
    protected $description = 'Import energy data from external API';

    protected function normalizeName(string $name): string
    {
        // 1. Trim y normalización básica de espacios
        $name = trim(preg_replace('/\s+/', ' ', $name));

        // 2. Eliminar caracteres especiales problemáticos
        $name = preg_replace('/[^\w\s]/', '', $name);

        // 3. Opciones de formato (elige una):

        // a) snake_case (recomendado para bases de datos)
        $name = str_replace(' ', '_', strtolower($name));

        // b) CamelCase
        // $name = str_replace(' ', '', ucwords($name));

        // c) kebab-case
        // $name = str_replace(' ', '-', strtolower($name));

        // d) Eliminar todos los espacios (si es necesario)
        // $name = str_replace(' ', '', $name);

        return $name;
    }

    public function handle()
    {
        $baseParams = [
            'frequency' => 'weekly',
            'data[0]' => 'value',
            'start' => '2024-12-30',
            'end' => Carbon::now()->format('Y-m-d'),
            'sort[0][column]' => 'period',
            'sort[0][direction]' => 'desc',
            'length' => 5000, // Máximo permitido por la API
            'api_key' => env('EIA_API_KEY'),
        ];

        $totalProcessed = 0;
        $offset = 0;
        $hasMoreData = true;

        $this->info("Iniciando importación de datos...");


        while ($hasMoreData) {
            try {
                $params = array_merge($baseParams, ['offset' => $offset]);
                $apiUrl = 'https://api.eia.gov/v2/petroleum/pri/gnd/data/?' . http_build_query($params);

                $response = Http::withOptions([
                    'verify' => storage_path('certs/cacert.pem'),
                ])->get($apiUrl);

                if (!$response->successful()) {
                    throw new \Exception("API Error: " . $response->status());
                }

                $data = $response->json();

                if (!isset($data['response']['data'])) {
                    $this->error('La estructura de la API ha cambiado');
                    break;
                }

                $items = $data['response']['data'];
                $batchCount = count($items);
                $totalProcessed += $batchCount;

                if ($batchCount === 0) {
                    $hasMoreData = false;
                    break;
                }

                $this->info("Procesando lote {$offset}-" . ($offset + $batchCount) . "...");

                foreach ($items as $item) {
                    try {
                        // Normalizar y procesar el área
                        $rawAreaName = $item['area-name'] ?? 'Desconocido';
                        $normalizedAreaName = $this->normalizeName($rawAreaName);

                        $area = Area::where('name', $normalizedAreaName)->first();
                        if (!$area) {
                            $area = Product::where('name', 'like', '%' . trim($rawAreaName) . '%')->first();
                        }
                        if (!$area) {
                            $area = Area::create(['name' => $normalizedAreaName]);
                        } elseif ($area->name !== $normalizedAreaName) {
                            $area->update(['name' => $normalizedAreaName]);
                        }

                        // Normalizar y procesar el producto
                        $rawProductName = $item['product-name'] ?? 'Desconocido';
                        $normalizedProductName = $this->normalizeName($rawProductName);

                        $product = Product::where('name', $normalizedProductName)->first();
                        if (!$product) {
                            $product = Product::where('name', 'like', '%' . trim($rawProductName) . '%')->first();
                        }
                        if (!$product) {
                            $product = Product::create(['name' => $normalizedProductName]);
                        } elseif ($product->name !== $normalizedProductName) {
                            $product->update(['name' => $normalizedProductName]);
                        }

                        // Procesar los datos
                        Data::firstOrCreate(
                            [
                                'period' => $item['period'],
                                'area_id' => $area->id,
                                'product_id' => $product->id
                            ],
                            [
                                'value' => $item['value'] ?? 0,
                                'process_name' => $item['process-name'] ?? null,
                                'units' => $item['units'] ?? null,
                                'series_description' => $item['series-description'] ?? null,
                            ]
                        );
                    } catch (\Exception $e) {
                        $this->error("Error procesando item: " . $e->getMessage());
                        continue;
                    }
                }

                // Verificar si hemos llegado al final
                if ($batchCount < 5000) {
                    $hasMoreData = false;
                } else {
                    $offset += 5000;
                    sleep(1); // Pequeña pausa para no saturar la API
                }
            } catch (\Exception $e) {
                $this->error("Error en lote {$offset}: " . $e->getMessage());
                break;
            }
        }

        $this->info("Proceso completado. Total de registros procesados: {$totalProcessed}");
        return 0;
    }
}
