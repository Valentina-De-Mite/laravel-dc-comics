<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;


class ComicsController extends Controller
{
    public function index()
    {
        // return dd(Comic::all());
        $comics_list = Comic::all();
        return view('admin.comics.index', compact('comics_list'));
    }

    /**
     * Show the form for a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    
}
