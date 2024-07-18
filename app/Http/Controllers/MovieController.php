<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->title = $request->input('title');
        $movie->description = $request->input('description');
        $movie->poster = $request->input('poster');
        $movie->time = $request->input('time');
        $movie->save();
        return redirect()->route('movies.index');
    }
}
