<?php

use App\Http\Controllers\SedController;
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



Route::get('/', [SedController::class, 'index'])->name('/');
Route::post('/load-data', [SedController::class, 'loadData'])->name('load-data');
