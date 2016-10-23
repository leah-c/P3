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

@stop


@section('content')

  <h1>Developer's Best Friend</h1>
  <p>Look no further if you're looking for text to fill up blank space or need test user data!</p>

  <h2>Lorem Ipsum Text Generator</h2>
  <p>The Lorem Ipsum Text Generator tool will give you some dummy text. Just enter the
  number of paragraphs of text you'd like to have!</p>
  <a href ="generate_ipsum">Let's generate some lorem ipsum text!</a>

  <h2>Random user Generator</h2>
  <p>The Random User Generator tool will give you some dummy user names (i.e. Lisa Frank).</p>
  <a href ="generate_users">Let's get some random user names!</a>

  <ul><h2>TO DOs</h2>
    <li>
      <ul><h1>Ipsum Generator</h1>
        <li>[ x ] Create blurb for ipsum generator</li>
        <li>[   ] Determine how to display results from ipsum generator </li>
        <li>[ x ] Create link to ipsum generator from home page</li>
        <li>[ x ] Install ipsum generator package </li>
      </ul>
    </li>

    <li>
      <ul><h1>User Generator</h1>
        <li>[ x ] Create blurb for random user generator</li>
        <li>[ x ] Create link to user generator from home page</li>
        <li>[   ] Determine how to display results from user generator </li>
        <li>[ x ] Install random user generator package </li>
      </ul>
    </li>

    <li>
      <ul><h1>Validation/ Error Messages</h1>
        <li>[ x ] Test link to user generator </li>
        <li>[   ] Create Laravel Validation rules for user generator </li>
        <li>[   ] Test random user generator package </li>

        <li>[ x ] Test link to ipsum generator </li>
        <li>[   ] Create Laravel Validation rules for ipsum generator </li>
        <li>[   ] Test ipsum generator package </li>
      </ul>
    </li>

    <li>
      <ul><h1>Structure</h1>
        <li>[ x ] Create form for ipsum generator </li>
        <li>[ x ] Create form for user generator </li>
      </ul>
    </li>

    <li>
      <ul><h1>Aesthetics</h1>
        <li>[   ] Make forms look pretty </li>
        <li>[   ] Add padding between container and fixed navbar </li>
        <li>[   ] Highlight active links, might need to pass param </li>

      </ul>
    </li>

    <li>
      <ul><h1>Extras</h1>
        <li>[   ] Incorporate password generator from P2 </li>
        <li>[   ] Create link to password generator on home page</li>
        <li>[   ] Determine how to display results from password generator </li>
        <li>[   ] Create a clipboard function for easier copying </li>

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
