<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    // public function create()
    // {
    //     return view('admin_comics.create');
    // }


    public function show( Comic $comic)
    {
 
        return view('admin.comics.show', compact('comic'));

        
    }
    
}
