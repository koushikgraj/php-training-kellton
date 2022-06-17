<h1>View LIST</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Operation</th>

</tr>
@foreach($members as $item)
<tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td><a href={{"delete/".$item['id']}}>Delete</a></td>
        
      </tr>
      @endforeach
    </table>
