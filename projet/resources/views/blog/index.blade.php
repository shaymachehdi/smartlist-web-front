@extends('master')
@section('title')
{{ setting('home.title') }}
@endsection
@section('slider')
<div class="row">
	<div class="col-md-12">
		
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  	@foreach($myposts as $post)
    <div class="carousel-item @if($loop->first) active @endif">
      <img src="{{asset('/storage/'.$post->image)}}" class="d-block w-100" alt="...">
    </div>
    @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		
	</div>
	
</div>
@endsection
@section('content')



<div class ="row">
	@foreach($myposts as $post)
	<div class="col-md-4 my-3">
		<div class="card">
            <img class="card-img-top" src="{{asset('/storage/'.$post->image)}}" alt="Card image cap">
            <div class="card-body">
                 <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{str_limit($post->excerpt,10)}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
         </div>

	</div>
	@endforeach
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$( document ).ready(function() {
        $('.carousel').carousel();
    });
	

</script>
@endsection