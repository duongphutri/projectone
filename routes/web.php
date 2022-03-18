<?php

use App\Http\Controllers\CategoriesController;
use App\Models\Categories;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/layout', [App\Http\Controllers\HomeController::class, 'layout'])->name('layout');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/category', [App\Http\Controllers\HomeController::class, 'category'])->name('category');

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',

    ],
    function () { 
        Route::get('/ad', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
    },
    Route::group(
        [
            'as' => 'categories.',
            'prefix' => 'categories',
        ],
        function () {
            Route::get('/index', [CategoriesController::class, 'index']);
            Route::get('', [CategoriesController::class, 'index'])->name('index');
            // Route::get('/{category}/show', [CategoriesController::class, 'show'])->name('show');

            // Route::get('/create', [CategoriesController::class, 'create'])->name('create');
            // Route::post('store', [CategoriesController::class, 'store'])->name('store');

            // Route::get('{category}/edit', [CategoriesController::class, 'edit'])->name('edit');
            // Route::post('update/{category}', [CategoriesController::class, 'update'])->name('update');

            // Route::get('destroy/{category}', [CategoriesController::class, 'destroy'])->name('destroy');

            // Route::get('/{category}/children', [CategoriesController::class, 'children'])->name('children');
        }
    )

);
