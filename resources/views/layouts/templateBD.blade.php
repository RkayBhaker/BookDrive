<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BookDrive</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

    * {
        box-sizing: border-box;
    }

    html,
    body {
        width: auto;
        height: auto;
        margin: 0%;
        padding: 0%;
        overflow-x: hidden;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
    }

    .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
    }

    i,
    span {
        display: inline-block;
    }

    /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */

    .btn {
        background: #4e67ca;
        color: white;

    }

    .wrapper {
        display: flex;
        align-items: stretch;
    }

    #sidebar12,
    #sidebar {
        min-width: 200px;
        max-width: 200px;
        background: #7386D5;
        color: #fff;
        transition: all 0.2s;
    }

    #sidebar12.active,
    #sidebar.active {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
    }

    #sidebar.active::before {
        content: '';
        width: 1px;
        right: 0;
        z-index: 1;
        top: 0;
        height: 100%;
        background: blue;
        position: absolute;
    }

    #sidebar.active .sidebar-header h2,
    #sidebar.active .CTAs {
        display: none;
    }

    #sidebar.active .sidebar-header strong {
        display: block;
    }

    #sidebar ul li a {
        text-align: left;
    }

    #sidebar.active ul li a {
        padding: 18px 10px;
        text-align: center;
        font-size: 0.85em;
    }

    #sidebar.active ul li a i {
        margin-right: 0;
        display: block;
        font-size: 1.8em;
        margin-bottom: 5px;
    }

    #sidebar.active ul ul a {
        padding: 10px !important;
    }

    #sidebar.active .dropdown-toggle::after {
        top: auto;
        bottom: 10px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #6d7fcc;
    }

    #sidebar .sidebar-header strong {
        display: none;
        font-size: 2em;
    }

    #sidebar ul.components {
        padding: 20px 0;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a:hover {
        color: #7386D5;
        background: #fff;
    }

    #sidebar ul li a i {
        margin-right: 10px;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #6d7fcc;
    }

    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #6d7fcc;
    }

    ul.CTAs {
        padding: 20px;
    }

    ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    a.download {
        background: #fff;
        color: #7386D5;
    }

    a.article,
    a.article:hover {
        background: #6d7fcc !important;
        color: #fff !important;
    }

    @media only screen and (max-width: 990px) {
        #navbarSupportedContent ul {
            display: block;
        }

        #navbarSupportedContent ul>li {
            display: inline-block !important;
            position: relative;
        }
    }

    /* small device classes & ids*/
    @media only screen and (min-width: 428px) {

        #open-Sidebar,
        #close-Sidebar {
            display: none;
        }
    }


    /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */

    #content {
        width: 100%;
        min-height: 100vh;
        transition: all 0.3s;
        /* padding: 0 15px; */
    }


    /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */

    @media (max-width: 768px) {
        #sidebar {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
            margin-left: -80px !important;
        }

        .dropdown-toggle::after {
            top: auto;
            bottom: 10px;
            right: 50%;
            -webkit-transform: translateX(50%);
            -ms-transform: translateX(50%);
            transform: translateX(50%);
        }

        #sidebar.active {
            margin-left: 0 !important;
        }

        #sidebar .sidebar-header h2,
        #sidebar .CTAs {
            display: none;
        }

        #sidebar .sidebar-header strong {
            display: block;
        }

        #sidebar ul li a {
            padding: 20px 10px;
        }

        #sidebar ul li a span {
            font-size: 0.85em;
        }

        #sidebar ul li a i {
            margin-right: 0;
            display: block;
        }

        #sidebar ul ul a {
            padding: 10px !important;
        }

        #sidebar ul li a i {
            font-size: 1.3em;
        }

        #sidebar {
            margin-left: 0;
        }

        #sidebarCollapse span {
            display: none;
        }
    }

    @media only screen and (max-width: 428px) {
        #sidebar12 {
            display: none;
        }

        .wrapper {
            display: block;
            align-items: unset;
        }

        #sidebar,
        .sidebarCollapseBtn {
            display: none;
        }

        #sidebar2 {
            text-align: center;
        }

        #close-outer-sidebar {
            position: absolute;
            right: 3px;
            top: 3px;
        }

        #close-Sidebar {
            background: transparent;
            color: white;
            font-size: 10px;
            border: 1px ridge #fff;
            border-radius: 50%;
            padding: 5px 10px !important;
            margin: 5px 5px;
        }

        /* #navbarSupportedContent ul > li{
                float: left !important;
                display: block !important;
                padding: 0 !important;
                margin: 0 !important;
                border: 1px ridge red !important;
            } */
    }

    /* User Profile Links */
    .user-profile {
        font-size: 16px;
        border: none;
    }

    .cart-dropdown,
    .user-dropdown {
        position: relative;
        display: inline-block;
    }

    .cart-dropdown-list {
        display: none;
        position: absolute;
        left: -163px;
        background-color: #f1f1f1;
        min-width: 263px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .user-dropdown-list {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .cart-dropdown-list a,
    .user-dropdown-list a {
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .cart-dropdown-list a:hover,
    .user-dropdown-list a:hover {
        background-color: #6d7fcc;
        color: #fff;
    }

    .cart-dropdown:hover .cart-dropdown-list,
    .user-dropdown:hover .user-dropdown-list {
        display: block;
    }

    #cart-button {
        padding: 10px 3px !important;
        height: default;
        width: 40%;
        background: #4e67ca;
        color: white;
    }

    #cart-button:hover {
        background-color: #4e67ca;
    }

    @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');




    .card {
        background-color: #F8F9FB !important
    }

    p {
        font-size: calc(12px + (14 - 12) * ((100vw - 360px) / (1600 - 360))) !important;
        display: fkex
    }

    h3 {
        font-size: calc(24px + (30 - 24) * ((100vw - 360px) / (1600 - 360))) !important
    }

    .social {
        font-size: 21px !important
    }

    .color-text {
        color: #757575 !important
    }

    button {
        font-size: calc(12px + (13 - 12) * ((100vw - 360px) / (1600 - 320))) !important;
        padding-left: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important;
        padding-right: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important;
        padding-top: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important;
        padding-bottom: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

    button:hover {
        background-color: #4e67ca;
    }

    footer {
        color: #fff;
        /* z-index: -1; */
        position: relative;
    }

    footer::before {
        content: '';
        width: 100%;
        height: 2px;
        background-color: #6d7fcc;
        position: absolute;
        left: 0;
        top: 0;
    }

    footer ul>li {
        position: relative;
        /* border : 2px ridge red; */
        overflow: hidden;
    }

    footer ul>li::after {
        content: '';
        width: 70%;
        height: 1px;
        background: #fff;
        position: absolute;
        left: -70%;
        bottom: 0;
        transition: all .3s;
    }

    footer ul>li:hover::after {
        left: 0;
        bottom: 0;
    }

    .Careers {
        cursor: pointer;
        color: #1E88E5
    }

    .row-1 {
        background-color: #7386D5;
    }

    .row-2 {

        background-color: #4e67ca;
    }

    .button {
        background-color: #4e67ca;
        border: #4e67ca;
        border-radius: 8px;
        color: white;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 150px;
        cursor: pointer;
    }

    .button:hover {
        background-color: #7386D5;
        border: #4e67ca;
    }

    #password_reset_btn {
        color: red;
        font-size: 12px;
        border: .5px ridge red;
        padding: 5px 10px;
        border-radius: 5px;
    }

    #password_reset_btn:hover {
        color: green;
        background-color: rgba(0, 0, 0, 0.04);
        border: .5px ridge rgba(0, 0, 0, 0.3);
    }

    #user_profile_image {
        transform: scale(.9);
        transition: all .5s;
    }

    #user_profile_image:hover {
        transform: scale(1);
    }

    .tempsidebar {
        position: fixed !important;
        height: 100vh !important;
    }

    .right-top-menubar {
        /* background: rgb(9,9,121);
    background: linear-gradient(83deg, rgba(9,9,121,1) 0%, rgba(209,219,219,1) 0%); */

        box-shadow: 2px 6px 7px 1px rgba(0, 0, 0, .4);
    }

    #btn {
        padding: 0;
        margin: 0;
        background: none;
    }

    .cart-head-btn:after {
        content: '';
        width: 100%;
        height: 1px;
        background: rgba(0, 0, 0, 0.14);
        position: absolute;
        left: 0;
        bottom: 0;
    }

    #getBooksMenu>li {
        position: relative;
    }

    #book-status {
        position: absolute;
        right: 0;
        top: 0;
        font-size: 10px;
    }

    </style>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="tempsidebar">
            <div class="d-flex flex-row-reverse" id="close-outer-sidebar" style="background: #6d7fcc;"><button
                    id="close-Sidebar">X</button></div>
            <div class="sidebar-header" id="sidebar2" onclick="closeMenu()">
                <h2><a href="/"> BookDrive</a></h2>
                <strong><a href="/"> BD</a></strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                </li>
                <li>
                    <a href="#getBooksMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-book-open"></i>
                        Get Books
                    </a>
                    <ul class="collapse list-unstyled" id="getBooksMenu">
                        <li>
                            <a href="{{ route('ncert.book') }}">NCERT</a>
                            <span class="text-warning p-2" id="book-status">New</span>
                        </li>
                        <li>
                            <a href="{{ route('cbse.book') }}">CBSE</a>
                            <span class="text-warning p-2" id="book-status">New</span>
                        </li>
                        <li>
                            <a href="#soon-available">ICSE</a>
                            <!-- <span class="text-warning p-2" id="book-status" >New</span> -->
                        </li>
                        <li>
                            <a href="#soon-available">MSBTE</a>
                            <!-- <span class="text-warning p-2" id="book-status" >New</span> -->
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('donar.details') }}"><i class="fas fa-book"></i>
                        Donate Books
                        <!-- <span style="color:red; font-size: 12px;">(Available soon)</span> -->
                    </a>
                </li>
                <li>
                    <a href="events">
                        <i class="fas fa-image"></i>
                        Events
                    </a>
                </li>
                <li>
                    <a href="pride">
                        <i class="fas fa-paper-plane"></i>
                        Our Pride
                    </a>
                </li>
                <li>
                    <a href="/contact">
                        <i class="fas fa-envelope"></i>
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="/aboutus">
                        <i class="fas fa-users"></i>
                        About Us
                    </a>
                </li>

            </ul>
        </nav>
        <nav id="sidebar12" class=""></nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg right-top-menubar mt-1">
                <div class="container-fluid">
                    <!-- sidebar Collapse Button -->
                    <button type="button" id="sidebarCollapse" class="btn sidebarCollapseBtn">
                        <i class="fas fa-align-left"></i>
                        <span style="font-weight:bold;">Books Drive</span>
                    </button>

                    <!-- mobile device menu toggle button -->
                    <button type="button" id="open-Sidebar" class="btn">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button> -->

                    <div class="" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item border px-4 rounded mx-1">
                                <a class="nav-link" style="font-weight: bold; color:#4e67ca;"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            @else

                            <!-- <div class="user-dropdown"> -->
                            <li class="nav-item mx-3">
                                <div class="user-dropdown border border-top-0 border-left-0 border-right-0">
                                    <a class="nav-link user-profile" style="color:#4e67ca;" href="#">
                                        <i class="fas fa-user"></i>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="user-dropdown-list p-3">
                                        <a href="/userProfile">Your Profile</a>
                                        <a href="{{ route('order.list') }}">Your Order</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>

                            @endguest

                            <li class="nav-item  cart-dropdown">
                                <!-- <div class="dropdown"> -->
                                <a href="{{ route('cart') }}" class="btn text-primary px-3 py-2 cart-head-btn" id="btn"
                                    data-toggle="dropdown">
                                    <i style="font-size: 14px !important; color:#4e67ca !important;"
                                        class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <b
                                        class="rounded-circle bg-#4e67ca text-white"
                                        style="padding: 0 5px !important; background-color:#4e67ca;">{{ count((array) session('cart')) }}</b>
                                </a>
                                <!-- <div class="dropdown-menu"> -->
                                <div class="cart-dropdown-list p-3">
                                    <div class="row total-header-section text-center">
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <span class="px-2">Total Items : </span><span
                                                class="px-2">{{ count((array) session('cart')) }}</span>
                                        </div>
                                    </div>
                                    <hr>
                                    @if(session('cart'))
                                    <?php $cartId = 0; ?>
                                    @foreach(session('cart') as $id => $details)
                                    <div class="row p-2">
                                        <div class="col-lg-2 col-sm-2 col-2 border p-2">
                                            {{ ++$cartId }}.
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-6 border p-2">
                                            {{ $details['title'] }}
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-4 border p-2">
                                            @if($details['language'] === 'Hi')
                                            Hindi
                                            @else
                                            English
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                    <a href="{{ route('cart') }}" id="cart-button" class="btn btn-primary btn-sm">View
                                        all</a>
                                    @else
                                    <h6 class="p-3 alert alert-light" role="alert">Cart is empty!</h6>
                                    <p class="p-1 text-primary" style="font-size: 12px !important;"><strong
                                            class="text-primary">Info! </strong><a class="font-weight-bold"
                                            style="all:unset; cursor:pointer;" href="{{ route('cart') }}">Click here</a>
                                        to open cart</p>
                                    @endif

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main>
                @yield('mainContent')
            </main>
            @yield('scripts')

            <!-- Footer Start -->
            <footer class="container-fluid">
                <div class="row justify-content-center mb-0 pt-5 row-2 px-3 border">
                    <div class="col-12">
                        <div class="row row-2">
                            <div class="col-sm-3 text-md-center">
                                <h5><span> <i class="fas fa-book-open"></i></span><b> BookDrive</b></h5>
                            </div>
                            <div class="col-sm-3 my-sm-0 mt-5">
                                <ul class="list-unstyled">
                                    <li class="py-2 mt-0"><a href="aboutus">About Us</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3 my-sm-0 mt-5">
                                <ul class="list-unstyled">
                                    <li class="py-2 mt-0"><a href="return">Return Policy</li>
                                    <li><a href="bookcondition">Book Condition Guidlines</li>
                                </ul>
                            </div>
                            <div class="col-sm-3 my-sm-0 mt-5">
                                <ul class="list-unstyled">
                                    <li class="py-2 mt-0"><a href="privacy">Privacy Policy</a></li>
                                    <li><a href="terms_conds">Terms & Condition </a></li><br>
                                </ul>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2">
                    <div class="col-12">
                        <div class="row my-4 row-1 no-gutters">
                            <div class="col-sm-3 col-auto text-center"><small>
                                    <script>
                                    document.write('&copy;');
                                    document.write(' 2019 - ');
                                    document.write(new Date().getFullYear());
                                    document.write(' OJT Group44 - All Rights Reserved.');
                                    </script>
                                </small></div>
                            <div class="col-md-3 col-auto "></div>
                            <div class="col-md-3 col-auto"></div>
                            <div class="col my-auto text-md-left text-right "><small>
                                    <span><img src="https://i.imgur.com/N90KDYM.png" class="img-fluid "
                                            width="25"></span>
                                    <span><img src="https://i.imgur.com/TtB6MDc.png" class="img-fluid "
                                            width="25"></span>
                                    <span><img
                                            src="https://www.edigitalagency.com.au/wp-content/uploads/new-instagram-logo-white-border-icon-png-large.png"
                                            class="img-fluid " width="25"></span>
                                </small> </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $('#sidebar12').toggleClass('active');
        });
        $('#close-Sidebar').on('click', function() {
            $('#sidebar').css("display", "none");
        });
        $('#open-Sidebar').on('click', function() {
            $('#sidebar').add('span').css({
                "display": "block",
                "position": "absolute !important",
                "min-width": "100%",
                "max-height": "100%",
                "top": "0",
                "left": "80px",
                "z-index": "1"
            });
        });
    });
    </script>
</body>

</html>