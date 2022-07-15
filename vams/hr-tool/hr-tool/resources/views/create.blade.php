@extends('layout')
@section('content')
<center>
  <div class="create">
<table border="5">
  
  <tr>
        <td>PROGRAMMING_LANGUAGE</td>
        <td>PROFICIENCY_LEVEL</td>
        <td>CERTIFICATION</td>
        <td>WORK_EXPERIENCE</td>
        <td>ID</td>
        
    </tr>
    @foreach($leaves as $leave)
    <tr>
      <td>{{$leave->id}}</td>
      <td>{{$leave->user}}</td>
      <td>{{$leave->user_name}}</td>
      <td>{{$leave->ltype}}</td>
      <td>{{$leave->sdate}}</td>
      <td>{{$leave->edate}}</td>
      <td>{{$leave->reason}}</td>
      <td>{{$leave->action}}</td>
    </tr>
    @endforeach
  </thead>
</table>
</div>
</center>

@endsection