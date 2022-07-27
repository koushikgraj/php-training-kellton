
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                </div>
               
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<center>
                    {{ __('ALL POST DATA') }}
                    


                    </center>
                    <button><a href="home">Back</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">User_id</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr>
        <td>{{$post->user->name}}</td>
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>{{$post->user_id}}</td>
      <td><button>Edit</button><button>Delete</button></td>
      
    </tr>
    @endforeach
   
  </tbody>
</table>
</center>

@endsection
