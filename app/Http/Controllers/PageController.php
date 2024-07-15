<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $comics = Comic::all();

        return view('home', compact('comics'));
    }
    public function addcomics(){
        return view('addcomics');
    }
    public function comics(){
        
        $comics = Comic::all();

        return view('comics', compact('comics'));

    }
}