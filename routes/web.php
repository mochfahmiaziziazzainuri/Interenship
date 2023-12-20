<?php

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

Route::get('/', function () {return view('primary.home');});
// Route::get('/about', function () {return view('component.about');})->name();




// Route::get('/tampilan2', function () {return view('tampilan2');})->name('tampilan2');
