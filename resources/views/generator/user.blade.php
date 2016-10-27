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

  <h1>Random User Generator</h1>
  <p>The Random User Generator tool will give you some dummy user names (i.e. Lisa Frank).</p>
  <p>Just enter the number of users you'd like to have.</p>

    <form method = "POST" action = "/generate_users" >
      {{ csrf_field() }}
      <label>Number of Users: <input type = "text" name ="numUsers" placeholder=" ( Max 99 )" maxlength = "2"></label><br/>

      @if($errors->get('numUsers'))
        <ul class ="error_list">
            @foreach($errors->get('numUsers') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      @endif

      <input type="checkbox" name="phone_num" value="phone_num" />Phone Number<br/>
      <input type="checkbox" name="address" value="address" />Address<br/>
      <input type="checkbox" name="blurb" value="blurb" />Small Profile Blurb<br/>

      <input type = "Submit">

    </form>

    {{--@if($errors->get('numUsers'))
      <ul class ="error_list">
          @foreach($errors->get('numUsers') as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    @endif
    --}}
    
@endsection

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@endsection
