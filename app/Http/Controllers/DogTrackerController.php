<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogTrackerController extends Controller
{
    public function index()
    {
//      return view('dogtracker.index');
        $dogName = 'Hector';
        return view('dogtracker.index', compact('dogName'));
    }
}



