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

# Directs user to the landing page
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

# Directs user to the landing page of the random ipsum generator
Route::get('/generate_ipsum', function () {
    //return view('welcome');
    $msg = '<h1>Ipsum Generator</h1></br>';

    $msg .= '<h2>TO DOs</h2></br>';
    $msg .= '[ ] Create blurb for ipsum generator</br>';
    $msg .= '[ ] Create form options for ipsum generator</br>';
    $msg .= '[ ] Determine how to display results from ipsum generator</br>';
    $msg .= '[ ] Install ipsum generator package</br></br>';

    $view = '<form method = "POST" action = "/generate_ipsum">';
    $view .= csrf_field(); # This will be explained more later
    $view .=  '<label>Number of Paragraphs: <input type = "text" name ="num paragrphs">';
    $view .=  '<input type = "submit">';
    $view .= '</form>';

    return $msg . $view;
});

# Directs user to the confirmation page of the random user generator
Route::post('/generate_ipsum', function () {
    return 'Ipsum generated.';
});

# Directs user to the landing page of the random user generator
Route::get('/generate_users', function () {
    //return view('welcome');
    $msg = '<h1>Random Users Generator</h1></br>';

    $msg .= '<h2>TO DOs</h2></br>';
    $msg .= '[ ] Create blurb for random user generator</br>';
    $msg .= '[ ] Create form options for random user generator</br>';
    $msg .= '[ ] Determine how to display results from random user generator</br>';
    $msg .= '[ ] Install random user package</br></br>';

    $view = '<form method = "POST" action = "/generate_users">';
    $view .= csrf_field(); # This will be explained more later
    $view .=  '<label>Number of Users: <input type = "text" name ="num users">';
    $view .=  '<input type = "submit">';
    $view .= '</form>';

    return $msg . $view;
});

# Directs user to the confirmation page of the random user generator
Route::post('/generate_users', function () {
    return 'Users generated.';
});
