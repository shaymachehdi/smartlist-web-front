@extends('master')
@section('title')
{{ setting('contact.title') }}
@endsection
@section('content')
@if(session('success'))
<div class="row">
	<div class="col-md-6 mx-auto text-center">
		<div class="alert alert-success">{{session('success')}}</div>
		
	</div>
</div>
@endif
<div class="row">
	<div class="col-md-4">
		<h2>{{setting('contact.phone')}}</h2>
	</div>
	<div class="col-md-8">
		<h2>{{setting('contact.email')}}</h2>
	</div>
	
</div>
<div class="row">
	<div class="col-md-6">
		{!!setting('contact.map')!!}
	</div>
	<div class="col-md-6">
		 <form action="{{url('/contact')}}" method="post">
		 	@csrf
                 <div class="form-group">

                    <label for="object">Object:</label>
                    <input type="object" class="form-control" id="object" name="object">

                 </div>
                 <div class="form-group">

                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                    
                 </div>

                 <div class="form-group">

                    <label for="message">Message:</label>
                    <textarea class="form-control" rows="5" id="message" name="message"></textarea>

                  </div>
  
                <button type="submit" class="btn btn-primary">Submit</button>
         </form>
	</div>
	
</div>
@endsection