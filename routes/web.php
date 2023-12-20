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

Route::get('/', function () {return view('primary.home');})->name('home');
Route::get('/about', function () {return view('primary.about');})->name('about');
Route::get('/service', function () {return view('primary.services');})->name('service');
Route::get('/project', function () {return view('primary.project');})->name('project');
Route::get('/contact', function () {return view('primary.contact');})->name('contact');



// Route::get('/tampilan2', function () {return view('tampilan2');})->name('tampilan2');
