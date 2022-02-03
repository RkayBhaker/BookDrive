
@extends('layouts.templateBD')

@section('mainContent')
<html>

<head>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<style>

  /* new card body style */
  .card_container{
    background : rgba(0,0,0,0.1);
    display: grid;
    padding: 15px;
    grid-template-columns : repeat(auto-fill, minmax(270px, 1fr));
    grid-template-rows : 1fr;
    grid-gap: 12px;
  }

  .card{
    position: relative;
  }
  .board_logo{
    color: #fff;
    display:block;
    position: absolute;
    top : 0;
    right : 0;
  }

</style>

</head>
<body>

<h1 class="text-center blue 30% ">NCERT BOOKS</h1>

<!-- menu cart button section start -->

  <div class="container">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Info!</strong> {{ session('success') }}
            <button type="button" class="close btn-danger" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="f1">&times;</span>
            </button>
        </div>
    @endif
  </div>

<!-- menu cart button section end -->

  <div class="card_container">
  <?php
    $id = 0;
  ?>
  @foreach($NCERT_data as $value)
      <div class="card border" style="width: 17rem;">
          <p class="board_logo px-2 py-1 m-1 rounded bg-secondary">NCERT</p>
          <img class="card-img-top" src="/images.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> {{$value->title}} </h5>
            <p class="card-text"> {{$value->desc}} </p>
          </div>
          <div class="row container-fluid text-center mx-auto py-2">
              <div class="col-md-5 card-text text-primaryr">
                @if($value->Language === 'Hi')
                  Hindi
                @else
                  English
                @endif
              </div>
              @if($NCERT_total_book[$id] > 0)
                <div class="col-md-7 card-text text-success">Only {{ $NCERT_total_book[$id] }} left</div>
              @else
                <div class="col-md-7 card-text text-danger">Not Available</div>
              @endif
            </div>
          <div class="card-footer bg-white">
            <small class="">
            @if($NCERT_total_book[$id] > 0)
                <a href="{{ route('add.to.cart', $value->id) }}" class="btn btn-warning text-center" role="button">Add to cart</a>
            @else
              <a href="{{ route('add.to.cart', $value->id) }}" class="btn btn-warning text-center" style="pointer-events: none;" role="button">Add to cart</a>
            @endif
            </small>
          </div>
        </div>

        <?php
          $id++;
        ?>
  @endforeach

  </div>
 </body>
 
 </html>

 @endsection