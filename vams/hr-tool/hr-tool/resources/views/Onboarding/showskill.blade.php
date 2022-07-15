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
                        <h2>Skill</h2>
                    </div>
                    <div class="card-bod">
                        <a href="{{ url('addSkilldata') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add Skill Details
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsiv">
                            <table class="table" width="100">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Programming_language</th>
                                        <th scope="col">Proficiency_level</th>
                                        <th scope="col">Certification</th>
                                        <th scope="col">Work_experience</th>
                                                                                
                                    </tr>
                                </thead>
                                <tbody id="myrow">
                                <?php $i=0; ?>    
                                @foreach($posts as $item)
                                    <tr>
                                       
                                        <td><?php echo ++$i;?></td>
                                        <td>{{ $item->Programming_language }}</td>
                                        <td>{{ $item->Proficiency_level }}</td>
                                        <td>{{ $item->Certification }}</td>
                                        <td>{{ $item->Work_experience }}</td>
                                                                                
                                <td>
                                <a href='{{ url("viewSkilldata/$item->id") }}' title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href='{{ url("editSkilldata/$item->id") }}' class="btn btn-sm btn-info">Edit</a>
                                <a href='{{ url("deleteSkilldata/$item->id") }}' class="btn btn-sm btn-danger">Delete</a>
                                
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