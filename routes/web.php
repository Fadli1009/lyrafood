<?php

use App\Http\Controllers\FoodController;
use App\Models\CategoriesFood;
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
    return view('admin.pages.index');
});
Route::resource('food', FoodController::class);
Route::resource('category', CategoriesFood::class);
