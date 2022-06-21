@extends('Tech.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>MyLaravel_Project_1 CRUD Example from Technologies</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tech.create') }}"> Enter new TEchnology</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Tech_Name</th>
            <th>Education</th>
            <th>Marks</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->Tech_Name}}</td>
             <td>{{ $value->Education }}</td>
              <td>{{ $value->Marks }}</td>
              <td>{{ \Str::limit($value->Description, 100) }}</td>  
            <td>
                <form action="{{ route('tech.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('tech.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('tech.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection