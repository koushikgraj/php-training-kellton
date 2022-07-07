@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body>

<h1>User Profile</h1>
<table> 

<tr><td>Name</td>
<td>E-mail</td>
<td>DOB</td>
<td>Adhar</td>
<td>City</td>
<td>state</td>
<td>country</td>
<td>mobile</td>
<td>address</td>
<td>Permant</td>
<td>marital status</td>
<td>gender</td>
<td>education</td>
<td>year</td>
<td>Action</td>

</tr>

<tr>
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->dob}}</td>
    <td>{{$data->adhar}}</td>
    <td>{{$data->city}}</td>
    <td>{{$data->state}}</td>
    <td>{{$data->country}}</td>
    <td>{{$data->mobile}}</td>
    <td>{{$data->address}}</td>
    <td>{{$data->permant_address}}</td>
    <td>{{$data->marital_status}}</td>
    <td>{{$data->gender}}</td>
    <td>{{$data->education}}</td>
    <td>{{$data->year}}</td>
<td>
     <a href="#" class="btn btn-info btn-sm">Modify</a> 
</td>
</tr>

</table>
</body>
</html>


@endsection