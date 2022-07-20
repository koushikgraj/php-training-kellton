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
                        <h2> Qualification Details</h2>
                    </div>
                    <div class="card-bod">
                        <a href="{{ url('addQualificationdata') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add Qualification Details
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsiv">
                            <table class="table" width="100">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">University</th>
                                        <th scope="col">Academic_year</th>
                                        <th scope="col">Year_of_passing</th>
                                        <th scope="col">Percentage</th>
                                        
                                    </tr>
                                </thead>
                                <tbody id="myrow">
                                <?php $i=0; ?>    
                                @foreach($posts as $item)
                                    <tr>
                                       
                                        <td><?php echo ++$i;?></td>
                                        <td>{{ $item->Course }}</td>
                                        <td>{{ $item->University }}</td>
                                        <td>{{ $item->Academic_year }}</td>
                                        <td>{{ $item->Year_of_passing }}</td>
                                        <td>{{ $item->Percentage }}</td>
                                        
                                <td>
                                <a href='{{ url("viewQualificationdata/$item->id") }}' title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href='{{ url("editQualificationdata/$item->id") }}' class="btn btn-sm btn-info">Edit</a>
                                <a href='{{ url("deleteQualification/$item->id") }}' class="btn btn-sm btn-danger">Delete</a>
                                
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
    </body>
</html>
    @endsection