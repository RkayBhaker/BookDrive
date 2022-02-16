<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registerd User Detials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        a{
            text-decoration: none;
        }
        p{
            position: relative;
        }
        p::after{
            content: '';
            width: 100%;
            height: 0.5px;
            background-color: rgba(255,50,100, 0.2);
            position: absolute;
            left : 0;
            bottom: 0;
        }
    </style>

</head>
<body>

<div class="container-fluid bg-secondary bg-opacity-25 p-3 sticky-top" id="sticky-top">
    <p>
         > <a href="{{ route('admin.panel') }}">ADMIN PANEL</a> / ORDERS DETAILS
    </p>
</div>

<!-- Available Data in database -->
<h4 class="p-4 my-1 text-center bg-primary bg-opacity-25">All ORDERS</h4>
<div class="table-responsive-sm container">
<table class="table container my-5 table-bordered border-primary table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Board</th>
      <th scope="col">Book Token</th>
      <th scope="col">Order Id</th>
    </tr>
  </thead>
  <tbody>
      <?php $id = 1; ?>
      @foreach($all_users as $data)
        <tr>
            <th scope="row">{{ $id++ }}</th>
            <td>{{ $data->title }}</td>
            <td>{{ $data->category }}</td>
            <td class="text-uppercase">{{ $data->board }}</td>
            <td>{{ $data->token }}</td>
            <td>{{ $data->orderId }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

</body>
</html>