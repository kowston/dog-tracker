<?php

use App\Http\Controllers\TestingSpaceController;
use Illuminate\Http\Request;
use App\Http\Controllers\DogTrackerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dogtracker', [DogTrackerController::class, 'index'])->name('hecko');
Route::get('dogtracker/view-dog', [DogTrackerController::class, 'view-dog']);
Route::get('dogtracker/view-dog', [DogTrackerController::class, 'create-dog']);

Route::get('testing-space', [TestingSpaceController::class, 'index']);
