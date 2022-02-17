@extends('layouts.templateBD')

@section('mainContent')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <style>
    p.card-text {
        text-align: justify;
    }

    #homeList>li {
        position: relative;
        color: black;
    }

    #homeList>li::before {
        content: '';
        height: 10px;
        width: 10px;
        left: -20px;
        top: 8px;
        border-radius: 50%;
        background: #4e67ca;
        position: absolute;
        color: black;
    }

    #homeList>li:first-child::after,
    #homeList>li:nth-child(2)::after {
        content: '';
        height: 100%;
        width: 2px;
        left: -16px;
        top: 10px;
        background: #4e67ca;
        position: absolute;
        color: black;
    }

    .button {
        width: 180px;
    }
    </style>
</head>

<body>
    <main class="container">

    <!-- Carousel Start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $slide_id = 1; ?>
                @for($i = 0; $i<=count($all_banner); $i++)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                @endfor
            </ol>
            <div class="carousel-inner">
                @foreach($all_banner as $banner)
                    @if(file_exists($banner->image_name))
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ $banner->image_name }}" alt="{{ $banner->image_name }}">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img5.png" alt="img5.png">
                        </div>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
        <!-- Section 1 Start -->
        <div class="card my-3 border " style="width:auto;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3><span style="color:#4e67ca;">Why To Donate?</span></h3>
                        <p class="card-text text-body h6">By donating books your old used books you give other
                            unpriviledged student a better opportunity at life and success. Be the cause of literacy &
                            make the difference the world needs.</p>
                        <h6>Donate Book, Donate Smile!</h6>
                        <button id="Donate_Button" class="button">Donate Now!</button>
                        <script type="text/javascript">
                        document.getElementById("Donate_Button").onclick = function() {
                            location.href = "donate";
                        };
                        </script>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="img4.jpg" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
        <!-- Section 1 End -->

        <!-- Section 2 Start -->
        <div class="card border my-3" style="max-width: auto;">
            <div class="card-header text-success h3">
                <span style="color:#4e67ca;">What to do?</span>
            </div>
            <div class="card-body row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: auto;">
                        <div class="card-header text-primary fw-bold"><span style="color:#4e67ca;"><i
                                    class="fas fa-bookmark"></i> Steps To Donate<span></div>
                        <div class="card-body text-primary fw-normal">
                            <ul class="list1" id="homeList" type="none">
                                <li>
                                    Fill Up The Donation Form!
                                </li>
                                <li>
                                    Pack The Books!
                                </li>
                                <li>
                                    Handover To Our Shipper At Your Door-Steps!
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: auto;">
                        <div class="card-header text-primary fw-bold"><span style="color:#4e67ca;"><i
                                    class="fas fa-bookmark"></i> Steps To Issue</span></div>
                        <div class="card-body text-primary fw-normal">
                            <ul class="list2" id="homeList" type="none">
                                <li>
                                    Search Your Desired Books!
                                </li>
                                <li>
                                    Apply To Issue!
                                </li>
                                <li>
                                    Get The Books Delivered At Your Door-Steps!
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 2 End -->

        <!-- Section 3 Start -->
        <div class="card my-3 border" style="width:auto;">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="img10.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h3><span style="color:#4e67ca;">About Us</span></h3>
                        <h5>
                            Our Mission Is To Bridge The Gap Between Unprivileged Students And Education.
                        </h5>
                        <p class="card-text text-body h6 lh-base">
                            Project created by Students of IBM Adance Diploma Course. The objective of this project is
                            to create a portal which allows users to donate their old books for the unprivileged student
                            and those books could be issued to those students in need, free of cost.
                        </p>
                        <button class="button"><a href="aboutus">More About Us!</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 3 End -->

    </main>
</body>

<script>
        $(document).ready(function (){
        $('.carousel-indicators > li:first-child').addClass('active');
        $('.carousel-inner > div:first-child').addClass('active');
    });
</script>

</html>
@endsection