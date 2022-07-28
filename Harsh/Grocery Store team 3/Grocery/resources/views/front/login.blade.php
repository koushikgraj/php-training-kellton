@extends('front.layout.layout')
@section('content')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="{{route('home')}}">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	

			<div class="well">
            @if($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </div>
            @endif
		
			<form class="form-horizontal" method="post" action="{{route('loginCheck')}}">
                @csrf
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="text" name="email" id="inputEmail1" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password"  name="password" class="span3"  id="inputPassword1" placeholder="********">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Login</button> <a href="forgetpass.html">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
        <div class="span9">
    <ul class="breadcrumb">
		
    </ul>
	<h3>Registration</h3>	

			<div class="well">
		
			<form class="form-horizontal" action="{{route('user_store')}}" method="post">
                @csrf
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">First Name</label>
				<div class="controls">
				  <input class="span3"  type="text" name="first_name" id="inputfname" placeholder="First Name" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Last Name</label>
				<div class="controls">
				  <input class="span3"  type="text" name="last_name" id="inputlname" placeholder="Last Name" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="email" name="email" id="inputEmail1" placeholder="Email" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" class="span3"  name="password"id="inputPassword1" placeholder="********" required>
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Submit</button>
				</div>
			  </div>
			</form>
		</div>
		</div>
  
@endsection