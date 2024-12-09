<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewContactController;
use PharIo\Manifest\AuthorCollection;

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

Route::get('/', [NewContactController::class, 'index']);//入力画面
Route::post('/contacts/confirm', [NewContactController::class, 'confirm']); //確認画面
Route::post('/contacts', [NewContactController::class, 'store']);//保存
Route::post('/thanks', [NewContactController::class, 'thanks']);//完了画面

