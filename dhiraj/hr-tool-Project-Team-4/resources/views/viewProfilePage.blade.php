@extends('layout')
@section('content')


<div class="card">
 <h3> <div class="card-header" style="color:Red;">View ProfilePage Data</div></h3>
  <div class="card-body">
  <a href='{{ url("backbutton") }}' class="pull-right btn btn-success space-left">Back</a>

<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">name ::  </h4>  </label> {{$item->name }}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">contact ::  </h4>  </label> {{$item->contact}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">address::  </h4>  </label> {{$item->address}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">email ::  </h4>  </label> {{$item->email}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">dob::  </h4>  </label> {{$item->dob}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">employee_id ::  </h4>  </label> {{$item->employee_id}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">date_of_joining::  </h4>  </label> {{$item->date_of_joining}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">company_name::  </h4>  </label> {{$item->company_name}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">location::  </h4>  </label> {{$item->location}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">employee_type::  </h4>  </label> {{$item->employee_type}}



  </div>
      
    </hr>
  
  </div>
</div>
@stop