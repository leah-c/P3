@extends('layouts.master')


@section('title')
  Developer's Best Friend
@endsection


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@endsection


@section('content')
  <a href="/">Home Page</a>

  <h1>Here's a list of users!</h1>


  @foreach( $users as $name )
     <p>{{$name}}</p>
  @endforeach


@endsection


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@endsection
