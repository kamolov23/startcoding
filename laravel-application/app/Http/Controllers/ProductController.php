<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => 'chocolate',
            'category_id' => '1',
            'price' => '10.00',
            'stock' => '11',
            'discount' => '12%',
            'count' => '22',
            'date_production' => '2025-06-12',
            'best_before_date' => '2025-06-22',
            'production_country' => 'Tajikistan',
            'production_company' => ' Radost',
            'barcode' => '6546864',
            'compound' => 'milk,sugar,vanilla',
            'image' => 'jpg img56',
            'unit' => 'l',
            'guarantee' => 'fresh for 5-6 day',
            'loader' => 'Kiril',
            'driver' => 'Sergey',
            'description' => 'hello world!',
        ]);
      return redirect()->route('product.index');
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
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
