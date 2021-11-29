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

Route::get('/', function () {
    return view('main.index');
});

Auth::routes();
Route::get('/dashboard', [\App\Http\Controllers\Main\DashboardController::class, 'index'])->name('dashboard');
Route::post('/dashboard', [\App\Http\Controllers\Main\DashboardController::class, 'index'])->name('dashboard2');
Route::get('/home', function(){redirect(route('dashboard'));})->name('home');


Route::get('/test/ajax', [\App\Http\Controllers\TestController::class, 'ajax']);
Route::get('/test', [\App\Http\Controllers\TestController::class, 'index']);
