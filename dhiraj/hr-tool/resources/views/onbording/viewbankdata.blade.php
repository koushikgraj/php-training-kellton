@extends('layout')
@section('content')


<div class="card">
 <h3> <div class="card-header" style="color:Red;">View Bank Data</div></h3>
  <div class="card-body">
  <a href='{{ url("showbankdata") }}' class="pull-right btn btn-success space-left">Back</a>

<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Account type ::  </h4>  </label> {{$item->account_type}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Country ::  </h4>  </label> {{$item->country}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">IFSC Code ::  </h4>  </label> {{$item->ifsc_code}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Branch Contact ::  </h4>  </label> {{$item->contact}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Bank Name ::  </h4>  </label> {{$item->name}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Branch Location ::  </h4>  </label> {{$item->location}}
<br>
<br>
<label style="color:Black;"><h4 style="color:Black;">Account number ::  </h4>  </label> {{$item->account_number}}
<br>
<br>
  </div>
      
    </hr>
  
  </div>
</div>
@stop
