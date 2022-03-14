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

// /products = all products
// /products/productName
// /products/productId

//Pattern is integer
// allowing user only integer
//[0-9]+ we would like any number not only 0 to 9
// Route::get('/products/{id}',
//      [ProductsController::class, 'show'])->where('id', '[0-9]+');

//pattern is string
// Route::get('/products/{name}',
//      [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');

//multiple params
//it will need to be in the same order as the endpoints
Route::get('/products/{name}/{id}',
     [ProductsController::class, 'show'])->where([
         'name' => '[a-z]+',
         'id' => '[0-9]+'
     ]);
