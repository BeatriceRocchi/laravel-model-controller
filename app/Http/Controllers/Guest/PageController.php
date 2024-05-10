<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('title')->get();
        $title = 'Today\'s movies';
        return view('home', compact('movies', 'title'));
    }

    public function bestMovies()
    {
        $movies = Movie::where('vote', '>=', 9)->orderBy('vote', 'desc')->get();
        $title = 'Critically acclaimed movies';
        return view('home', compact('movies', 'title'));
    }

    public function recentMovies()
    {
        $movies = Movie::where('date', '>=', '1990-01-01')->orderBy('date', 'desc')->get();
        $title = 'Movies from the 90s';
        return view('home', compact('movies', 'title'));
    }

    public function newPage()
    {
        return view('new-page');
    }
}
