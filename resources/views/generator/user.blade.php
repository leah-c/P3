@extends('layouts.master')


@section('title')
  Random User Generator
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

  <h1>You are on the Random User Generator landing page.</h1>
  <p>The Random User Generator tool will give you some dummy user names (i.e. Lisa Frank).</p>

    <form method = "POST" action = "/generate_users" >
      {{ csrf_field() }}
      <label>Number of Users: <input type = "text" name ="numUsers" placeholder=" ( Max 99 )" maxlength = "2"></label>
      <input type = "submit">
    </form>

    @if($errors->get('numUsers'))
      <ul>
          @foreach($errors->get('numUsers') as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    @endif

@endsection

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@endsection
