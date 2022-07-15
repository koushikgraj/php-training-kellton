@extends('layout')
@section('content')


<div class="card">
 <h3> <div class="card-header" style="color:Red;">View Skill Data</div></h3>
  <div class="card-body">
  <a href='{{ url("backbutton") }}' class="pull-right btn btn-success space-left">Back</a>

<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Programming_language ::  </h4>  </label> {{$item->Programming_language}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Proficiency_level ::  </h4>  </label> {{$item->Proficiency_level}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Certification ::  </h4>  </label> {{$item->Certification}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Work_experience ::  </h4>  </label> {{$item->Work_experience}}
<br>
<br>

  </div>
      
    </hr>
  
  </div>
</div>
@stop