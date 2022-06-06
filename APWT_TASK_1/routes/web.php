
<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\aboutUsController;
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


Route::get('/',[homeController::class, 'home'])->name('home');
Route::get('/service',[serviceController::class, 'service'])->name('service');
Route::get('/teams',[teamController::class, 'team'])->name('team');
Route::get('/aboutUs',[aboutUsController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactUs',[ContractController::class, 'contract'])->name('contract');