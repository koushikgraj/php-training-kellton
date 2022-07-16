@extends('layout')
@section('content')

<div class="card">
  <
 <h3> <div class="card-header" style="color:Red;">View Qualification Data</div></h3>
  <div class="card-body">

        
  <a href='{{ url("backbutton") }}' class="pull-right btn btn-success space-left">Back</a>

<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Course ::  </h4>  </label> {{$item->Course}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">University ::  </h4>  </label> {{$item->University}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;"> Academic_year::  </h4>  </label> {{$item->Academic_year}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Year_of_passing::  </h4>  </label> {{$item->Year_of_passing}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Percentage ::  </h4>  </label> {{$item->Percentage }}
<br>

<br>
  </div>

    </hr>

  </div>
</div> 
</div>
@stop