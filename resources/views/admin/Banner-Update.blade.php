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
        a{
            text-decoration: none;
        }
        p{
            position: relative;
        }
        p::after{
            content: '';
            width: 100%;
            height: 0.5px;
            background-color: rgba(255,50,100, 0.2);
            position: absolute;
            left : 0;
            bottom: 0;
        }
    </style>
</head>
<body>

<div class="container-fluid bg-secondary bg-opacity-25 p-3 sticky-top" id="sticky-top">
    <p>
         > <a href="{{ route('admin.panel') }}">ADMIN PANEL</a> / UPDATE BANNER
    </p>
</div>

    <div class="container">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Info!</strong> {{ session('success') }}
        </div>
        @endif
    </div>

    <form action="{{ route('Banner.Update') }}" class="border shadow p-3 mb-5 bg-body rounded container my-3" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="md-3 h3 text-center text-primary">UPLOAD IMAGE</div>
        <hr>
        <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label form-text fw-bold">ADD IMAGE:</label>
            <input type="file" id="exampleInputEmail2" class="form-control" name="image_name" required>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary px-5" name="add_image">Submit</button>
        </div>
    </form>

    <div class="container my-3">

    <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </svg>
  </strong> Total number of banners avaiable : {{count($all_banner)}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <!-- show banner  -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php $slide_id = 1; ?>
                @for($i = 0; $i<=count($all_banner); $i++)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}"
                        aria-label="Slide {{ $slide_id++ }}"></button>
                @endfor
        </div>
        <div class="carousel-inner">
        @foreach($all_banner as $banner)
            <div class="carousel-item">
                <img src="{{ $banner->image_name }}" class="d-block w-100 img-fluid" alt="{{ $banner->image_name }}">
            </div>
        @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

</body>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

<script>
    $(document).ready(function (){
        $('.carousel-indicators > button:first-child').addClass('active');
        $('.carousel-inner > div:first-child').addClass('active');
    });

</script>

</html>