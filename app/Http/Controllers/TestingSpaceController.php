<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingSpaceController extends Controller
{
    public function index()
    {
//      return view('dogtracker.index');
        $dogName = 'Hector';
        return view('testingspace.index', compact('dogName'));
        // use in blade as {{ $dogName }} wherever I want it to appear
    }
}



