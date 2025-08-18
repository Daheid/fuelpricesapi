<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Data;
use App\Models\Product;
use Illuminate\Http\Request;


class PricesController extends Controller
{


    public function filter()
    {
        $request = request();

        $validated = $request->validate([
            'period' => 'required|date_format:Y-m-d',
            'area' => 'required|string', // Puede ser "all" o un área específica
            'product' => 'required|string' // Puede ser "all" o un producto específico
        ]);

        // Ajustar la fecha al lunes de la semana
        $date = \Carbon\Carbon::parse($validated['period']);
        if (!$date->isMonday()) {
            $date->startOfWeek(); // Ajusta al lunes de esa semana
        }
        $mondayOfWeek = $date->format('Y-m-d');

        // Construir la consulta base
        $query = Data::with(['area', 'product'])
            ->where('period', $mondayOfWeek);

        // 1. Manejar el filtro por ÁREA
        if ($validated['area'] !== 'all') {
            // Si se especifica un área (incluyendo 'us'), filtrar por esa área
            $area = Area::where('name', $validated['area'])->firstOrFail();
            $query->where('area_id', $area->id);
        } else {
            // Si es 'all', excluir automáticamente 'us'
            $usArea = Area::where('name', 'us')->first();
            if ($usArea) {
                $query->where('area_id', '!=', $usArea->id);
            }
        }

        // 2. Manejar el filtro por PRODUCTO
        if ($validated['product'] !== 'all') {
            // Si se especifica un producto, filtrar por ese producto
            $product = Product::where('name', $validated['product'])->firstOrFail();
            $query->where('product_id', $product->id);
        } else {
            // Si es 'all', excluir 'total_gasoline'
            $totalGasolineProduct = Product::where('name', 'total_gasoline')->first();
            if ($totalGasolineProduct) {
                $query->where('product_id', '!=', $totalGasolineProduct->id);
            }
        }

        $results = $query->get();

        // Formatear la respuesta
        $response = [
            'requested_period' => $validated['period'],
            'adjusted_period' => $mondayOfWeek,
            'area' => $validated['area'] !== 'all' ? $validated['area'] : 'all (except us)',
            'product' => $validated['product'] !== 'all' ? $validated['product'] : 'all',
            'data' => $results->map(function ($item) {
                return [
                    'area' => $item->area->name,
                    'product' => $item->product->name,
                    'value' => $item->value,
                    'units' => $item->units,
                    'process' => $item->process_name,
                    'created_at' => $item->created_at,
                    'code' => $item->code,
                ];
            })
        ];

        return response()->json($response);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
