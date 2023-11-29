<?php
use App\Http\Controllers\CrmController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::controller(IndexController::class)->name('root.')->group(function(){
    Route::get('/', 'index')->name('index');
});

Route::controller(UserController::class)->name('user.')->prefix('user')->group(function(){
    Route::middleware('guest')->group(function(){
        Route::get('login', 'login')->name('login');
        Route::post('login', 'userLogin')->name('user-login');
    });
    Route::get('logout', 'userLogout')->name('user-logout')->middleware('auth');
});

Route::middleware('auth')->group(function(){
    Route::controller(CrmController::class)->prefix('crm')->name('crm.')->group(function(){

        Route::get('/', 'index')->name('index');

        

    });
});