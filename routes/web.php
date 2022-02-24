<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

//Route that sends back a view
Route::get('/', function () {
    return view('home');
});

//we have endpoint /products
//and we want to use index method from class ProductsController
//laravel 8 (new way)
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/about', [ProductsController::class, 'about']);


//Laravel 8 also new - screen syntax
Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//old versions - befre Laravel 8
//it is not working anymore 
// Route::get('/products', 'ProductsController@index');

