<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CatatanPerjalananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/registration', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', function () {
    return view('home.index');
})->middleware('auth');

Route::resource('/catatan-perjalanan', CatatanPerjalananController::class)->middleware('auth');

Route::get('/create', function () {
    return view('catatanPerjalanan.create');
})->middleware('auth');