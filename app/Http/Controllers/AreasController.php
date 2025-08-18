<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;


class AreasController extends Controller
{
    public function index()
    {
        try {
            // Buscar el área 'us' para excluirla
            $usArea = Area::where('name', 'us')->first();

            $query = Area::query();

            if ($usArea) {
                $query->where('id', '!=', $usArea->id);
            }

            $areas = $query->get();

            return response()->json([
                'data' => $areas,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error fetching areas: ' . $e->getMessage(),
                'note' => 'The "us" area is excluded by default'
            ], 500);
        }
    }
}
