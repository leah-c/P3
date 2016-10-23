@extends('layouts.master')


@section('title')
    Generate Lorem Ipsum
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
  <h1>You are on the Lorem Ipsum Generator landing page.</h1>

  <ul><h2>TO DOs</h2>
    <li>[ ] Create blurb for ipsum generator </li>
    <li>[ ] Create blurb for random user generator </li>
    <li>[ ] Create corresponding link to each tool </li>

    <li>[ ] Create page for ipsum generator </li>
    <li>[ ] Create page for random user generator </li>
 </ul>

 {{--
   $view = '<form method = "POST" action = "/generate_users">';
   $view .= csrf_field(); # This will be explained more later
   $view .=  '<label>Number of Users: <input type = "text" name ="num users">';
   $view .=  '<input type = "submit">';
   $view .= '</form>';
 }}
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop
