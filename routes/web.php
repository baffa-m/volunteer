<?php

use App\Http\Controllers\HomeController;
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

Route::group([], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/find-opportunities', [HomeController::class, 'opportunities'])->name('opportunities');
    Route::get('/recruit-volunteers', [HomeController::class, 'recruit'])->name('recruit');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact.us');
});
