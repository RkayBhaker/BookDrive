
@extends('layouts.templateBD')

@section('mainContent')
<html>

<head>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<style>
  /* Main Content Style */


/* :root {
    --gradient: linear-gradient(to left top, #007BFF 100%, #FF512F 90%) !important;
  }
  
  .card {
    background: #222;
    border: 1px solid #aaa;
    color: #222;
    margin-bottom: 2rem;
  }
  
  #Cardbtn {
    border: 5px solid;
    border-image-slice: 1;
    background: var(--gradient) !important;
    background-clip: text !important;
    border-image-source:  var(--gradient) !important; 
    text-decoration: none;
    transition: all .4s ease;
  }
  
  #Cardbtn:hover, .Cardbtn:focus {
        background: var(--gradient) !important;
    background-clip: none !important;
    -webkit-text-fill-color: #fff !important;
    border: 5px solid #fff !important; 
    box-shadow: #222 1px 0 10px;
    text-decoration: underline;
  }
  .text{
    color: black;
  }
  h1{
    color: #7386D5;
  } */

  /* new card body style */
  .card_container{
    background : rgba(0,0,0,0.1);
    display: grid;
    padding: 15px;
    grid-template-columns : repeat(auto-fill, minmax(260px, 1fr));
    grid-template-rows : 1fr;
    grid-gap: 12px;
  }

</style>
</head>
<body>

  <h1 class="text-center blue 30% ">NCERT BOOKS</h1>

  <div class="card_container">
    
    <!-- Standard I Hindi -->
    <div class="card border" style="width: 16rem;">
      <img class="card-img-top" src="./images.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"> {{$data->title}} </h5>
        <p class="card-text"> {{$data->desc}} </p>
      </div>
      <div class="row container mx-auto py-2">
          <div class="col-md-6 card-text text-primary">Hindi</div>
          @if($I_left_no_books_hi >= 1)
            <div class="col-md-6 card-text text-success">Only {{ $I_left_no_books_hi }} left</div>
          @else
            <div class="col-md-6 card-text text-danger">Only {{ $I_left_no_books_hi }} left</div>
          @endif
        </div>
      <div class="card-footer bg-white">
        <small class="">
        @if($I_left_no_books_hi >= 1)
          <a href="IssueBookform" class="btn btn-outline-primary"> Issue Book</a>
        @else
          <a href="IssueBookform" class="btn btn-outline-primary" style="pointer-events: none;"> Issue Book</a>
        @endif
        </small>
      </div>
    </div>

    <!-- Standard I English -->
    <div class="card border" style="width: 16rem;">
      <img class="card-img-top" src="./images.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"> {{$data1->title}} </h5>
        <p class="card-text"> {{$data1->desc}} </p>
      </div>
      <div class="row container mx-auto py-2">
          <div class="col-md-6 card-text text-primary">English</div>
          @if($I_left_no_books_en >= 1)
            <div class="col-md-6 card-text text-success">Only {{ $I_left_no_books_en }} left</div>
          @else
            <div class="col-md-6 card-text text-danger">Only {{ $I_left_no_books_en }} left</div>
          @endif
        </div>
      <div class="card-footer bg-white">
        <small class="">
        @if($I_left_no_books_en >= 1)
          <a href="IssueBookform" class="btn btn-outline-primary"> Issue Book</a>
        @else
          <a href="IssueBookform" class="btn btn-outline-primary" style="pointer-events: none;"> Issue Book</a>
        @endif
        </small>
      </div>
    </div>

    <!-- Standard II Hindi -->
    <div class="card border" style="width: 16rem;">
      <img class="card-img-top" src="./images.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"> {{$data2->title}} </h5>
        <p class="card-text"> {{$data2->desc}} </p>
      </div>
      <div class="row container mx-auto py-2">
          <div class="col-md-6 card-text text-primary">Hindi</div>
          @if($II_left_no_books_hi >= 1)
            <div class="col-md-6 card-text text-success">Only {{ $II_left_no_books_hi }} left</div>
          @else
            <div class="col-md-6 card-text text-danger">Only {{ $II_left_no_books_hi }} left</div>
          @endif
        </div>
      <div class="card-footer bg-white">
        <small class="">
        @if($II_left_no_books_hi >= 1)
          <a href="IssueBookform" class="btn btn-outline-primary"> Issue Book</a>
        @else
          <a href="IssueBookform" class="btn btn-outline-primary" style="pointer-events: none;"> Issue Book</a>
        @endif
        </small>
      </div>
    </div>

    <!-- Standard II English -->
    <div class="card border" style="width: 16rem;">
      <img class="card-img-top" src="./images.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"> {{$data3->title}} </h5>
        <p class="card-text"> {{$data3->desc}} </p>
      </div>
      <div class="row container mx-auto py-2">
          <div class="col-md-6 card-text text-primary">English</div>
          @if($II_left_no_books_en >= 0)
            <div class="col-md-6 card-text text-success">Only {{ $II_left_no_books_en }} left</div>
          @else
            <div class="col-md-6 card-text text-danger">Only {{ $II_left_no_books_en }} left</div>
          @endif
        </div>
      <div class="card-footer bg-white">
        <small class="">
        @if($II_left_no_books_en >= 0)
          <a href="IssueBookform" class="btn btn-outline-primary"> Issue Book</a>
        @else
          <a href="IssueBookform" class="btn btn-outline-primary" style="pointer-events: none;"> Issue Book</a>
        @endif
        </small>
      </div>
    </div>

  </div>
 </body>
 
 </html>

 @endsection