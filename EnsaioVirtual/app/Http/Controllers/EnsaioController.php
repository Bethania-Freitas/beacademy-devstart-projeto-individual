<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnsaioController extends Controller
{
    public function index(){
        return view('ensaio/ensaio');
    }
}
