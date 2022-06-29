<?php

namespace App\Http\Controllers;

use App\Models\Show;
//use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {
        $shows = Show::all();

        return view('show.show', compact('shows'));
    }
}
