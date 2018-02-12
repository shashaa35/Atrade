<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
use \App\Godowns;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function products()
    {
        $godowns = \App\godowns::with('products')->get();
        return view('products',compact('godowns'));
    }

    public function product($id)
    {
        $product = Products::where('id',$id)->first();
        return view('view_product',compact('product'));
    }

    public function add_product()
    {
        $godowns = \App\godowns::all();
        return view('add_product',compact('godowns'));
    }

    public function update_product($id)
    {
        $product = Products::where('id',$id)->first();
        $godowns = Godowns::all();
        return view('update_product',compact('product','godowns'));
    }

    public function update_product_save($id,Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'qty' => 'required',
            'godId' => 'required'
        ]);
        $data = $request->all();
        $product = Products::find($id);
        $product->fill($data);
        $product->save();

        return redirect('products');
    }


    public function save_product(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'qty' => 'required',
            'godId' => 'required'
        ]);
        $data = $request->all();
        $product = new Products($data);
        $product->save();

        return redirect('products');
    }

    public function delete_product($id)
    {
        Products::destroy($id);
        return redirect('products');
    }

    public function parties()
    {
        $parties = \App\party::with('bills')->get();
        return view('parties',compact('parties'));
    }

    public function party ($id)
    {
        $party = \App\party::where('id',$id)->with('bills')->first();
        return view('party',compact('party'));
    }
}
