<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();
Route::withoutMiddleware([App\Http\Middleware\Authenticate::class])->group(function () {
    Route::get('/rumah', [App\Http\Controllers\HomeController::class, 'rumah'])->name('rumah');
    Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
    Route::get('/event', [App\Http\Controllers\HomeController::class, 'event'])->name('event');
});

Route::get('/feedback', [App\Http\Controllers\HomeController::class, 'feedback'])->name('feedback');



