<?php

use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::get("/movies", [MovieController::class, 'index'])->name('movie.index');
    Route::get("/movies/create", [MovieController::class, 'create'])->name('movie.create');
    Route::post("/movies/store", [MovieController::class, 'store'])->name('movie.store');
    Route::get("/movies/edit/{id}", [MovieController::class, 'edit'])->name('movie.edit');
    Route::post("/movies/update/{id}", [MovieController::class, 'update'])->name('movie.update');
    Route::get("/movies/delete/{id}", [MovieController::class, 'destroy'])->name('movie.delete');
    Route::get("/menu", [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
    Route::get("/cart", [CartController::class, 'index'])->name('cart.index');
    Route::post("/cart/store", [CartController::class, 'store'])->name('cart.store');
    Route::delete("/cart/delete/{id?}", [CartController::class, 'destroy'])->name('cart.delete');
});

Route::middleware('admin')->group(function () {
    Route::get("/admin", [App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin.home.index');
    Route::get("/admin/users", [App\Http\Controllers\admin\UserController::class, 'index'])->name('admin.user.index');
    Route::get("/admin/product", [App\Http\Controllers\admin\ProductController::class, 'index'])->name('admin.product.index');
    Route::get("/admin/product/create", [App\Http\Controllers\admin\ProductController::class, 'create'])->name('admin.product.create');
    Route::post("/admin/procuct/store", [App\Http\Controllers\admin\ProductController::class, 'store'])->name('admin.product.store');
    Route::get("/admin/procuct/edit/{id}", [App\Http\Controllers\admin\ProductController::class, 'edit'])->name('admin.product.edit');
    Route::post("/admin/procuct/update{id}", [App\Http\Controllers\admin\ProductController::class, 'update'])->name('admin.product.update');
    Route::get("/admin/procuct/delete/{id}", [App\Http\Controllers\admin\ProductController::class, 'destroy'])->name('admin.product.delete');
    Route::get("/admin/menu", [MenuController::class, 'index'])->name('admin.menu.index');
    Route::get("/admin/menu/create", [MenuController::class, 'create'])->name('admin.menu.create');
    Route::post("/admin/menu/store", [MenuController::class, 'store'])->name('admin.menu.store');
});
