@extends('master')
@section('title')
{{ setting('blog.title') }}
@endsection
@section('content')
<div class="row">
	<div class="col-md-8">
		<h1>bolg page</h1>
      @foreach($myposts as $post)
	
		<div class="card text-center">
			<a href="{{url('/post/'.$post->slug)}}">
            <img class="card-img-top" src="{{asset('/storage/'.$post->image)}}" alt="Card image cap">
            </a>
            <div class="card-body">
            	<a href="{{url('/post/'.$post->slug)}}">
                   <h5 class="card-title">{{$post->title}}</h5>
                </a>
                  <p class="card-text">{{str_limit($post->excerpt,10)}}</p>
                  <a class="list-group-item-action" href="{{url('/blog/'.$post->category_id)}}">
                    <span class="badge badge-primary">{{$post->category->name}}</span>
                </a>
                
            </div>
         

	</div>

	@endforeach

	 <div class="pagination">
		{{$myposts->links()}}
		
	 </div>

	</div>
	<div class="col-md-4">
      <h1>categories</h1>
      <ul class="list-group">
      	<li class="list-group-item @if(!$id) active @endif" ><a class="list-group-item-action"href="{{url('/blog/')}}">All </a></li>
      	@foreach($mycategorys as $category)
      	  <li class="list-group-item d-flex justify-content-between align-items-center @if($id==$category->id) active @endif">
                 <a class="list-group-item-action" href="{{url('/blog/'.$category->id)}}">{{$category->name}} </a>
                <span class="badge badge-primary badge-pill">{{$category->posts->count()}}</span>
          </li>
      	  
      	 @endforeach
      </ul>
	</div>
</div>
@endsection