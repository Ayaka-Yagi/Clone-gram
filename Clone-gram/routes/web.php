<?php

use Illuminate\Support\Facades\Route;

//コントローラー
use App\Http\Controllers\CloneGramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// index（投稿一覧・トップページ）
Route::get('/Clone-gram/index', [CloneGramController::class, 'index']);

// my_page（マイページ）
Route::get('/Clone-gram/my_page', [CloneGramController::class, 'my_page']);

