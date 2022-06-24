<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">    
<head>
    <body>


<!-- header starts from here -->
<div class="header">
@section('header')
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Wel-Come</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <!-- when user will click on user list
        the list will go in url. so for that url 
        i created the route. where for that url it will 
        call the controllers particular function.
        and in that functhion, return the view of userlist page.
        so user will go in user list page when he click on user list, -->
        <a class="nav-link" href="home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="myprofile">My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
@show
</div>

<!-- header ends from here -->






<!-- content starts from here -->
<div class="content">
@section('content')
<h1>this is my content</h1>
@show
</div>

<!-- content ends from here -->







<!-- footer starts from here -->
<div class="footer">
@section('footer')
<!-- footer Section Starts Here -->
<section class="footer">
        <div class="container text-center">
            <p>Designed By <a href="#">Dhiraj Kumar Yadav</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

@show
</div>

<!-- footer ends from here -->






   </body>
 </html>