<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
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

Route::get('/',[indexController::class, 'index']);
Route::post('/',[indexController::class, 'login']);
Route::get('/test',[indexController::class, 'showTest']);
Route::post('/test',[indexController::class, 'doTest']);
