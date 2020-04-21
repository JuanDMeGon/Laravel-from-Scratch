<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index')->with([
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        dd('In Store');
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);

        return view('products.show')->with([
            'product' => $product,
        ]);
    }

    public function edit($product)
    {
        return "Showing the form to edit the product {$product} FROM CONTROLLER";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
