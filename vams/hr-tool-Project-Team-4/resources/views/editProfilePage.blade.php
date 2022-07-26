@extends('layout')
@section('content')


<div class="card">
  <h3><div class="card-header" style="color:Green;">Update ProfilePage Data</div></h3>
  <div class="card-body">
      
      <a href='{{ url("showProfilePagedata") }}' class="pull-right btn btn-success space-left">ProfilePage Data</a>

      
      <form action="{{url('updateProfile')}}/{{$item->id}}" method="post">
        {!! csrf_field() !!}
       
        <input type="hidden" name="id" id="id" value="{{$item->id}}" id="id" />
        <label>name</label></br>
        <input type="text" name="name" id="name" value="{{$item->name}}" class="form-control"></br>
        
        <label>email</label></br>
        <input type="text" name="email" id="email" value="{{$item->email}}" class="form-control"></br>
        
        <label>employee_id</label></br>
        <input type="text" name="employee_id" id="employee_id" value="{{$item->employee_id}}" class="form-control"></br>
        
        <label>date_of_joining</label></br>
        <input type="date" name="date_of_joining" id="date_of_joining" value="{{$item->date_of_joining}}" class="form-control"></br>
        
       
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop