<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index(){
        return view('new-genre');
    }

    protected $fillable = ['name'];

    public function store(Request $request){
        $request->validate([
            "name"=> "required|string|max:255"
        ]);

        Genre::create($request->all());
        return redirect()->back()->with('success', 'Genre stored.');
    }
}
