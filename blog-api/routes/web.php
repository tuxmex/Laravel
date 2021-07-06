<?php

use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('create-category', [CategoryController::class, 'create']);
Route::post('post-category-form', [CategoryController::class, 'store']);
Route::get('all-categories', [CategoryController::class, 'index']);
Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
Route::post('update-category-form/{id}', [CategoryController::class, 'update']);
Route::get('destroy-category/{id}', [CategoryController::class, 'destroy']);


Route::get('create-blog-post', [BlogPostController::class, 'create']);
Route::post('store-blog-post', [BlogPostController::class, 'store']);
Route::get('all-blog-posts', [BlogPostController::class, 'index']);
Route::get('edit-blog-post/{id}', [BlogPostController::class, 'edit']);
Route::post('update-blog-post/{id}', [BlogPostController::class, 'update']);
Route::get('destroy-blog-post/{id}', [BlogPostController::class, 'destroy']);
