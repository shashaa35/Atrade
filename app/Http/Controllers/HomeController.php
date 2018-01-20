<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
