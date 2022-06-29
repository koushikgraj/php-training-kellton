@extends('posts.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                {{ $post->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Surname:</strong>
                {{ $post->surname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $post->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $post->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                {{ $post->mobile }}
            </div>
m       </div>
        @empty(!$post->city)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City:</strong>
                    {{ $post->city }}
                </div>
            </div>
        @endempty
        @empty(!$post->village)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Village:</strong>
                    {{ $post->village }}
                </div>
            </div>
        @endempty
        @empty(!$post->adhar_number)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adhar Number:</strong>
                    {{ $post->adhar_number }}
                </div>
            </div>
        @endempty
        </div>
    </div>
@endsection