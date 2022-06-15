<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\pharmacistController;
use App\Http\Controllers\contractController;
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

Route::get('/',[homeController::class, 'homePage'])->name('home');
Route::get('/registration',[pharmacistController::class, 'pharmacistCreate'])->name('pharmacistCreatePage');
Route::post('/pharmacistCreate',[pharmacistController::class, 'pharmacistCreateSubmitted'])->name('pharmacistCreate');
Route::get('/login',[pharmacistController::class, 'pharmacistLogin'])->name('pharmacistLoginPage');
Route::post('/loginSubmit',[pharmacistController::class, 'pharmacistLoginSubmitted'])->name('pharmacistLogin');
Route::get('/contractUs',[contractController::class, 'ContractView'])->name('ContractView');
