@extends('front.layout.layout')
@section('content')
<div class="span4" style="padding-left:250px;">
			<div class="well">
			<h3>PAYMENT METHOD</h3><br>
			Cash On Delivery Method Only Available<br><br><br>
			<form action="{{route('booked.store')}}" method="post">
				@csrf
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Name</label>
				<div class="controls">
				  <input class="span3" type="text" name="name" id="inputEmail0" placeholder="Enter your name" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Phone Number</label>
				<div class="controls">
				  <input class="span3" type="text" name="phone_number" id="inputEmail0" placeholder="Enter your phone" required>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Address</label>
				<div class="controls">
				  <input class="span3" type="text" name="address" id="inputEmail0" placeholder="Enter your address" required>
				</div>
			  </div>
			  <h5><input type="checkbox" required>Cash On delivery</h5>
			  <div class="controls">
			  <a href="{{route('user_thanku')}}"><button type="submit" class="btn block">CONTINUE</button></a>
			  </div>
			</form>
			
		</div>
		</div>
		<a href="{{route('home')}}"><button type="submit" class="btn block">GO BACK</button></a>

@endsection