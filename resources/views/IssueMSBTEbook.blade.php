@extends('layouts.templateBD')

@section('mainContent')
<html>

<head>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<style>
  /* Main Content Style */


:root {
    --gradient: linear-gradient(to left top, #007BFF 100%, #FF512F 90%) !important;
  }

  .card {
    /* background: #222; */
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
  }
</style>
</head>

<body>

    <h1 class="text-center blue 30% ">MSBTE BOOKS</h1>

        <!-- Main Content Start -->
<div class="container mx-auto mt-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="IssueBookform" class="btn mr-2" id="Cardbtn">  Issue Books</a>
      
    </div>
    </div>
      </div>    
         <div class="col-md-4">
  <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="IssueBookform" class="btn  mr-2" id="Cardbtn"> Issue Books</a>
     
    </div>
    </div>
      </div>    
            <div class="col-md-4">
  <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="IssueBookform" class="btn mr-2" id="Cardbtn">  Issue Books</a>
     
    </div>
    </div>
    </div>
      
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="IssueBookform" class="btn mr-2" id="Cardbtn">  Issue Books</a>
     
    </div>
    </div>
      </div>    
         <div class="col-md-4">
  <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="IssueBookform" class="btn mr-2" id="Cardbtn"> Issue Books</a>
     
    </div>
    </div>
      </div>    
            <div class="col-md-4">
  <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="IssueBookform" class="btn mr-2" id="Cardbtn">  Issue Books</a>
     
    </div>
    </div>
    </div>
      
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="IssueBookform" class="btn mr-2" id="Cardbtn">  Issue Books</a>
     
    </div>
    </div>
      </div>    
         <div class="col-md-4">
  <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="IssueBookform" class="btn mr-2" id="Cardbtn">  Issue Books</a>
     
    </div>
    </div>
      </div>    
            <div class="col-md-4">
  <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="IssueBookform" class="btn mr-2" id="Cardbtn">  Issue Books</a>
     
    </div>
    </div>
    </div>
      
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="IssueBookform" class="btn mr-2" id="Cardbtn">  Issue Books</a>
     
    </div>
    </div>
      </div>    
         <div class="col-md-4">
  <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="IssueBookform" class="btn mr-2" id="Cardbtn">  Issue Books</a>
     
    </div>
    </div>
      </div>    
            <div class="col-md-4">
  <div class="card" style="width: 18rem;">
    <img src="./images.png" class="card-img-top" alt="Book Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="IssueBookform" class="btn mr-2" id="Cardbtn"> Issue Books</a>
     
    </div>
    </div>
    </div>
  </div>
    </div> 

    <!-- Main Content End Here -->


    
 </body>
 
 </html>

 @endsection