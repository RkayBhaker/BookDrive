@extends('layouts.templateBD')

@section('mainContent')
      @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
      @endif
      @if(Auth::user()->userType === 1)
        <div class="alert alert-success" role="alert">
            You are logged in as a Admin. &nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="p-1 rounded bg-success text-white" href="{{ route('admin.panel') }}">CLICK HERE</a> to redirect to ADMIN PANEL
        </div>
      @endif
    <div class="row border p-3">
        <div class="col-md-4 text-center">
            <!-- <img id="user_profile_image" src="{{ Auth::user()->image_path }}" class="img-thumbnail rounded" height="250" width="250" alt="demo"> -->
            @if(Auth::user()->image_path)
              <img id="user_profile_image" src="{{ Auth::user()->image_path }}" class="rounded img-fluid" style="height: 200px;" alt="demo">
            @else
              <img id="user_profile_image" src="USER.png" class="rounded img-fluid" style="height: 200px;" alt="demo">
            @endif
                <br>
            {{ Auth::user()->name }}
        </div>
        <div class="col-md-4 border-left">
            <div class="py-2">
                <div class="nameHead h5 text-secondary">
                    Full Name
                </div>
                <div class="name">
                    &nbsp; {{ Auth::user()->name }} {{ Auth::user()->lname }}
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
             
                <div>
                  <a id="password_reset_btn" href="/password/reset">Reset password</a>
                </div>
            </div>
            <hr>
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
        <form method="POST" action="{{ route('updateUser.details') }}" enctype="multipart/form-data">

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
            <input type="text" name="lname" value="{{ Auth::user()->lname }}" class="form-control" id="last-name" placeholder="Last Name">

            @error('lname')
              <div class="alert alert-warning" role="alert">
                {{$message}}
              </div>
            @enderror

          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your Profile</label>
            <input type="file" class="form-control" name="image_name" id="userImage">

            @error('image_name')
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
          <div class="form-group" style="display:none">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="password" name="passwd" value="{{ Auth::user()->password }}" class="form-control" id="password" placeholder="Password">
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