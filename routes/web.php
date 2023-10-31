<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesFoodController;
use App\Http\Controllers\FoodController;
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

Route::get('/', [AdminController::class, 'index']);
Route::get('/index.html', function () {
    return view('admin.pages.index');
});
Route::resource('food', FoodController::class);
Route::resource('category', CategoriesFoodController::class);
