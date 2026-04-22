<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\recursoProducto;
use App\Models\Product;
use Illuminate\Http\Request;

class ctrlProductoAPI extends Controller
{
    public function index()
    {
        return recursoProducto::collection(Product::with('category')->orderBy('id')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description_long' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'idcategory' => 'nullable|exists:categories,id',
        ]);

        $product = Product::create($data);

        return (new recursoProducto($product->load('category')))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Product $product)
    {
        return new recursoProducto($product->load('category'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'description_long' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'idcategory' => 'nullable|exists:categories,id',
        ]);

        $product->update($data);

        return new recursoProducto($product->load('category'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Producto eliminado logicamente.',
        ], 200);
    }
}
