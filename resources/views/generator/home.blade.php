@extends('layouts.master')


@section('title')
    Web Dev Generator Tools Home
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

  <h1>You are on the Generator landing page.</h1>

  <ul><h2>TO DOs</h2>
    <li>
      <ul><h1>Ipsum Generator</h1>
        <li>[ ] Create blurb for ipsum generator</li>
        <li>[ ] Determine how to display results from ipsum generator </li>
        <li>[ ] Create link to ipsum generator </li>
        <li>[ ] Install ipsum generator package </li>
      </ul>
    </li>

    <li>
      <ul><h1>User Generator</h1>
        <li>[ ] Create link to user generator </li>
        <li>[ ] Determine how to display results from user generator </li>
        <li>[ ] Install random user generator package </li>
      </ul>
    </li>

    <li>
      <ul><h1>Extras</h1>
        <li>[ ] Incorporate password generator from P2 </li>
        <li>[ ] Create link to password generator </li>
        <li>[ ] Determine how to display results from password generator </li>
      </ul>
    </li>
  </ul>


@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop
