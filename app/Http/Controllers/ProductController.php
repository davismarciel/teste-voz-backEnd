<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
 
    public function index()
    {
        $products = Product::with('category')->get();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id'
        ]);

        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return response()->json($product);
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'string|max:255',
            'description' => 'string',
            'price' => 'numeric',
            'category_id' => 'exists:categories,id'
        ]);

        $product->update($request->all());
        return response()->json($product);
    }

  
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
