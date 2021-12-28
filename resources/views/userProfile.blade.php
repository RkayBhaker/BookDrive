@extends('layouts.templateBD')

<!-- @if(session('success'))
    {{session('success')}}
@endif -->

<!--
<form action="{{ route('user.image') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="number" name="user_id" id="userId">
    <input type="file" name="image_name" id="userImage">

    @error('image_name')
        {{$message}}
    @enderror
<br>
    <input type="submit" value="Upload">
</form> -->

@section('mainContent')
      @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
      @endif
    <div class="row border p-3">
        <div class="col-md-4 text-center">
            <img src="userProfileDummyPic.png" class="img-thumbnail rounded-circle" height="200" width="200" alt="demo">
                <br>
            {{ Auth::user()->name }}
        </div>
        <div class="col-md-4 border-left">
            <div class="py-2">
                <div class="nameHead h5 text-secondary">
                    Full Name
                </div>
                <div class="name">
                    &nbsp; {{ Auth::user()->name }}
                </div>
            </div>
            <div class="py-2">
                <div class="emailHead h5 text-secondary">
                    Email Address
                </div>
                <div class="email">
                    &nbsp; {{ Auth::user()->email }}
                </div>
            </div>
            <div class="py-2">
                <div class="phoneHead h5 text-secondary">
                    Phone Number
                </div>
                <div class="phone">
                    @if(Auth::user()->phno === null)
                    &nbsp; {{ '----' }}
                            @else
                    &nbsp;     {{ Auth::user()->phno }}
                            @endif
                </div>
            </div>            
        </div>
        <div class="col-md-4 border-left">
            <div class="py-2">
                <div class="passwdHead h5 text-secondary">
                    Password
                </div>
                <div class="password">
                    &nbsp; ********
                </div>
            </div>
            <div class="py-2">
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Update Profle</button>
            </div>
        </div>
    </div>

    <hr>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Your Profile</h5>
        <button type="button" class="close bg-danger text-white fs-1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="POST" action="{{ route('updateUser.details') }}">

          @csrf

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name</label>
            <input type="text" name="fname" value="{{ Auth::user()->name }}" class="form-control" id="first-name" placeholder="First Name">

            @error('fname')
              <div class="alert alert-warning" role="alert">
                {{$message}}
              </div>
            @enderror

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Last Name</label>
            <input type="text" name="lname" class="form-control" id="last-name" placeholder="Last Name">

            @error('lname')
              <div class="alert alert-warning" role="alert">
                {{$message}}
              </div>
            @enderror

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone Number</label>
            <input type="text" name="phno" value="{{ Auth::user()->phno }}" class="form-control" id="phone-number" placeholder="+91">

            @error('phno')
              <div class="alert alert-warning" role="alert">
                {{$message}}
              </div>
            @enderror

          </div>
          <div class="form-group" style="display:none">
            <label for="recipient-name" class="col-form-label">Email Address</label>
            <input type="email" name="email" class="form-control" id="Email-address" value="{{ Auth::user()->email }}">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="password" name="passwd" class="form-control" id="password" placeholder="Password">

            @error('passwd')
              <div class="alert alert-warning" role="alert">
                {{$message}}
              </div>
            @enderror

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection