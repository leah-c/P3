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

Route::get('/generate_ipsum', function () {
    //return view('welcome');
    $msg = '<h1>Ipsum Generator</h1></br>';

    $msg .= '<h2>TO DOs</h2></br>';
    $msg .= '[ ] Create blurb for ipsum generator</br>';
    $msg .= '[ ] Create form options for ipsum generator</br>';
    $msg .= '[ ] Determine how to display results from ipsum generator</br>';
    $msg .= '[ ] Install ipsum generator package</br>';

    return $msg;
});


Route::get('/generate_users', function () {
    //return view('welcome');
    $msg = '<h1>Random Users Generator</h1></br>';

    $msg .= '<h2>TO DOs</h2></br>';
    $msg .= '[ ] Create blurb for random user generator</br>';
    $msg .= '[ ] Create form options for random user generator</br>';
    $msg .= '[ ] Determine how to display results from random user generator</br>';
    $msg .= '[ ] Install random user package</br>';

    return $msg;
});
