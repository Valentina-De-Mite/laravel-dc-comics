<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class GuestController extends Controller
{
    public function index()
    {
        $comics =Comic::All();
        return view('welcome', compact('comics'));
    }

    public function comics()
    {
        $comics = config('comics.php');

        return view('index', compact('comics'));
    }
}
