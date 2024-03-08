<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::get('/dashboard',[RegisterController::class,'dashboard'])->name('dashboard');
Route::post('/store',[RegisterController::class,'store'])->name('store');
Route::get('/login',[RegisterController::class,'login'])->name('login');
Route::get('/logout',[RegisterController::class,'logout'])->name('logout');