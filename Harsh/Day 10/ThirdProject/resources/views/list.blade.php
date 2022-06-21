<h1>Courses Table</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Categories</td>
        <td>Duration</td>
        <td>Date</td>
        <td>Image</td>
        <td>Operation</td>
    </tr>
    @foreach($cour as $course)
    <tr>
        <td>{{$course['id']}}</td>
        <td>{{$course['name']}}</td>
        <td>{{$course['categories']}}</td>
        <td>{{$course['duration']}}</td>
        <td>{{$course['date']}}</td>
        <td>{{$course['image']}}</td>
        <td><a href={{"delet/".$course['id']}}>Delete</a>
        <a href={{"edit/".$course['id']}}>Update</a></td>
    </tr>
    @endforeach
</table>