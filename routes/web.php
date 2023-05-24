<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'getCategory']);
Route::get('/', [BookController::class, 'viewCard']);
Route::get('/detail/{id}', [BookController::class, 'viewDetail']);
Route::get('/publisher', [BookController::class, 'viewPublisher']);
Route::get('/publisher/{id}', [BookController::class, 'getDetailPublisher']);
Route::get('/category/{id}', [BookController::class, 'getIdCategory']);
Route::get('/contact', [BookController::class, 'viewContact']);
