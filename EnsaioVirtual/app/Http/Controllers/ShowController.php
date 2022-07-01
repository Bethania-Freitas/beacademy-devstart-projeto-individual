<?php

namespace App\Http\Controllers;

use App\Models\Show;
//use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {
        $shows = Show::all();

        return view('show.index', compact('shows'));
    }

    public function show($id)
    {
        $show = Show::findOrFail($id);

        return view('show.show', compact('show'));
    }


}
