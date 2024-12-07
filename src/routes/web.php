<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewContactController;

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


Route::get('/', [NewContactController::class, 'index'])->name('contact-form');//入力画面
Route::post('/contacts/confirm', [NewContactController::class, 'confirm']);//確認画面
Route::post('/contacts', [NewContactController::class, 'store']);//保存

