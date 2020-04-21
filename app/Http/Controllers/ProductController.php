<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();

        dd($products);

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
        // $product = DB::table('products')->where('id', $product)->get();
        // $product = DB::table('products')->where('id', $product)->first();
        $product = DB::table('products')->find($product);

        dd($product);

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
