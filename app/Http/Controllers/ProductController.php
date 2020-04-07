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

    public function subscriptions()
    {
        return view('abonnementen');
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
        
        $postData = $request->validate(
            [
                'title' => 'required|min:3|max:255',
                'content' => 'required|min:10',
                'pub_date' => 'required|after_or_equal:today',
                'image' => 'image'
            ]
        );

        $newFileName = $postData['image']->store('img', 'public');
        $postData['image'] = $newFileName;

        Product::create($postData);

        return redirect()->route('blog.list');
    }

    /*
     * Displays all posts
     */
    public function list()
    {
        $posts = Product::orderBy('created_at', 'desc')->paginate(20);

        return view('blog.list', ['posts'=> $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $post = Product::find($id);
        return view('product.detail', ['fullproduct'=> $post]);
    }

    /*
     * Gets the keuze from the abonnementen page and sends it to the overzicht page to use the switch cases
     */
    public function showChoice(Request $request) {
      $keuze = $request->input('keuze');

      return view('abo_overzicht', compact('keuze'));
    }

    /*
     * goes to the overzicht page
     */
    public function showOverview()
    {
        return view('abo_overzicht');
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
