<!DOCTYPE html>
<html lang="en">
<head>
  <title>CarHut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>


    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h2 align="center">CarHut</h2>
    <p>Mission, Vission & Values</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('home')}}">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('logout')}}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <p>Add Car</p>
  <form  action="{{ route('store') }}"  method="POST" class="form-inline" >
    @csrf
    Add deals:
    <input type="text" name="Brand" class="form-control" size="50" placeholder="Brand">
	<input type="text" name="Model" class="form-control" size="50" placeholder="Model">
	<input type="number" name="CC" class="form-control" size="50" placeholder="CC">
	<input type="number" name="Price" class="form-control" size="50" placeholder="Price">
  <input type="file" name="Image" class="form-control" size="" placeholder="Image">
    <button type="submit" name="upload" value="Upload Image" class="btn btn-danger">Add</button>
  </form>
</div>

<div class="container-fluid text-center">
  <p>Book Car</p>

  <div class="container">
  <h2>Car List</h2>
  <p>Choose your one</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>Brand</th>
        <th>Model</th>
        <th>CC</th>
        <th>price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $value)
      <tr>
        <td>{{ $value->image }}</td>
        <td>{{ $value->brand }}</td>
        <td>{{ $value->model }}</td>
        <td>{{ $value->cc }}</td>
        <td>{{ $value->price }}</td>
        <td><button onclick="myFunction()" class="btn btn-succes">Add to cart</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


</div>





<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>
</footer>

</body>
<script>
function myFunction() {
  alert("Thanks for choosing one! We will reach you later!");
}
</script>
</html>
