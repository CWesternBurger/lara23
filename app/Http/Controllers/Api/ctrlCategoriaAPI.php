<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\recursoCategoria;
use App\Models\Category;
use Illuminate\Http\Request;

class ctrlCategoriaAPI extends Controller
{
    public function index()
    {
        return recursoCategoria::collection(Category::orderBy('id')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = Category::create($data);

        return (new recursoCategoria($category))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Category $category)
    {
        return new recursoCategoria($category);
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($data);

        return new recursoCategoria($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'message' => 'Categoria eliminada logicamente.',
        ], 200);
    }
}
