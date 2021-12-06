<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Books Drive</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Books Drive</h3>
                <strong>BD</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user"></i>
                        Manage Profie
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="#">Your Profile</a></li>
                        <li><a href="#">Your Donation</a></li>
                        <li><a href="#">Your Order</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#getBooksMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-book-open"></i>
                        Get Books
                    </a>
                    <ul class="collapse list-unstyled" id="getBooksMenu">
                        <li><a href="#">NCERT</a></li>
                        <li><a href="#">CBSE</a></li>
                        <li><a href="#">ICSE</a></li>
                        <li><a href="#">Academics</a></li>
                        <li><a href="#">Others</a></li>
                    </ul>
                    <a href="#donateBooksMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-book"></i>
                        Donate Books
                    </a>
                    <ul class="collapse list-unstyled" id="donateBooksMenu">
                        <li><a href="#">Book 1</a></li>
                        <li><a href="#">Book 2</a></li>
                        <li><a href="#">Book 3</a></li>
                        <li><a href="#">Book 4</a></li>
                        <li><a href="#">Book 5</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#EventsWith" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-image"></i>
                        Events
                    </a>
                    <ul class="collapse list-unstyled" id="EventsWith">
                        <li><a href="#">All Events</a></li>
                        <li><a href="#">School Events</a></li>
                        <li><a href="#">College Events</a></li>
                        <li><a href="#">University Events</a></li>
                        <li><a href="#">Others Events</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#SocialMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-paper-plane"></i>
                        Our Pride
                    </a>
                    <ul class="collapse list-unstyled" id="SocialMenu">
                        <li><a href="#"><i class="fas fa-envelope"></i>  E-mail</a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i>  Facebook</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i>  Instagram</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i>  Twitter</a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i>  LinkedIn</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-coins"></i>
                        Donate Us
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content-fluid">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Books Drive</span>
                    </button>
                    <a href="#" class="nav-link"><i class="fas fa-calendar-alt" ></i></a>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <!----Search Bar Start Here---->
                    <!-- <div class="container">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-6">
                                <div class="form"> <i class="fa fa-search"></i> 
                                    <input type="text" class="form-control form-input" placeholder="Search anything...">
                                     <span class="left-pan"><i class="fa fa-microphone"></i></span> </div>
                            </div>
                        </div>
                    </div> -->
                    <!-------SearchBar End Here------->

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>


            <!-- <div class="container-fluid">@yield('content')</div> -->

            <!-- Footer Start Here -->
            <footer class="text-center text-lg-start bg-light text-muted">
 
 <section
   class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
 >

   <div class="me-5 d-none d-lg-block">
     <span>Get connected with us on social networks:</span>
   </div>
 
   <div>
     <a href="" class="me-4 text-reset">
       <i class="fab fa-facebook-f"></i>
     </a>
     <a href="" class="me-4 text-reset">
       <i class="fab fa-twitter"></i>
     </a>
     <a href="" class="me-4 text-reset">
       <i class="fab fa-google"></i>
     </a>
     <a href="" class="me-4 text-reset">
       <i class="fab fa-instagram"></i>
     </a>
     <a href="" class="me-4 text-reset">
       <i class="fab fa-linkedin"></i>
     </a>
     <a href="" class="me-4 text-reset">
       <i class="fab fa-github"></i>
     </a>
   </div>

 </section>

 <section class="">
   <div class="container text-center text-md-start mt-5">

     <div class="row mt-3">
     
       <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
   
         <h6 class="text-uppercase fw-bold mb-4">
           <i class="fas fa-gem me-3"></i>BookDrive
         </h6>
         <p>
           content.content.content.content.content.content.content.
           content.content.content.content.content.content.content.
           content.content.content.content.content.content.content.
         </p>
       </div>
     
       <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
   
         <h6 class="text-uppercase fw-bold mb-4">
           Useful links
         </h6>
         <p>
           <a href="#!" class="text-reset">Privacy Policy</a>
         </p>
         <p>
           <a href="#!" class="text-reset">Terms & Condition</a>
         </p>
         <p>
           <a href="#!" class="text-reset">Return Policy</a>
         </p>
         <p>
           <a href="#!" class="text-reset">Help</a>
         </p>
       </div>
   
       <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        
         <h6 class="text-uppercase fw-bold mb-4">
           Contact
         </h6>
         <p><i class="fas fa-home me-3"></i> NSTI Mumbai, Sion, Maharashtra</p>
         <p>
           <i class="fas fa-envelope me-3"></i>
           bookdrive@gmail.com
         </p>
         <p><i class="fas fa-phone me-3"></i> + 022-2267538</p>
         <p><i class="fas fa-print me-3"></i> + 91-983674678</p>
       </div>
   
     </div>
  
   </div>
 </section>

 <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
   © 2021 Copyright:
   <a class="text-reset fw-bold" href="">Group 44</a>
 </div>

</footer>
            <!-- Footer End Here -->
            

   
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   
   <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>