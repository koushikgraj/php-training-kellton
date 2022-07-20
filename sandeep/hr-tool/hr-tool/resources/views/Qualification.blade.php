@extends('layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>

<body style="background-color:powderblue;">

</style>
<h6>Choose a Filter</h6> 


<button class="btn btn-primary" type="submit">Find Values</button>
 
<a href ="{{url('create')}}"class="btn btn-primary">Add qualification</a>

<a href ="{{url('edit')}}"class="btn btn-primary">Edit qualification</a>



<section>

    <table class ="table" >

    <thead class="table-light">
    <tr>
    
      <th scope="col">cource</th>
      <th scope="col">university</th>
      <th scope="col">academic_year</th>
      <th scope="col">year_of_passing</th>
      <th scope="col">percentage</th>
      <th width="col">Action</th>
    </tr>
  </thead>


  <tbody id="myrow">

     
@foreach($posts as $item)
  <tr>
  <td>{{ $item->no }}</td>
  <td>{{ $item->cource }}</td>
  <td>{{ $item->university }}</td>
  <td>{{ $item->academic_year}}</td>
  <td>{{ $item->year_of_passing}}</td>
  <td>{{ $item->percentage}}</td>

  <td>
  <!-- Edit -->
  <a href='{{ url("edit/$item->id") }}' class="btn btn-sm btn-info">Edit</a>
  <!-- Delete -->
  <a href='{{ url("delete/$item->id") }}' class="btn btn-sm btn-danger">Delete</a>
  </td>


 
</tr>
@endforeach 
  

    
</table>

</section>
<script>
</script>
</body>
</html>
@endsection