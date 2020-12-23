<?php

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

Route::get('/', [App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/customers/index', [App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/customers/create', [App\Http\Controllers\CustomerController::class, 'create']);
Route::post('/customers/store', [App\Http\Controllers\CustomerController::class, 'store']);
Route::get('/customers/{id}/edit', [App\Http\Controllers\CustomerController::class, 'edit']);
Route::post('/customers/{id}/update', [App\Http\Controllers\CustomerController::class, 'update']);
Route::get('/customers/{id}/destroy', [App\Http\Controllers\CustomerController::class, 'destroy']);

Route::get('/cars', [App\Http\Controllers\CarController::class, 'index']);
Route::get('/cars/', [App\Http\Controllers\CarController::class, 'index']);
Route::get('/cars/index', [App\Http\Controllers\CarController::class, 'index']);
Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create']);
Route::post('/cars/store', [App\Http\Controllers\CarController::class, 'store']);
Route::get('/cars/{id}/edit', [App\Http\Controllers\CarController::class, 'edit']);
Route::post('/cars/{id}/update', [App\Http\Controllers\CarController::class, 'update']);
Route::get('/cars/{id}/destroy', [App\Http\Controllers\CarController::class, 'destroy']);

Route::get('/all', [App\Http\Controllers\CarController::class, 'all']);