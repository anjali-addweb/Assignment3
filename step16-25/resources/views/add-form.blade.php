
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <style>
        h1{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
   <h1>Add </h1>
<div class="container">
  <form action="{{route('form.store')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="Name">Enter CustomerName:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="name">
    </div><div class="form-group">
      <label for="ContactNo">Enter ContactNo :</label>
      <input type="text" class="form-control" id="email" placeholder="Enter ContactNo" name="contact">
   
    <center><input type="submit" class="btn btn-success" value="GO" name="submit"></center>
  </form>
</div>

</body>
</html>
