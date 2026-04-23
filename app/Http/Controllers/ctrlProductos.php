<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ctrlProductos extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('category')->orderBy('id');

        if ($request->filled('id')) {
            $query->where('id', (int) $request->query('id'));
        }

        $products = $query->get();
        $categories = Category::orderBy('name')->get();

        return view('Productos.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('Productos.create', compact('categories'));
    }

    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();

        return view('Productos.edit', compact('product', 'categories'));
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

        Product::create($data);
        return redirect()->route('Productos.index')
        ->with('success', 'Product created successfully.');
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
        return redirect()->route('Productos.index')
        ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('Productos.index')
        ->with('success', 'Producto eliminado de forma correcta.');
    }
}
