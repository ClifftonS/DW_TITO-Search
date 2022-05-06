<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'Home']);
Route::get('/ajax', [MainController::class, 'ajax']);
Route::get('/ajax2', [MainController::class, 'ajax2']);
Route::get('/ajax3', [MainController::class, 'ajax3']);
Route::get('/ajax4', [MainController::class, 'ajax4']);
Route::get('/ajax5', [MainController::class, 'ajax5']);
Route::get('/ajax6', [MainController::class, 'ajax6']);
