<html>
    <title>hello everone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <head>
    
        <body>
       
            <header>
            
           
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class=" navbar" id="navbarNav">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="home">Home</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contects">Contact</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="myprofile">MY Profile</a>
      </li> 
     
      <!-- @if(Session::get('form'))
      <a class="nav-link" href="#">WElCOME,{{Session::get('form')}}</a>
      @else
      <a class="nav-link" href="register">register</a>
      <a class="nav-link" href="login">login</a>
      @endif -->

      
    </ul>
  </div>
</nav>
</header>

<div>
            @yield('content') 
            </div>

 
            
            
        </body>
     <!-- <footer class="bg-light text-center text-lg-start">
  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">laravelwebsite.com</a>
  </div>

</footer>    -->
    </head>
</html>