<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
@if(Auth::user())

	<div class="span6">Welcome!<strong> {{Auth::user()->name}}</strong></div>

	@else
	<div class="span6">Welcome!<strong> Please Login</strong></div>
	@endif
	
	<div class="span6">
	<div class="pull-right">
		
		<a href="{{route('cart')}}"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" ><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<!-- <form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" /> -->
		  
		  <button type="submit" id="submitButton" class="btn btn-primary" style="margin-left:60px;">Made with Love By Harsh Gopal & Sandy Guided By Ankur Mittal Sir</button>
		  <!-- <button type="submit" id="submitButton" class="btn btn-primary">Enjoyed Working in this project</button> -->
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="{{route('specialOffer')}}">Specials Offer</a></li>
	 <li class=""><a href="{{route('delivery')}}">Delivery</a></li>
	 <li class=""><a href="{{route('contact')}}">Contact</a></li>
	 <li class="">
		@if(Auth::user())
	 <a href="{{route('user_logout')}}" ><span class="btn btn-large btn-success">Logout</span></a>
	 @else
	 <a href="{{route('user_login')}}" ><span class="btn btn-large btn-success">Login</span></a>
	 @endif
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->