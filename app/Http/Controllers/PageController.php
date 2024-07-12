<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function addcomics(){
        return view('addcomics');
    }
    public function comics(){
        // $cocktails = Cocktail::all();
        
        // return view('comics',compact('cocktails'));
        return view('comics');
    }
}