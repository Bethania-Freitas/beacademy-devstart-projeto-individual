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
}
