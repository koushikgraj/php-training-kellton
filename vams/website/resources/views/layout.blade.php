<html>
    <title>hello everone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <head>
        <body>
            <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="home">Home</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="profile">My Profile</a>
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
            <footer>
               
            </footer>
        </body>
    </head>
</html>