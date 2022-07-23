@extends('layout')
@section('content')





<center>
  <div class="create">
<table border="5">
  
  <tr>
        <td>Id</td>
        <td>Fist Name</td>
        <td>Last Name</td>
        <td>Employee Id</td>
        <td>Status</td>
       
    </tr>
    @foreach($attendance as $leave)
    <tr>
      <td>{{$leave->id}}</td>
      <td>{{$leave->first_name}}</td>
      <td>{{$leave->last_name}}</td>
      <td>{{$leave->emp_id}}</td>
      <td>{{$leave->status}}</td>
     

    </tr>
    @endforeach
  </thead>
</table>
</div>
</center>


<!-- <div class="adisplay" >
<table  border="1">
    
  <thead class="thead-dark">
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Employee Id</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody id="myrow"> -->

 
  <!-- <script>
    var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "get";
        var asynchronous = true;
        ajax.open(method, url, asynchronous);
        ajax.send();
        
        ajax.onreadystatechange = function(){
            if(this.readyState===4 && this.status===200 ){
              let data = JSON.parse(this.responseText);
              console.log(data);
              let x = document.getElementById("myrow");
              for(let i=0;i<data.length;i++){
                let tr = document.createElement('tr');
                let obj = data[i];
                for(const key in obj){
                if(key === "created_at" || key ==="updated_at" || key === "id"){
                  continue;
                }  
                let td = document.createElement('td');
                td.textContent = obj[key];
                    tr.appendChild(td);
                    x.appendChild(tr);
                }

              }

            }
          
          }
</script> -->
<!-- </tbody>


        </table>
</div> -->

@endsection