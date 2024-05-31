<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

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

Route::get('/laptop',[LaptopController::class, 'index']);

// routes/web.php



Route::post('/laptop', [LaptopController::class, 'search'])->name('search');

Route::get('/', function () {
    return view('welcome');
});
