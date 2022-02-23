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

//Route that sends back a view
Route::get('/', function () {
    return view('welcome');
});

//Route to users, returning string
Route::get('users', function (){
    return 'Welcome to the users page';
});

//Route that will send back an array, laravel will automatically convert an array to JSON response
Route::get('/users', function(){
    return ['PHP', 'HTML', 'Laravel'];
});

//Route that will send back JSON object
Route::get('/users', function(){
    return response()->json([
        'name' => 'Miro',
        'course' => 'Laravel Beginner'
    ]);
});


//Route that will send back function
Route::get('/users', function(){
    return redirect('/');
});


