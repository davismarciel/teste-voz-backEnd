<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function show(string $id)
    {
        try {
            $category = Category::findOrFail($id);
            return response()->json($category);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Category not found!',
            ], 404);
        }
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'string|max:255'
        ]);

        $category->update($request->all());
        return response()->json($category);
    }
    
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(null, 204);
    }
}
