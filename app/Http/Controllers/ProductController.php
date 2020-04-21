<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index');
    }

    public function create()
    {
        return 'A form to create a product FROM CONTROLLER';
    }

    public function store()
    {
        //
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);

        return view('products.show');
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
