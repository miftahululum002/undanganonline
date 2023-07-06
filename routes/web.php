<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BerandaController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/dologin', [LoginController::class, 'authenticate'])->name('login.proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/order/theme/{kode}', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/1', [OrderController::class, 'user'])->name('order.1');
Route::post('/order/imgupload', [OrderController::class, 'imgUpload'])->name('order.imgupload');
Route::match(['get', 'post'], '/order/2', [OrderController::class, 'mempelai'])->name('order.2');
Route::match(['get', 'post'], '/order/3', [OrderController::class, 'acara'])->name('order.3');
Route::get('/demo/{kode}', [DemoController::class, 'index'])->name('demo.index');
Route::get('/themes', [ThemesController::class, 'index'])->name('themes.index');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
