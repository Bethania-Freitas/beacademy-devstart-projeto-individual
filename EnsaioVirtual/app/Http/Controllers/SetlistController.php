<?php

namespace App\Http\Controllers;

use App\Models\Setlist;
use Illuminate\Http\Request;

class SetlistController extends Controller
{
    public function index()
    {
        $setlists = Setlist::all();

        return view('setlist.index', compact('setlists')) ;
    }

    public function show($id)
    {
        $setlist = Setlist::findOrFail($id);

        return view('setlist.show', compact('setlist'));
    }

    public function create()
    {
        return view('setlist.create');
    }

    public function store(Request $request)
    {
        $setlist = new Setlist();
        $setlist->Musica = $request->Musica;
        $setlist->Interprete = $request->Interprete;
        $setlist->Link = $request->Link;
        $setlist->save();

        return redirect()->route('setlist.index');
    }
}
