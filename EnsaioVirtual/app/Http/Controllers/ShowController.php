<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;



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

    public function create()
    {
        return view('show.create');
    }

    public function store(Request $request)
    {
        $show = new Show();
        $show->Data = $request->Data;
        $show->Local = $request->Local;
        $show->Cidade = $request->Cidade;
        $show->Formato = $request->Formato;
        $show->Cachê = $request->Cachê;
        $show->save();

        return redirect()->route('show.index');
    }

}
