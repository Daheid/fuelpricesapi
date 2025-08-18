<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index()
    {
        try {
            // Buscar el área 'us' para excluirla

            $query = Product::query();

            $products = $query->get();

            return response()->json([
                'data' => $products,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error fetching products: ' . $e->getMessage(),
            ], 500);
        }
    }
}
