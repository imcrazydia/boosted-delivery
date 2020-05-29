<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productData = $request->validate(
            [
                'title' => 'required|min:3',
                'image' => 'image',
                'description' => 'required|min:10',
                'calories' => 'required',
                'carbs' => 'required',
                'sodium' => 'required',
                'sugars' => 'required'
            ]
        );

        $newFileName = $productData['image']->store('products', 'public');
        $productData['image'] = $newFileName;

        Product::create($productData);

        return redirect()->route('product.list');
    }

    /*
     * Displays all products
     */
    public function list()
    {
        $products = Product::all();

        return view('product.list', ['products' => $products]);
    }

    /*
     * Displays all products
     */
    public function listSubscription()
    {
        $products = Product::all();

        return view('abo_overzicht', ['products' => $products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($title)
    {
        $product = Product::find($title);
        return view('product.detail', ['fullproduct'=> $product]);
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
}
