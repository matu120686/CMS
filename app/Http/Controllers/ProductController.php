<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return "Crea un Producto"; //view('product.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($product)
    {
        return view('products.show');
    }

    public function edit($product)
    {
        return "Esitando {$product}"; //view('product.edit');
    }

    public function update($product)
    {
        return "Actualiza un Producto con esta data {$product}"; //view('product.update');
    }

    public function destroy($product)
    {
        return "Elimina un Producto con esta data {$product}"; //view('product.destroy');
    }
}
