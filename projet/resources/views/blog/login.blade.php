@extends('master')
@section('styls')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
@section('title')
{{ setting('blog.title')  }}
@endsection
@section('content')

@if (count($errors) > 0 || isset($errorsapi) )
   <div class = "alert alert-danger">
      <ul>
        @if(count($errors) >0 )
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
        @endif
        @if( isset($errorsapi) && count($errorsapi)>0)
             @foreach ($errorsapi as $error)
              <li>{{ $error }}</li>
           @endforeach
           @endif
      </ul>
   </div>
@endif
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{asset('images/user.jpg')}}" id="icon" alt="User Icon" style="width: 100px;" />
    </div>

    <!-- Login Form -->
    <form action="{{url('/login')}}" method="post">
      @csrf
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" value="{{old('login')}}">
      <input type="password" id="password" class="fadeIn third" name="password" >
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
@endsection