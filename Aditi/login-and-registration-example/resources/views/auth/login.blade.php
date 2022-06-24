<html>
    <head>
        <style type="text/css">
            .login{
                    color: darkblue;
                    width: 320px;
    				height: 420px;
    				background: lemonchiffon;
    				margin-top: 100px;
    				margin-left: 500px;
    				position: absolute;
   				    box-sizing: border-box;
   				    padding-right: 20px;
                    padding-left: 25px;
            }
            body{
                background-color: #5e433b;
            }
            </style>
</head>
<body>
@extends('layouts.auth-master')

@section('content')
<div class="login">
    <form method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
        <label for="floatingName">Email or Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
        <label for="floatingPassword">Password</label>
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
        
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
        
        @include('auth.partials.copy')
    </form>
</div>  
@endsection
</body>
</html>
