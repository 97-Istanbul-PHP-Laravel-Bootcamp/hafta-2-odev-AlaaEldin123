<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;



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

//admin user routes

Route::prefix('admin')->group( function() {

Route::get('/dashboard', [AdminController::class, 'AdminDashboard']);

Route::get('/login', [AdminController::class, 'AdminLogin']);

Route::get('/users/view', [AdminController::class, 'AdminView'])->name('admin.view');

Route::get('/users/store', [AdminController::class, 'admin_register'])->name('admin.register');

Route::get('/users/edit', [AdminController::class, 'adminEdit'])->name('admin.edit');

Route::get('/users/delete', [AdminController::class, 'adminDelete'])->name('admin.delete');




});


// all category routes
Route::prefix('category')->group( function() {

Route::get('/view', [CategoryController::class, 'CategoryView'])->name('Category.view');



Route::get('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');

Route::get('/edit', [CategoryController::class, 'CategoryEdit'])->name('category.edit');

Route::get('/delete', [CategoryController::class, 'CategoryDelete'])->name('category.delete');

});



// all category routes
Route::prefix('product')->group( function() {

Route::get('/view', [ProductController::class, 'ProductView'])->name('product.view');

 Route::get('/store', [ProductController::class, 'ProductStore'])->name('product.store');

Route::get('/edit', [ProductController::class, 'ProductEdit'])->name('product.edit');

Route::get('/delete', [ProductController::class, 'ProductDelete'])->name('product.delete');

});