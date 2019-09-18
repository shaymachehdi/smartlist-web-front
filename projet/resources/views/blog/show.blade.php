@extends('master')
@section('title')
{{ $post->title }}
@endsection
@section('content')
<div class="row">
	<div class="col-md-12 text-right">
		<a href="{{url('/blog')}}">Return back</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h1>{{$post->title}}</h1>
		<img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}">
		<p>{!! $post->body !!}</p>
	</div>
</div>
@endsection