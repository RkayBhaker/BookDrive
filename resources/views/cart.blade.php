@extends('layouts.templateBD')
<head>
    <style>
        tr > th{
            color: #4E67CA;
        }

        .button{
            background-color:#4e67ca;
            border: #4e67ca;
            border-radius: 8px;
            color:white;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            width:150px;
        }

        .button:hover {
            background-color:#7386D5;
            border: #4e67ca;
        }
        .all-items{
            width: 100%;
            display: grid;
            grid-template-columns : repeat(auto-fit, minmax(280px, 1fr));
            grid-gap: 10px;
        }
        .all-items > a{
            position: relative;
            border : 1.1px ridge blue;
            border-radius : 4px;
        }
        .all-items > a:hover{
            border : 1.1px ridge #fff;
            background : #4E67CA;
            color: #fff;
        }
    </style>
</head>

@section('mainContent')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

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

<table id="cart" class="table table-responsive my-5 mx-3">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th style="width:8%">Quantity</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="border">
        
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <!-- <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div> -->
                            <div class="col-sm-9">
                                <h6 class="nomargin">{{ $details['title'] }}</h6>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['desc'] }}</td>
                    <td data-th="Quantity" class="text-center">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" style="display:none;" />
                        <p> {{ $details['quantity'] }} </p>
                    </td>
                    <td class="actions text-center" data-th="">
                        <button class="btn btn-sm remove-from-cart">Remove</i></button>
                        <!-- <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button> -->
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<div class="row p-2 mx-3" style="margin-bottom : 70px;">
    @if(session('cart') != null)
        <div class="col-md-12 d-flex justify-content-end text-center">
            <a href="{{ route('IssueBookInfo.form') }}" class="button px-3 py-3">Issue Book</a>
        </div>
    @else
        <div class="col-md-12 my-5">
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>Info! </strong>Your cart is empty.
            </div>
            <div class="my-3 border alert-secondary px-3 py-4 alert alert-dismissible fade show" role="alert">
                <h6 class="text-primary pb-3">click to below category to go add books in cart.</h6>
                    <div class="all-items border mx-auto text-center">
                            <a class="p-3" href="{{ route('ncert.book') }}">NCERT Books </a>
                            <a class="p-3" href="{{ route('cbse.book') }}">CBSE Books </a>
                            <a class="p-3" href="#">ICSE Books </a>
                            <a class="p-3" href="#">MSBTE Books </a>
                    </div>
                    <button type="button" class="close btn-danger" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="f1">&times;</span>
                    </button>
                <!-- </div> -->
            </div>
        </div>
    @endif
</div>

<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection