@extends('layouts.demo1')
@section('content')
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    * {
    box-sizing:;
  }
  
  .container {
    padding: 64px;
  }
  
  .row:after {
    content: "";
    display: table;
    clear: both
  }
  
  .column-66 {
    float: left;
    width: 66.66666%;
    
  }
  
  .column-33 {
    float: left;
    width: 33.33333%;
    padding: 20px;
  }
  
  .large-font {
    font-size: 48px;
  }
  
  .xlarge-font {
    font-size: 64px
  }
  
  .button {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    background-color: #04AA6D;
  }
  
  img {
    display: block;
    height: auto;
    max-width: 100%;
  }
  
  @media screen and (max-width: 1000px) {
    .column-66,
    .column-33 {
      width: 100%;
      text-align: center;
    }
    img {
      margin: auto;
    }
  }

  * {
  box-sizing: border-box;
}

  </style>
  </head>
<body>

<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

   
    <div class="carousel-inner">
      <div class="item active">
        <img src="img1.jpg" class="img-fluid" style="width:100%;" >
      </div>

      <div class="item">
        <img src="img2.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img3.jpg" style="width:100%;">
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="large-font"><b>Why To Donate?</b></h1>
      <h1 class="medium-font" style="color:MediumSeaGreen;"><b>Donate Book, Donate Smile!</b></h1>
      <p><span style="font-size:20px">By donating books your old used books you give other unpriviledged student a better opportunity at life and success. Be the cause of literacy & make the difference the world needs.</span></p>
      <button class="button">Donate Now!</button>
    </div>
    <div class="column-33">
        <img src="img3.jpg" width="335" height="471">
    </div>
  </div>
</div>

<div class="container" style="background-color:#f1f1f1">
    <div class="column-66">
      <h1 class="large-font"><b>What to do?</b></h1>
      <div class="container">
  <div class="row">
    <div class="col">
    <h1 class="large-font" style="color:red;"><b>Steps To Donate</b></h1>
    <span style="font-size:20px"><ol class="list-group list-group-numbered">
  <li>Fill Up The Donation Form!</li>
  <li>Pack The Books!</li>
  <li>Handover To Our Shipper At Your Door-Steps!</li>
</ol></span>
    </div>
    <div class="col">
    <h1 class="large-font" style="color:blue;"><b>Steps To Issue</b></h1>
    <span style="font-size:20px"><ol class="list-group list-group-numbered">
  <li>Search Your Desired Books!</li>
  <li>Apply To Issue!</li>
  <li>Get The Books Delivered At Your Door-Steps!</li>
</ol></span> 
    </div>
  </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="large-font"><b>About Us</b></h1>
      <h1 class="medium-font" style="color:MediumSeaGreen;"><b>Our Mission Is To Bridge The Gap Between Unprivileged Students And Education</b></h1>
      <p><span style="font-size:20px text-align:justify;">Project created by Students of IBM Adance Diploma Course. 
      The objective of this project is to create a portal which allows users to donate their old books for the 
      unprivileged student and those books could be issued to those students in need, free of cost. </span></p>
      <button class="button">More About Us!</button>
    </div>
    <div class="column-33">
        <img src="img1.jpg" width="335" height="471" >
    </div>
  </div>
</div>
@endsection
  
</body>
</html>


