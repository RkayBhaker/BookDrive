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
    </style>
</head>

@section('mainContent')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif

<table id="cart" class="table table-responsive table-bordered my-5 mx-3">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th style="width:8%">Quantity</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        
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
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                    <td class="actions" data-th="">
                        <button class="btn btn-sm remove-from-cart">Remove</i></button>
                        <!-- <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button> -->
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

<div class="row m-3 p-2">
    <div class="col d-flex justify-content-end">
        <a href="{{ route('IssueBookInfo.form') }}" class="button px-4 py-2">&nbsp;&nbsp;Issue Book</a>
    </div>
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