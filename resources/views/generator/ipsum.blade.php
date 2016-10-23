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
  <h1>You are on the Lorem Ipsum Generator landing page.</h1>
  <p>The Lorem Ipsum Text Generator tool will give you some dummy text. Just enter the
  number of paragraphs of text you'd like to have!</p>

  <form method = "POST" action = "/generate_ipsum">
    {{ csrf_field() }}
    <label>Number of Paragraphs: <input type = "text" name ="numParagraphs" placeholder="Number of Paragraphs (Max)" maxlength = "2"></label>
    <input type = "submit">
  </form>
@endsection


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@endsection
