<?php

namespace App\Http\Controllers;

use App\Models\Setlist;
use Illuminate\Http\Request;

class SetlistController extends Controller
{
    public function index()
    {
        $setlists = Setlist::all();

        return view('setlist.setlist', compact('setlists')) ;
    }
}
