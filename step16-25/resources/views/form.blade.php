<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
        h1{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Customer Details</h1>
<div class="container">          
  <table class="table table-striped">
  @csrf
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Contact No</th>
        <th>Delete</th>
      </tr>
    </thead>
   
    <tbody>
    @foreach($data as $row)
      <tr>
        <td>{{$row->name}}</td>
        <td>{{$row->contact_no}}</td>
        <td><form action="{{route('form.destroy',$row->id)}}" method="POST">
            @csrf
            @method('DELETE')
          <button class="btn btn-danger">Delete</button></td>
          </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  <center><a class="btn btn-success" href="{{route('form.create')}}" role="button">Insert</a>
</center>
</div>

</body>
</html>
