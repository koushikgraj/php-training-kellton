<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>

    <style>
#customers {
 font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

    .delete{
        text-decoration: none;
        }

        .edit{
            text-decoration: none;
        }

    </style>
</head>

<body>
    <a href="insert">Add Record</a><br>
    {{session('success')}}
    <table id = "customers">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Created at</td>
            <td>Action</td>
        </tr>
        @foreach($todoArr as $todo)
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->name}}</td>
            <td>{{$todo->created_at}}</td>
            <td><a href="delete/{{$todo->id}}" class="delete">Delete</a></td>
            <td><a href="edit/{{$todo->id}}" class="edit">Edit</a></td>
            
        </tr>
        @endforeach
    </table>
</body>
</html>