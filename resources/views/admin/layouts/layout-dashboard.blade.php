<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registerd User Detials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <style>
    ul {
        padding: 0;
        margin: 0;
    }

    ul>li {
        padding: 0;
        margin: 0;
        list-style-type: none;
    }

    a {
        text-decoration: none;
    }

    .container ul {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 5px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-light bg-secondary bg-opacity-25">
        <div class="container">
            <a class="navbar-brand" href="/"><span class="h2 text-primary">BookDrive</span></a>
            <a class="btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>

    <!-- user profile -->
    <div class="row container mx-auto shadow p-3 mb-5 mt-3 bg-body rounded">
        <div class="col-md-4 text-center ">
        @if(Auth::user()->image_path)
          <img id="user_profile_image" src="{{ Auth::user()->image_path }}" class="rounded img-fluid" style="height: 200px;" alt="demo">
        @else
          <img id="user_profile_image" src="USER.png" class="rounded img-fluid" style="height: 200px;" alt="demo">
        @endif
                <br>
            {{ Auth::user()->name }}
        </div>
        <div class="col-md-4 ">
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
        <div class="col-md-4 ">
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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Update Profle</button>
            </div>
        </div>
    </div>
    <!-- end user profile -->

    <div class="container mt-5 bg-primary bg-opacity-10 p-5 rounded">
        <h6 class="text-muted">Go through the below options...</h6>
        <ul>
            <li class="py-1">
                <a class="btn btn-outline-primary w-100 mx-1 p-3" href="{{ route('users.detials') }}">REGISTERED USERS
                    DETAILS</a>
            </li>
            <li class="py-1">
                <a class="btn btn-outline-primary w-100 mx-1 p-3" href="{{ route('orders.detials') }}">ALL ORDERS</a>
            </li>
            <li class="py-1">
                <a class="btn btn-outline-primary w-100 mx-1 p-3" href="{{ route('available.book.detials') }}">UPDATE
                    DONATED BOOKS DETAILS</a>
            </li>
            <li class="py-1">
                <a class="btn btn-outline-primary w-100 mx-1 p-3" href="{{ route('get.banner.images') }}">UPDATE
                    BANNER</a>
            </li>
        </ul>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UPDATE ADMIN DETAILS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

</body>

</html>