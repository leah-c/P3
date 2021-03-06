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

  <h1>Lorem Ipsum Generator</h1>
  <p>The Lorem Ipsum Text Generator tool will give you some dummy text. Just enter the
  number of paragraphs of text you'd like to have!</p>

  <form method = "POST" action = "/generate_ipsum">
    {{ csrf_field() }}
    <label>Number of Paragraphs: <input type = "text" name ="numParagraphs" placeholder=" (Max 50 ) " maxlength = "2"></label>
    <input type = "submit">
  </form>

  @if($errors->get('numParagraphs'))
    <ul class ="error_list">
        @foreach($errors->get('numParagraphs') as $error)
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
