<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
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
         > <a href="{{ route('admin.panel') }}">ADMIN PANEL</a> / DONATED BOOKS
    </p>
</div>

    <div class="h3 text-primary py-3 text-center">DONATED BOOK FORM</div>
    <hr>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Info!</strong> {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="container bg-secondary bg-opacity-10">
    <form class="row g-3 px-4 py-3" method="POST" action=" {{ route('update.book.detials') }} ">
        @csrf
        <div class="col-md-6">
            <label for="inputTitle4" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="inputTitle4" placeholder="Title">
        </div>
        <div class="col-md-6">
            <label for="subTitle4" class="form-label">Sub-Title</label>
            <input type="text" name="sub_title" class="form-control" id="subTitle4" placeholder="Sub-Title">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Description</label>
            <input type="text" name="desc" class="form-control" id="inputAddress" placeholder="Add Book description">
        </div>
        <div class="col-md-6">
            <label for="status" class="form-label">Book Available</label>
            <select id="status" name="status" class="form-select">
                <option selected value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="category" class="form-label">Book Category</label>
            <select id="category" name="category" class="form-select">
                <option selected value="CAT-I">CAT-I</option>
                <option selected value="CAT-II">CAT-II</option>
                <option selected value="CAT-III">CAT-III</option>
                <option selected value="CAT-IV">CAT-IV</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="lang" class="form-label">Language</label>
            <select id="lang" name="lang" class="form-select">
                <option selected value="Hi">Hindi</option>
                <option value="Eng">English</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="board" class="form-label">Select Board</label>
            <select id="board" name="board" class="form-select">
                <option selected value="ncert">ncert</option>
                <option selected value="cbse">cbse</option>
            </select>
        </div>

        <input type="text" id="token" name="token" style="display:none;" value="@php echo rand().'BD-token' @endphp">

        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
    </div>


<!-- Available Data in database -->
<h4 class="p-4 my-1 text-center bg-primary bg-opacity-25 container">All avaiable books detials</h4>
<div class="table-responsive-sm container">
<table class="table container my-5 table-bordered border-primary table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Sub-Title</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Category</th>
      <th scope="col">Language</th>
      <th scope="col">Board</th>
    </tr>
  </thead>
  <tbody>
      <?php $id = 1; ?>
      @foreach($all_data as $data)
        <tr>
        <th scope="row">{{ $id++ }}</th>
        <td>{{ $data->title }}</td>
        <td>{{ $data->sub_title }}</td>
        <td>{{ $data->desc }}</td>
        <td class="text-uppercase">
            @if($data->status == 1)
                Available
            @else
                Not Available
            @endif
        </td>
        <td class="text-uppercase">{{ $data->category }}</td>
        <td class="text-uppercase">
            @if($data->Language === 'Hi')
                Hindi
            @else
                English
            @endif
        </td>
        <td class="text-uppercase">{{ $data->board }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

</body>
</html>