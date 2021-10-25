<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreenpassController;

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

Route::get('/', [GreenpassController::class, 'index'])->name('greenpass_home');
Route::get('/result/{code?}', [GreenpassController::class, 'check_result'])->name('check_result');
