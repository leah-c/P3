@extends('layouts.master')


@section('title')
    Generate Random Users
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

  <h1>You are on the Random User Generator landing page.</h1>

  {{--
    $view = '<form method = "POST" action = "/generate_ipsum">';
    $view .= csrf_field(); # This will be explained more later
    $view .=  '<label>Number of Paragraphs: <input type = "text" name ="num paragrphs">';
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
