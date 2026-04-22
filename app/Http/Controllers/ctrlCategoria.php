<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ctrlCategoria extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id')->latest()->get();

        return view('Categorias.index', compact('categories'));
    }

    public function create()
    {
        return view('Categorias.create');
    }

    public function edit(Category $category)
    {
        return view('Categorias.edit', compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Category::create($data);
        return redirect()->route('Categorias.index')
            ->with('success', 'Categoria creada exitosamente.');
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($data);
        return redirect()->route('Categorias.index')
            ->with('success', 'Categoria actualizada exitosamente.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('Categorias.index')
            ->with('success', 'Categoria eliminada logicamente.');
    }
}
