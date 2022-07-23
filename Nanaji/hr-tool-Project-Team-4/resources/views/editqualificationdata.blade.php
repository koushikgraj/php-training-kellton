@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Qualification Data Page</div>
  <div class="card-body">

      <!-- <form action="{{ url('editqualificationdata/' .$item->id) }}" method="post"> -->
      <!-- <form action="{{url('updatequalificationdata')}}/{{$item->id}}" method="post"> -->
      <form action="{{url('updatequalificationdata')}}/{{$item->id}}" method="post">
        {!! csrf_field() !!}

        <input type="hidden" name="id" id="id" value="{{$item->id}}" id="id" />
        <label>Course</label></br>
        <input type="text" name="Course" id="name" value="{{$item->Course}}" class="form-control"></br>

        <label>University</label></br>
        <input type="text" name="University" id="address" value="{{$item->University}}" class="form-control"></br>

        <label>Academic_year</label></br>
        <input type="text" name="Academic_year" id="mobile" value="{{$item->Academic_year}}" class="form-control"></br>

        <label>Year_of_passing</label></br>
        <input type="text" name="Year_of_passing" id="address" value="{{$item->Year_of_passing}}" class="form-control"></br>

        <label>Percentage</label></br>
        <input type="number" name="Percentage" id="Percentage" value="{{$item->Percentage}}" class="form-control"></br>

        


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop 