@extends('layout')
@section('content')
<h1>User Profile</h1>
<table border= "1"> 

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

</tr>
@foreach($data as $d)
<tr>
    <td>{{$d->name}}</td>
    <td>{{$d->email}}</td>
    <td>{{$d->dob}}</td>
    <td>{{$d->adhar}}</td>
    <td>{{$d->city}}</td>
    <td>{{$d->state}}</td>
    <td>{{$d->country}}</td>
    <td>{{$d->mobile}}</td>
    <td>{{$d->address}}</td>
    <td>{{$d->permant_address}}</td>
    <td>{{$d->marital_satus}}</td>
    <td>{{$d->gender}}</td>
    <td>{{$d->education}}</td>
    <td>{{$d->year}}</td>

</tr>
@endforeach
</table>

@endsection