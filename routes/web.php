<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;

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

Route::get('', [IndexController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');



// Route::get('/tampilan2', function () {return view('tampilan2');})->name('tampilan2');

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');

