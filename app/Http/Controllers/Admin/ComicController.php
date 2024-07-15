<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $comics = Comic::all();

        return view('comics.comic', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newcomic= new Comic();
        $newcomic->title =$data['title'];
        $newcomic->description =$data['description'];
        $newcomic->thumb =$data['thumb'];
        $newcomic->series =$data['series'];
        $newcomic->sale_date =$data['sale_date'];
        $newcomic->price =$data['price'];
        $newcomic->type =$data['type'];
        $newcomic ->save();
        return redirect()->route('comics.show', $newcomic->id);
            
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        
        return view('comics.show_comic', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}