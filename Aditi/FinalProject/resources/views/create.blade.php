@extends('layout')
@section('content')
<table border="1">
  
  <tr>
        <td>Id</td>
        <td>USER-ID</td>
        <td>LEAVE-TYPE</td>
        <td>START-DATE</td>
        <td>END-DATE</td>
        <td>REASON</td>
        
    </tr>
    @foreach($leaves as $leave)
    <tr>
      <td>{{$leave->id}}</td>
      <td>{{$leave->user}}</td>
      <td>{{$leave->ltype}}</td>
      <td>{{$leave->sdate}}</td>
      <td>{{$leave->edate}}</td>
      <td>{{$leave->reason}}</td>
    </tr>
    @endforeach
  </thead>

</table>
@endsection