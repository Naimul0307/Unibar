<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth','role:admin')->group(function () {
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/admin/dashboard','Index')->name('admindashboard');
    });
});

Route::middleware('auth','role:admin')->group(function () {
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/all-category','Index')->name('allcategory');
        Route::get('/admin/add-category','AddCategory')->name('addcategory');
    });
});

Route::middleware('auth','role:admin')->group(function () {
    Route::controller(SubCategoryController::class)->group(function(){
        Route::get('/admin/all-subcategory','Index')->name('allsubcategory');
        Route::get('/admin/add-subcategory','AddSubCategory')->name('addsubcategory');
    });
});
Route::middleware('auth','role:admin')->group(function () {
    Route::controller(ProductController::class)->group(function(){
        Route::get('/admin/all-product','Index')->name('allproduct');
        Route::get('/admin/add-product','AllProduct')->name('addproduct');
    });
});
Route::middleware('auth','role:admin')->group(function () {
    Route::controller(OrderController::class)->group(function(){
        Route::get('/admin/all-order','Index')->name('allorder');
        Route::get('/admin/pendingorder','PendingOrder')->name('pendingorder');
        Route::get('/admin/completeorder','CompleteOrder')->name('completeorder');
        Route::get('/admin/canceledorder','CanceledOrder')->name('canceledorder');
    });
});
require __DIR__.'/auth.php';
