## Code with Dary laravel tutorial

- **[Code with Dary](https://www.youtube.com/watch?v=376vZ1wNYPA)**

laravel new project_name
//or alternative is via composer
composer create-project --prefer-dist laravel/laravel project_name

# starting project
php artisan serve
php artisan serve --port=XXXX

# removing IP from url
change /etc/hosts file

# editors - VScode
extensions:
- laravel artisan - it perform artisan command in the vs code terminal
- laravel blade snippets winnie lin
- laravel blade spacer - create spaces between brackets
- laravel goto view - codingyou - it will open the view after hovering mouse
- laravel snippets - winnie lin - autocomplete
- laravel extra intellisense - amir
- live sass compiler 54:22 - ritwick dey
- beautify css - michelemelluso
- php instellisense - felix becker
- getter/setter generator / augustin martinez ibarra
- bracket pair colorizes - coenraadS
- emmet live - yuri semeniuk - html templates
- github
- javasscript - charalampos karypidis
- vscode great icons - emmanuel beziat

FILE- preferences File Icons Thme / choose VS gret icons
help - file icons

# what is .env file
enviroment setups are here
what is redis_host?

CREATOR_NAME = "Miro"

return env('DB_DATABASE');

.env.example - if you make changes, it is like template

# composer json and lock file
composer is dependency manager

rm -rf composer.lock

composer install
composer update

# composer and packagist
adding library 
google -> mollie api php

packagist.org -> search for mollie
copy:
composer require mollie/mollie-api-php
//it will pull all necessary libraries from packagist
composer update

# the vendor directory
here is autoload files, also our laravel project is in vendor directory
there is source code for laravel framework!!!

# basic routing
/routes/web.php
there can be also another tye of requests than get

php artisan serve
->error vendor/autoload.php' (include_path='C:\xampp\php\PEAR') in
https://stackoverflow.com/questions/41209349/requirevendor-autoload-php-failed-to-open-stream
composer install
//which will import your packages and create the vendor folder, along with the autoload script.

# http responses in routing
//Route that will send back an array, laravel will automatically convert an array to JSON response
return json
return function

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

# creating our first page
creating home view

# controllers
manual way for creating controller
app/Http/Controllers
create file ProductsController.php

<?php

namespace App\Http\Controllers;

class ProductsController extends Controller {

}

instead doing this we can use artisan to create controller for us

php artisan list
//show commands with examples

php artisan make:controller ProductsController

we will edit web.php to send data to controller and then to view

# passing data to views
1, option
compact()
inside views folder, inside product/index.blade.php

2, option
with() 
we can pass only one parameter, but this can be solved by passing array

3, option directly in the view

# route parameters
up till now we have been doing request on the single page

# named routes
