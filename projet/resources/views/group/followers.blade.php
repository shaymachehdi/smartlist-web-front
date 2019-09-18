@extends('dash')
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
                    <th>{{trans('lang.password')}}</th>
                    <th>Email</th>
                    <th>Office</th>
                   
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>Office</th>
                    <
                  </tr>
                </tfoot>
                <tbody>
             
                  @foreach ($followers as $key => $value) 
                  <tr>
              
                  
             

                
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>

                       <a href="{{url('deleteFollower/'.$value->id.'')}}" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="5" id="delete-5" onclick="return confirm('Êtes-vous sur?')">
                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                            </a>
                    


                    </td>
                @endforeach
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
