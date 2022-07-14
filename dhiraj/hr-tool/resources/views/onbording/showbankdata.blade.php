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
                        <h2>Bank Details</h2>
                    </div>
                    <div class="card-bod">
                        <a href="{{ url('addbankdata') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add Bank Details
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsiv">
                            <table class="table" width="100">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">account_type</th>
                                        <th scope="col">country</th>
                                        <th scope="col">ifsc_code</th>
                                        <th scope="col">contact</th>
                                        <th scope="col">Bank Name</th>
                                        <th scope="col">location</th>
                                        <th scope="col">account_number</th>
                                        <th width="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="myrow">
                                <?php $i=0; ?>    
                                @foreach($posts as $item)
                                    <tr>
                                       
                                        <td><?php echo ++$i;?></td>
                                        <td>{{ $item->account_type }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->ifsc_code }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->account_number }}</td>
                                <td>
                                <a href='{{ url("viewbankdata/$item->id") }}' title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href='{{ url("editbankdata/$item->id") }}' class="btn btn-sm btn-info">Edit</a>
                                <a href='{{ url("deletebankdata/$item->id") }}' class="btn btn-sm btn-danger">Delete</a>
                                
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
