<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UbicosController;


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


Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('admin.dashboard')->middleware('auth:sanctum');

    Route::get('mapa', [UbicosController::class, 'mapa'])->name('mapa')->middleware('auth:sanctum');
});


Auth::routes();

