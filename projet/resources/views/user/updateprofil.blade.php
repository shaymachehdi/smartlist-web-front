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

<div class="row ">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header ">Register</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="{{url('/profil')}}">
                                <input type="hidden" name="_method" value="PUT">

                                  @csrf
                                    <div class="form-group">
                                        <label for="lastname" class="cols-sm-2 control-label">Lastname</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="lastname" id="lastname" 
                                                @isset($userapi)
                                                value="
                                                {{$userapi->getLastname()}}"
                                                 @endisset/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstname" class="cols-sm-2 control-label">Firstname</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your firstname" 
                                                value="@isset($userapi)
                                                {{$userapi->getFirstname()}}
                                                @endisset{{old('firstname')}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="adresse" class="cols-sm-2 control-label">Adresse</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Enter your adresse" 
                                                value="@isset($userapi)
                                                {{$userapi->getAdresse()}}
                                                @endisset{{old('adresse')}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number" class="cols-sm-2 control-label">phone_number</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Enter your phone_number"
                                                value="@isset($userapi)
                                                {{$userapi->getPhone_number()}}
                                                @endisset{{old('phone_number')}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dateofbirth" class="cols-sm-2 control-label">DateOfBirth</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" placeholder="Enter your dateofbirth"
                                                value="{{old('dateofbirth')}}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" 
                                                value="@isset($userapi)
                                                {{$userapi->getEmail()}}
                                                @endisset{{old('email')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password"  />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                           <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Log In">                                    </div>


                                    <div class="login-register">
                                        <a href="index.php">Login</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

@endsection