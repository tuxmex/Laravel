<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('hello', function(){
    return view('hello');
});

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('create-category', [CategoryController::class, 'create']);

Route::post('post-category-form', [CategoryController::class, 'store']);