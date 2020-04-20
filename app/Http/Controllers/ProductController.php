<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return 'This is the list of products FROM CONTROLLER';
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
        return "Showing product {$product} FROM CONTROLLER";
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
