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

  <section>
    <p>Look no further if you're looking for text to fill up blank space or need test user data! Use one of the handy data generators below!</p>
    <h2>Lorem Ipsum Text Generator</h2>
    <p>The Lorem Ipsum Text Generator tool will give you some dummy filler text. </p>
    <a href ="generate_ipsum">Let's generate some Lorem Ipsum text!</a>
  </section>

  <section>
    <h2>Random User Generator</h2>
    <p>The Random User Generator tool will give you some dummy user names.</p>
    <a href ="generate_users">Let's generate some random users!</a>
  </section>

@endsection

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@endsection
