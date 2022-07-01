<?php

namespace App\Http\Controllers;

use App\Models\Rehearsal;
use Illuminate\Http\Request;

class RehearsalController extends Controller
{
    public function index()
    {
        $rehearsals = rehearsal::all();

        return view('rehearsal.index', compact('rehearsals')) ;
    }

    public function show($id)
    {
        $rehearsal = rehearsal::findOrFail($id);

        return view('rehearsal.show', compact('rehearsal'));
    }

    public function create()
    {
        return view('rehearsal.create');
    }

    public function store(Request $request)
    {
        $rehearsal = new Rehearsal();
        $rehearsal->Data = $request->Data;
        $rehearsal->Local = $request->Local;
        $rehearsal->Custo = $request->Custo;
        $rehearsal->save();

        return redirect()->route('rehearsal.index');

    }
}
