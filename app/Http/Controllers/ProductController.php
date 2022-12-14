<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();

        return view('products.index', compact('products')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
      

        $product = new Products();

        $product->product_name = $request->product_name;
        $product->sku = $request->sku;
        $product->amount = $request->amount;
        $product->price = $request->price;
        $product->state = $request->state;

        $product->save();
        return redirect('/products')->with('success', 'Producto registrado con éxito.'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::find($id);
        return view('products.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $product = Products::find($id);
       
        return view('products.edit', compact('product')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
    
        $product = Products::find($id);
        $product->product_name = $request->product_name;
        $product->sku = $request->sku;
        $product->amount = $request->amount;
        $product->price = $request->price;
        $product->state = $request->state;

        $product->save();
        return redirect('/products')->with('success', 'Producto Actualizado.'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $product = Products::find($id);
        $product->delete();

       return redirect('/products')->with('success', 'Producto eliminado correctamente.'); 

    }
}