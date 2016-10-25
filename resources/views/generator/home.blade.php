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

  <h1>Developer's Best Friend</h1>
  <p>Look no further if you're looking for text to fill up blank space or need test user data!</p>

  <h2>Lorem Ipsum Text Generator</h2>
  <p>The Lorem Ipsum Text Generator tool will give you some dummy filler text. </p>
  <a href ="generate_ipsum"><input type="button" value="Let's generate some Lorem Ipsum text!"></a>

  <h2>Random User Generator</h2>
  <p>The Random User Generator tool will give you some dummy user names.</p>
  <a href ="generate_users"><input type="button" value="Let's generate some random users!"></a>

@endsection

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@endsection
