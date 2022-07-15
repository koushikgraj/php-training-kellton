@extends('layout')
@section('content')


<div class="card">
  <h3><div class="card-header" style="color:Green;">Update Skill Data</div></h3>
  <div class="card-body">
      
      <!-- <a href='{{ url("showSKilldata") }}' class="pull-right btn btn-success space-left">All Skill Data</a> -->

      <!-- <form action="{{ url('editSkilldata/' .$item->id) }}" method="post"> -->
      <!-- <form action="{{url('updateSkilldata')}}/{{$item->id}}" method="post"> -->
      <form action="{{url('updateSkilldata')}}/{{$item->id}}" method="post">
        {!! csrf_field() !!}
       
        <input type="hidden" name="id" id="id" value="{{$item->id}}" id="id" />
        <label>Programming_language</label></br>
        <input type="text" name="Programming_language" id="name" value="{{$item->Programming_language}}" class="form-control"></br>
        
        <label>Proficiency_level</label></br>
        <input type="text" name="Proficiency_level" id="address" value="{{$item->Proficiency_level}}" class="form-control"></br>
        
        <label>Certification</label></br>
        <input type="text" name="Certification" id="mobile" value="{{$item->Certification}}" class="form-control"></br>
        
        <label>Work_experience</label></br>
        <input type="text" name="Work_experience" id="address" value="{{$item->Work_experience}}" class="form-control"></br>
        
        
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop