<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;

class FilmController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return view('new-film', compact('genres'));
    }

    public function films(){
        $films = Film::all();
        return view('films', compact('films'));
    }

    protected $fillable = ['title', 'director', 'release_year'];

    public function store(Request $request){
        $request->validate([
            "title"=> "required|string|max:255",
            "director"=> "required|string|max:255",
            "release_year"=> "required|integer"
        ]);

        Film::create($request->all());
        return redirect()->back()->with('success', 'Film stored.');
    }
}
