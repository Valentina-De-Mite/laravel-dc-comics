<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class GuestController extends Controller
{
    public function index()
    {
        $comics = Comic::All();
        return view('welcome', compact('comics'));
    }

    
}
