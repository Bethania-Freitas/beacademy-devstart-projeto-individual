<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetlistController extends Controller
{
    public function index(){
        return view('setlist/setlist');
    }
}
