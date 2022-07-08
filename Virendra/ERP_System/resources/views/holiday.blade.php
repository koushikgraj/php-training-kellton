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

<select class="selectpicker">
  <option>2015</option>
  <option>2016</option>
  <option>2017</option>
  <option>2018</option>
  <option>2019</option>
  <option>2020</option>
  <option>2021</option>
  <option>2022</option>
  
</select>
<button class="btn btn-primary" type="submit">Find Values</button>
 
<a href ="{{url('create')}}"class="btn btn-primary">Add Holiday</a>

<a href ="{{url('edit')}}"class="btn btn-primary">Edit Holiday</a>



<section>

<h3>Holiday Schedule-2022</h3>

    <table class ="table" >

    <thead class="table-light">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Month</th>
      <th scope="col">Date</th>
      <th scope="col">Day of the week</th>
      <th scope="col">Holiday</th>
      <th scope="col">Holiday type</th>
      <th width="col">Action</th>
    </tr>
  </thead>


  <tbody id="myrow">

     
@foreach($posts as $item)
  <tr>
  <td>{{ $item->no }}</td>
  <td>{{ $item->month }}</td>
  <td>{{ $item->date }}</td>
  <td>{{ $item->day_of_the_week}}</td>
  <td>{{ $item->holiday}}</td>
  <td>{{ $item->holiday_type}}</td>

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