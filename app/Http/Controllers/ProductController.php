<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();


        $categories = Category::all();
        $productTypes = Product_type::all();

        return view('product.view', compact('categories', 'productTypes', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $productTypes = Product_type::all();

        return view('product.create', compact('categories', 'productTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->product_type_id = $request->product_type_id;
        $product->price = $request->price;
        $product->low_limit = $request->low_limit;
        $product->save();



              
        return redirect(route('products.index'))->with('successMsg','Product Successfully inserted');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function productsdrop()
    {

        $products = Product::all();


        $categories = Category::all();
        $productTypes = Product_type::all();

        return view('product.drop', compact('categories', 'productTypes', 'products'));
    }
}