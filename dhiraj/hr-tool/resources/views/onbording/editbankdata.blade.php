@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Bank Data Page</div>
  <div class="card-body">
      
      <!-- <form action="{{ url('editbankdata/' .$item->id) }}" method="post"> -->
      <!-- <form action="{{url('updatebankdata')}}/{{$item->id}}" method="post"> -->
      <form action="{{url('updatebankdata')}}/{{$item->id}}" method="post">
        {!! csrf_field() !!}
       
        <input type="hidden" name="id" id="id" value="{{$item->id}}" id="id" />
        <label>Account type</label></br>
        <input type="text" name="account_type" id="name" value="{{$item->account_type}}" class="form-control"></br>
        
        <label>Country</label></br>
        <input type="text" name="country" id="address" value="{{$item->country}}" class="form-control"></br>
        
        <label>IFSC Code</label></br>
        <input type="text" name="ifsc_code" id="mobile" value="{{$item->ifsc_code}}" class="form-control"></br>
        
        <label>Branch Contact</label></br>
        <input type="text" name="contact" id="address" value="{{$item->contact}}" class="form-control"></br>
        
        <label>Bank Name</label></br>
        <input type="text" name="name" id="mobile" value="{{$item->name}}" class="form-control"></br>
        
        <label>Branch Location</label></br>
        <input type="text" name="location" id="address" value="{{$item->location}}" class="form-control"></br>
        
        <label>Account number</label></br>
        <input type="text" name="account_number" id="mobile" value="{{$item->account_number}}" class="form-control"></br>
        
        
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop