<?php

use App\Http\Controllers\frontEnd\customer\CustomerController;
use App\Http\Controllers\frontEnd\user\LoginController;
use App\Http\Controllers\frontEnd\user\UserController;
use App\Http\Livewire\Book\StoreBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'frontEnd'], function () {
    Route::post('login', [LoginController::class, 'login'])->name('login');
});
Route::group(['namespace' => 'frontEnd', 'prefix' => 'customer'], function () {
    Route::post('store', [CustomerController::class, 'store'])->name('store');
    Route::post('login', [CustomerController::class, 'login'])->name('login');
    Route::post('emai_verified', [CustomerController::class, 'emai_verified'])->name('emai_verified');
    Route::post('search', [CustomerController::class,'search'])->name('search');

});
Route::group(['namespace' => 'frontEnd', 'middleware' => 'auth:sanctum', 'prefix' => 'customer'], function () {
    Route::post('book', [CustomerController::class,'book'])->name('book');
    Route::get('viewBook', [CustomerController::class,'viewBook'])->name('viewBook');
});
