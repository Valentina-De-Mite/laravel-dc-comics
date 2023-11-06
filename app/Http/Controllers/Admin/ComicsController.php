<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;


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

    public function create()
    {
        return view('admin.comics.create');
    }


    public function store(Request $request)
    {
        // dd($request);
        $new_comic = new Comic();
        $new_comic->title = $request->title;
        $new_comic->price = $request->price;
        $new_comic->description = $request->description;
        $new_comic->thumb = $request->thumb;

        $new_comic->save();

        $comics = Comic::All();

        return to_route('comics.index', compact('comics'));
    }
    
    
}
