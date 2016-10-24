@extends('layouts.master')


@section('title')
    Generate Lorem Ipsum Text
@endsection


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    {{--<link href="/css/books/show.css" type='text/css' rel='stylesheet'>--}}
@endsection


@section('content')
  <br><br>
  <h1>Here's a list of users!</h1>

  {{$users}}


@endsection


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@endsection
