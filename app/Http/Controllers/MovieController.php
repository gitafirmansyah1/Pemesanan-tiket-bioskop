<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Moviephp;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function create()
    {
        return view ('movies.create');
    }


    public function store(Request $request)
    {
        $movies = new Movie();
        $movies->title = $request->input('title');
        $movies->description = $request->input('description');
        $movies->poster = $request->input('poster');
        $movies->time = $request->input('time');
        $movies->save();
        return redirect()->route('movies.index'); 
    }
}
