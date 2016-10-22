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

Route::get('/', function () {
    //return view('welcome');
    $msg = '<h1>You are on the landing page.</h1></br>';

    $msg .= '<h2>TO DOs</h2></br>';
    $msg .= '[ ] Create blurb for ipsum generator</br>';
    $msg .= '[ ] Create blurb for random user generator</br>';
    $msg .= '[ ] Create corresponding link to each tool</br>';

    $msg .= '[ ] Create page for ipsum generator</br>';
    $msg .= '[ ] Create page for random user generator</br>';

    return $msg;

});
