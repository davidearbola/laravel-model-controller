<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $prendoIdati = Movie::all();
        $movies = [
            'movies' => $prendoIdati
        ];
        return view('home', $movies);
    }

    public function moviesTable()
    {
        $prendoIdati = Movie::all();
        $movies = [
            'movies' => $prendoIdati
        ];
        return view('moviesTable', $movies);
    }

    public function movieInfo($index)
    {
        $prendoIdati = Movie::find($index + 1);
        $movies = [
            'movie' => $prendoIdati
        ];
        return view('movieInfo', $movies);
    }
}
