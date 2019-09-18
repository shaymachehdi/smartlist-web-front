<div class="modal fade" id="groupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">new  group ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
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
                <form action="{{url('/addGroup')}}" method="post">
                     @csrf
                     <input type="text" id="title" class="" name="title" placeholder="Title" value="{{old('title')}}">
                    



        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Submit">
                </form>
        </div>
      </div>
    </div>
  </div>