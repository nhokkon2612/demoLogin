<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
})->name('showFormLogin');

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/change-password',[LoginController::class,'showFormChangePassword'])->name('show-change-password');
Route::post('/change-password',[LoginController::class,'changePassword'])->name('change-password');

Route::get('/resetPassword',[LoginController::class,'showFormResetPassword'])->name('show-reset-password');
Route::post('/resetPassword',[LoginController::class,'resetPassword'])->name('reset-password');

Route::get('/',function (){
    return view('dashboard');
})->name('dashboard');
