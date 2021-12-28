<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BookDrive</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        * {
            box-sizing:border-box;
        }
        html, body{
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
            color:white;

        }
        .wrapper {
            display: flex;
            align-items: stretch;
            
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #7386D5;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
        }

        #sidebar.active .sidebar-header h3,
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
            padding: 20px 10px;
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
            font-size: 1.8em;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
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

        /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */

        #content {
            width: 100%;
            min-height: 100vh;
            transition: all 0.3s;
            padding: 20px;
}
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
            #sidebar .sidebar-header h3,
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
              /* User Profile Links */
              .user-profile{
                  font-size: 16px;
                  border: none;
              }
              .user-dropdown{
                  position: relative;
                  display: inline-block;
              }
              .user-dropdown-list{
                  display: none;
                  position: absolute;
                  background-color: #f1f1f1;
                  min-width: 160px;
                  box-shadow: 0px 8px 16px 0px
                  rgba(0, 0, 0, 0.2);
                  z-index: 1;
              }
              .user-dropdown-list a{
                  padding: 12px 16px;
                  text-decoration: none;
                  display: block;
              }
              .user-dropdown-list a:hover{
                  background-color:#6d7fcc;
              }
              .user-dropdown:hover .user-dropdown-list{
                  display: block;
              }
              
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

footer {
    color: #fff;
    position: relative;
}
footer::before{
    content : '';
    width : 100%;
    height : 2px;
    background-color: #6d7fcc;
    position: absolute;
    left : 0;
    top : 0;
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
    </style>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="/"> BookDrive</a></h3>
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
                        <li><a href="IssueNCERTbook">NCERT</a></li>
                        <li><a href="IssueCBSEbook">CBSE</a></li>
                        <li><a href="IssueICSEbook">ICSE</a></li>
                        <li><a href="IssueMSBTEbook">MSBTE</a></li>
                        <li><a href="IssueOTHERSbook">Others</a></li>
                    </ul>
            </li>
                <li>    
                     <a href="donate"><i class="fas fa-book"></i>
                        Donate Books
                    </a>
                </li>
                <li>
                    <a href="events" >
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
                    <a href="#">
                        <i class="fas fa-coins"></i>
                        Donate Us
                    </a>
                </li>
            <li>
                <a href="contact">
                    <i class="fas fa-contact"></i>
                    Contact Us
                </a>
            </li>

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="fas fa-align-left"></i>
                        <span>Books Drive</span>
                    </button>
                   
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                @guest
                                    @if (Route::has('login'))
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endif
                                @else
                                <li class="nav-item active">
                                <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                            </li>
                            <div class="user-dropdown">
                            <li class="nav-item">
                                <a class="nav-link user-profile" href="#">
                                    <i class="fas fa-user"></i>
                                    {{ Auth::user()->name }}
                                </a>
                            <div class="user-dropdown-list">
                               <a href="/userProfile">Your Profile</a>  
                               <a href="#">Your Donation</a>
                               <a href="#">Your Order</a>
                               <a href="#">Settings</a>
                               <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>    
                            </li>
                            </div>
                                        <!-- <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> -->
                                        
                                @endguest
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

             <main>
                 @yield('mainContent')
             </main>
        </div>
    </div>
    
    <!-- Footer Start -->

    <!-- Footer End -->

     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 
     <script type="text/javascript">
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').toggleClass('active');
             });
         });
     </script>



<!--footer-->
<footer class="sticky-top">
        <div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
            <div class="col-12">
                <div class="row row-2">
                    <div class="col-sm-3 text-md-center">
                        <h5><span> <i class="fas fa-book-open"></i></span><b> BookDrive</b></h5>
                    </div>
                    <div class="col-sm-3 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-0"><a href="aboutus">About Us</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-0"><a href="return">Return Policy</li>
                            <li><a href="bookcondition">Book Condition<br>
                                Guidlines</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-0"><a href="privacy">Privacy Policy</a></li>
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
                        document.write('&copy;' );
                        document.write(' 2019 - ');
                        document.write(new Date().getFullYear());
                        document.write(' OJT Group44 - All Rights Reserved.');
                    </script>
                  </small></div>
                    <div class="col-md-3 col-auto "></div>
                    <div class="col-md-3 col-auto"></div>
                    <div class="col my-auto text-md-left text-right "><small>
                    <span><img src="https://i.imgur.com/N90KDYM.png" class="img-fluid " width="25"></span> 
                    <span><img src="https://i.imgur.com/TtB6MDc.png" class="img-fluid " width="25"></span>
                    <span><img src="https://www.edigitalagency.com.au/wp-content/uploads/new-instagram-logo-white-border-icon-png-large.png" class="img-fluid " width="25"></span> 
                </small> </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--footer end-->
</body>
 
 </html>