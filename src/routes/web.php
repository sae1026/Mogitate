<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductldController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::post('/products', [ProductController::class, 'imagepost']);
/*Route::get('/{producted}', [ProductController::class, 'edit']);*/

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/{productld}', [ProductldController::class, 'index']);
/*Route::get('/{producted}', [ProductldController::class, 'edit']);*/