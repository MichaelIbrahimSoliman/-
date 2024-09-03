<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

use App\Models\Product;


Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {


        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');


        /****   product item ******/
        Route::controller(ProductsController::class)->group(function () {
            Route::get('/products', 'index')->name('products.productlist');
            Route::get('/productcreate', 'create')->name('products.productcreate');
            Route::post('/productsstore',   'store')->name('products.store');
            Route::get('/productsshow',   'show')->name('products.show');
            Route::get('/productsedit',   'edit')->name('products.edit');
            Route::put('/productsupdate',   'update')->name('products.update');
            Route::delete('/productsdestroy',  'destroy')->name('products.destroy');
        });


        /****   category item ******/
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/categorys', 'index')->name('categorys.categoryslist');
            Route::get('/categorycreate', 'create')->name('categorys.categoryscreate');
            Route::post('/categorysstore',   'store')->name('categorys.store');
            Route::get('/categorysshow',   'show')->name('categorys.show');
            Route::get('/categorysedit',   'edit')->name('categorys.edit');
            Route::put('/categorysupdate',   'update')->name('categorys.update');
            Route::delete('/categorysdestroy',  'destroy')->name('categorys.destroy');
        });
        /****   subcategory item ******/
        Route::controller(SubcategoryController::class)->group(function () {
            Route::get('/subcategorys', 'index')->name('subcategorys.subcategoryslist');
            Route::get('/subcategorycreate', 'create')->name('subcategorys.subcategoryscreate');
            Route::post('/subcategorysstore',   'store')->name('subcategorys.store');
            Route::get('/subcategorysshow',   'show')->name('subcategorys.show');
            Route::get('/subcategorysedit',   'edit')->name('subcategorys.edit');
            Route::put('/subcategorysupdate',   'update')->name('subcategorys.update');
            Route::delete('/subcategorysdestroy',  'destroy')->name('subcategorys.destroy');
        });


        /****   brand item ******/
        Route::controller(BrandController::class)->group(function () {
            Route::get('/brands', 'index')->name('brand.brandlist');
            Route::get('/brandcreate', 'create')->name('brands.brandcreate');
            Route::post('/brandsstore',   'store')->name('brands.brandstore');
            Route::get('/brandsshow',   'show')->name('brands.show');
            Route::get('/brandsedit',   'edit')->name('brands.edit');
            Route::put('/brandsupdate',   'update')->name('brands.update');
            Route::delete('/brandsdestroy',  'destroy')->name('brands.destroy');
        });



        /****   color item ******/
        Route::controller(ColorController::class)->group(function () {
            Route::get('/colors', 'index')->name('color.list');
            Route::get('/colorscreate', 'create')->name('color.create');
            Route::post('/colorsstore',   'store')->name('color.store');
            Route::get('/colorsshow',   'show')->name('color.show');
            Route::get('/colorsedit',   'edit')->name('color.edit');
            Route::put('/colorsupdate',   'update')->name('color.update');
            Route::delete('/colorsdestroy',  'destroy')->name('color.destroy');
        });

        require __DIR__ . '/admin_auth.php';
    });
});
