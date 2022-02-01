@extends('layouts.templateBD')

@section('mainContent')

<head>
    <style>
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
        .container-wrap{
            height : 81.1%;
            width: 100%;
            background: rgba(0,0,0,0.5);
            position: absolute;
        }
        .card-body{
            color: #fff;
        }
        .card-title{
            position: absolute;
            left : 10px;
            bottom : 65px;
        }
        .card-text{
            color: #fff;
            right : 0;
            bottom : 73px;
            padding: 2px 5px;
            background: rgba(0,0,0,0.5);
            position: absolute;
        }

    </style>
</head>
<div class="card_container">
    <?php $id = 0; ?>
    @foreach($orders as $details)
        <div class="card">
            <img class="card-img" src="/images.png" alt="Card image">
            <div class="container-wrap"></div>
            <div class="card-body card-img-overlay">
                <h5 class="card-title">{{ $details->title }}</h5>
                <p class="card-text">{{ $details->board }}</p>
            </div>
            <div class="card-footer">
                <br>
                <br>
                <br>
                <!-- <small class="text-muted">Ordered :  \Carbon\Carbon::parse($details['created_at'])->diffForHumans()</small> -->
                <!-- <hr> -->
                <!-- Your Order will deliver by tomorrow evening. -->
                <br>
                <small class="text-muted">Wed Jan 25 2023 05:30:00 GMT+0530</small>
            </div>
        </div>
    @endforeach
</div>
@endsection