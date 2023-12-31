<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use App\Services\PollenService;

class DogTrackerController extends Controller
{
    public function index(PollenService $pollenService)
    {
        $dogName = 'Hecktor';
        $pollenData = $pollenService->get(40.7128, -74.0060);

        return view('dogtracker.index', compact('dogName', 'pollenData'));
    }

    public function view_dog_records()
    {
        $dogname = 'Hector';
        $breed = 'Mixed';
        $dob = Carbon::parse('2016-10-15')->format('y-m-d');
        $mother_health_history = 'anxiety';
        $father_health_history = 'unknown';
        $sibling_health_history = 'cushings disease';
        return view('dogtracker.view-dog-records', compact('dogname', 'breed', 'dob', 'mother_health_history', 'father_health_history', 'sibling_health_history'));
    }

    public function create_dog_record()
    {
        return view('dogtracker.create-dog-record');
    }

    public function show_dog_record()
    {
        return view('dogtracker.show-dog-record');
    }

    public function edit_dog_record()
    {
        return view('dogtracker.edit-dog-record');
    }
}



