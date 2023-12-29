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

Auth::routes();

Route::prefix('admin/')->group(function () {

Route::get('/home', [HomeController::class, 'index'])->name('indexadmin');
Route::post('/create-menu',[HomeController::class, 'create'])->name('createadmin');
Route::get('/edit-menu/{idedit}/edit',[HomeController::class, 'edit'])->name('editadmin');
Route::put('/update-menu/{idedit}/update', [HomeController::class, 'update'])->name('updateadmin');
Route::get('/delete-menu/{iddelete}/delete', [HomeController::class, 'delete'])->name('deleteadmin');
 Route::delete('/delete-menu/{iddelete}/delete', [HomeController::class, 'delete'])->name('deleteadmin');



Route::get('/about', [HomeController::class, 'about'])->name('aboutadmin');

});