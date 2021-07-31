<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/',[IndexController::class, 'index']);
Route::post('/',[IndexController::class, 'login']);
Route::get('/test/{remember_token}',[IndexController::class, 'showTest']);
Route::post('/test/{remember_token}',[IndexController::class, 'doTest']);

Route::get('/result/{remember_token}',[IndexController::class, 'showResult']);
Route::get('/writingResultPDF/{id}',[IndexController::class, 'downloadPDF']);