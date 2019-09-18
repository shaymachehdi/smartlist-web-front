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
              @foreach ($groups as $key => $value) 
                  <tr>
              
                  
             

                
                    <td>{{$value->title}}</td>
                    <td>System Architect</td>
                    <td>


                       
                          <a href="{{url('followers/'.$value->title.'/2')}}"   title="followers" class="btn btn-sm btn-warning pull-right ">
                          <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">add follower</span>
                         </a>
                          <a href="{{url('followers/'.$value->title)}}"   class="btn btn-sm btn-success pull-right ">
                          <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">followers</span>
                         </a>

                          <a href="#" data-toggle="modal" data-target="#{{$value->title}}" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                          <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                         </a>


                          <a href="{{url('deleteGroup/'.$value->title.'')}}" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="5" id="delete-5" onclick="return confirm('Êtes-vous sur?')">
                            <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                            </a>


                    </td>
                     @include('group.update')
                @endforeach
                     
                  </tr>
                 
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
