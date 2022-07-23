@extends('layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>

<body style="background-color:powderblue;">

</style>

    <div class="containr">
        <div class="ro">
            <div class="col-md-">
                <div class="car">
                    <div class="card-header">
                        <h2> ProfilePage</h2>
                    </div>
                    <div class="card-bod">
                        <a href="{{ url('addProfilePagedata') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add ProfilePage Details
                        </a>
                        <br/>
                        <br/>
    
                        <div class="table-responsiv">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                            <table class="table" width="100">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        
                                        
                                        <th scope="col">email</th>
                                        

                                        <th scope="col">employee_id</th>
                                        <th scope="col">date_of_joining</th>
                                        <

                                        
                                    </tr>
                                </thead>
                                <tbody id="myrow">
                                <?php $i=0; ?>    
                                @foreach($posts as $item)
                                    <tr>
                                       
                                        <td><?php echo ++$i;?></td>
                                        <td>{{ $item->name }}</td>
                                        
                                        <td>{{ $item->email }}</td>
                                    
                                        <td>{{ $item->employee_id }}</td>
                                        <td>{{ $item->date_of_joining }}</td>
                                        



                                        
                                <td>
                                <a href='{{ url("viewProfilePagedata/$item->id") }}' title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href='{{ url("editProfilePagedata/$item->id") }}' class="btn btn-sm btn-info">Edit</a>
                                <a href='{{ url("deleteProfilePagedata/$item->id") }}' class="btn btn-sm btn-danger">Delete</a>
                                
                            </td>
                                
</tr>
                                @endforeach 

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
.w-5{
    display:none;
}
</style>
    </body>
</html>
    @endsection