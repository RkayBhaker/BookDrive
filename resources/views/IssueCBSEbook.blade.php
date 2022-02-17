@extends('layouts.templateBD')

@section('mainContent')
<html>

<head>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<style>
   /* new card body style */
   .card_container{
    background : rgba(0,0,0,0.1);
    display: grid;
    padding: 15px;
    grid-template-columns : repeat(auto-fill, minmax(260px, 1fr));
    grid-template-rows : 1fr;
    grid-gap: 12px;
  }
  .card{
    position: relative;
      /* box-shadow: 0 14px 8px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.24); */
      box-shadow: 0 14px 8px 0 rgba(115, 134, 213, 0.2), 0 12px 20px 0 rgba(115, 134, 213, 0.50);
      margin: 1rem 0 4rem 0;
      border: .5px ridge rgba(0, 0, 0, 0.2);
  }
  .board_logo{
    color: #fff;
    display:block;
    position: absolute;
    top : 0;
    right : 0;
  }
  #add-to-cart-btn{
    border: 1px ridge #4E67CA;
  }
  #add-to-cart-btn:hover{
    background: #fff;
    color: #4E67CA;
    font-weight: bold;
    border: 1px ridge #4E67CA;
  }

</style>
</head>

<body>

    <h1 class="text-center blue 30% ">CBSC BOOKS</h1>

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


    <div class="card_container">

    


  <?php
    $id = 0;
  ?>
  @foreach($CBSE_data as $value)

    <div class="card mx-auto img-thumbnail" style="width: 17rem;">
        <p class="board_logo px-2 py-1 m-1 rounded bg-secondary">CBSE</p>
        <img class="card-img-top" src="./images.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"> {{$value->title}} </h5>
          <p class="card-text"> {{$value->desc}} </p>
        </div>
        <div class="row container-fluid text-center mx-auto py-2">
            <div class="col-md-5 card-text text-primary">
              @if($value->Language === 'Hi')
                Hindi
              @else
                English
              @endif
            </div>
            @if($CBSE_total_book[$id] >= 1)
              <div class="col-md-7 card-text text-success">Only {{ $CBSE_total_book[$id] }} left</div>
            @else
              <div class="col-md-7 card-text text-danger">Not Available</div>
            @endif
          </div>
          <div class="card-footer bg-white">
            <small class="">
              @if($CBSE_total_book[$id] > 0)
                  <a href="{{ route('add.to.cart', $value->id) }}" class="btn text-center" id="add-to-cart-btn" role="button">Add to cart</a>
              @else
                <a href="{{ route('add.to.cart', $value->id) }}" class="btn text-center" id="add-to-cart-btn" style="pointer-events: none;" role="button">Add to cart</a>
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