<?php

use App\Http\Controllers\logoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\perjalananController;
use App\Http\Controllers\cariController;

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


Route::get('/login', [loginController::class, 'login']);
Route::post('/login', [loginController::class, 'authenticate']);
Route::get('/logout', [logoutController::class, 'logout']);
Route::get('/', [loginController::class, 'login'])->name('login');
Route::get('/register', [registerController::class, 'register']);
Route::post('/saveregister', [registerController::class, 'simpanregister']);
Route::get('/dashboard', [dashboardController::class, 'index']);
Route::group(['middleware' => 'auth'], function(){
  Route::post('/simpandata', [perjalananController::class, 'simpandata']);
  Route::get('/inputperjalanan', [perjalananController::class, 'perjalanan']);
  Route::get('/cari', [cariController::class, 'cari']);
  Route::get('/urutkan', [DashboardController::class, 'urutkanPerjalanan']);
});
// Route::group(['middleware' => 'guest'], function(){


// });