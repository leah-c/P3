<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'DEVBFF@home')->name('gen_home.index');

Route::get('/generate_ipsum', 'DEVBFF@ipsumHome')->name('gen_ipsum.index');

Route::get('/generate_users', 'DEVBFF@userHome')->name('gen_user.index');

Route::post('/generate_ipsum', 'DEVBFF@createIpsum')->name('gen_ipsum.create');

Route::post('/generate_users', 'DEVBFF@createUsers')->name('gen_user.create');



/*
# Direct user to the Generator tools landing page using IpsumController
Route::get('/', 'GeneratorIndexController@index')->name('gen_home.index');

# Direct user to the ipsum generator landing page using IpsumController
Route::get('/generate_ipsum', 'IpsumController@index')->name('gen_ipsum.index');

# Directs user to the confirmation page of the ipsum generator
Route::post('/generate_ipsum', 'IpsumController@create')->name('gen_ipsum.create');

# Direct user to the user generator landing page using IpsumController
Route::get('/generate_users', 'UserController@index')->name('gen_user.index');

# Directs user to the confirmation page of the random user generator
Route::post('/generate_users', 'UserController@create')->name('gen_user.create');
*/
