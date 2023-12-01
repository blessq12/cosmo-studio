<?php
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CrmController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\UserController;
use App\Models\GalleryCategory;
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
        Route::post('/gallesries/store-image', [GalleryController::class, 'storeImage'])->name('galleries.store-image');
        Route::delete('/gallesries/destroy-image/{galleryId}/{id}', [GalleryController::class, 'destroyImage'])->name('galleries.destroy-image');
        
        Route::resource('galleries', GalleryController::class);
        
        Route::post('/studios/store-image', [StudioController::class, 'storeImage'])->name('studios.store-image');
        Route::resource('studios', StudioController::class);

        Route::resource('banners', BannerController::class);
    });
});