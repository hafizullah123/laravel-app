<?php
use App\Http\Controllers\RegisterController; 

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout');
// });
 

Route::resource('registers', RegisterController::class);