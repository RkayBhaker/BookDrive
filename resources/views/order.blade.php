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
            height : 81.4%;
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
            bottom : 40px;
        }
        .card-text{
            color: #fff;
            right : 0;
            bottom : 50px;
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
                <small class="text-muted">{{ \Carbon\Carbon::parse($details['created_at'])->diffForHumans() }}</small>
            </div>
        </div>
    @endforeach
</div>
@endsection