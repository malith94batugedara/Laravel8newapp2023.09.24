<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;

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
    return view('welcome');
});

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');

    Route::get('/add-category', [CategoryController::class, 'create'])->name('admin.addcategory');

    Route::post('/add-category', [CategoryController::class, 'store'])->name('admin.addcategory');

    Route::get('/edit-category/{category_id}', [CategoryController::class, 'edit'])->name('admin.editcategory');

    Route::put('/update-category/{category_id}', [CategoryController::class, 'update'])->name('admin.updatecategory');

    Route::get('/delete-category/{category_id}', [CategoryController::class, 'delete'])->name('admin.deletecategory');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
