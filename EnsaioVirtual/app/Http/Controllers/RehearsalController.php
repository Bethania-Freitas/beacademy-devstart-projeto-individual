<?php

namespace App\Http\Controllers;

use App\Models\Rehearsal;
use Illuminate\Http\Request;

class RehearsalController extends Controller
{
    public function index()
    {
        $rehearsals = rehearsal::all();

        return view('rehearsal.rehearsal', compact('rehearsals')) ;
    }
}
