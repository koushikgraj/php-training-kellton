@extends('master')
@section('content')

<center>
    @if(session()->has('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}
    </div>
    @endif
  </center>

    <center>
        <h1> THANKYOU FOR YOUR ORDER </h1>
    </center>
    @endsection