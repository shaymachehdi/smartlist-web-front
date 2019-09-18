@extends('dash')
@section('styls')

@endsection
@section('title')
{{ setting('blog.title')  }}
@endsection
@section('contenudach')
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
@if(session()->has('success'))
<div class="alert alert-success">
  <ul>
        
        <li>{{ session()->get('success') }}</li>
        
  </ul>
</div>
@endif


<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                   
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <
                  </tr>
                </tfoot>
                <tbody>
              
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
@endsection
