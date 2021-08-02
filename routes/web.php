<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
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
Route::get('/admin/view-score/{remember_token}',[AdminController::class, 'showResult']);
Route::get('/admin/load-database/taec-test/all',[AdminController::class, 'showDatabase']);
Route::get('/writingResultPDF/{id}',[IndexController::class, 'downloadPDF']);