@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="dash">{{ __('Dashboard') }}</a>
                <button class="btn btn-light btn-send  pt-2 btn-block "><a href="post">POST</a></button>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
