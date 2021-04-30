<?php

use App\Http\Controllers\AdminController as Admin;
use App\Http\Controllers\HomeController as Home;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;


        ->name('dashboard');
    /** Route Kasir **/
    Route::resource('kasir', CashierController::class);
    /** Route Barang **/
    Route::resource('barang', ItemController::class);
    Route::resource('merek', MerkController::class);
    Route::resource('kategori', CategoriesController::class);
    /** Route Profile **/
    Route::resource('profil', ProfileController::class);
