<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function movies()
    {
        $prendoIdati = Movie::all();
        $movies = [
            'movies' => $prendoIdati
        ];
        return view('movies', $movies);
    }

    public function home()
    {
        return view('home');
    }
}
