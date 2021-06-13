<?php

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

Route::get('/ecommerce', function () {
    return view('ecommerce/welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::group(['middleware' =>['auth']], function(){

    Route::post('logout','App\Http\Controllers\DashboardController@logout')->name('logout');

    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::resource('/category','App\Http\Controllers\CategoriesController');
    Route::resource('/product','App\Http\Controllers\ProductsController');
    Route::resource('/user','App\Http\Controllers\UsersController');
    Route::resource('/brand','App\Http\Controllers\BrandsController');
    Route::resource('/commission','App\Http\Controllers\CommissionsController');
    Route::get('/shop','App\Http\Controllers\ShoppageController@shop_index');
});
