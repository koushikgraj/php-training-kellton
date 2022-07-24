<!DOCTYPE html>
<html lang="en">

<head>
  <title>MidKit &mdash; HealthCare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="{{asset('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
  
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


  <link rel="stylesheet" href="{{asset('css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="" class="js-logo-clone"><h1><strong class="text-primary">Mid</strong>Kit</h1></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class=""><a href="home">Home</a></li>
                <li><a href="store">Store</a></li>
                @if(session('user_id') =='1')
                <li class="has-children">
                  <a href="#">Category</a>
                  <ul class="dropdown">
                    <li><a href="category/addcategory">Add Category</a></li>
                    <li><a href="category/list">List of Category</a></li>
                    
                  </ul>
                </li>                        
                @endif
                <!-- @if(session('user_id') !='1')
                <li><a href="category/list">New Categories</a></li>
                @endif -->

                <li><a href="{{url('admin/logout')}}">Logout</a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>
                <li><a href="{{url('admin/logout')}}"></a></li>

                <li class="has-children">
                   <i class="icon-id-card">{{session('user_first_name')}}</i>
                    @if(session('user_id') =='1')
                  <ul class="dropdown">
                   <li>Admin</li>
                   @else
                  <ul class="dropdown">
                  <li>User</li>
                </li>
                @endif
                    <!-- <li><a href="category/addcategory"></a></li>
                    <li><a href="category/list">List of Category</a></li> -->
                    
                  </ul>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div>
   </div>
   @yield('content')

   
<div class="site-section bg-image overlay" style="background-image: url('{{asset('images/hero_bg_2.jpg')}}');">
      <div class="container">
        <div class="row justify-content-center text-center">
         <div class="col-lg-7">
           <h3 class="text-white">CASHBACK OFFER* UPTO ₹300</h3>
           <h5><p class="text-white">Limited time cashback offer on payment of ₹600 or more using Paytm wallet</p></h5>
         </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">Mail To <strong class="text-primary">MidKit</strong></h3>
              <ul class="list-unstyled">
                <li class="address">MidKit Internet Pvt Ltd. USA</li>
                <li class="phone"><a href="tel://23923929210">+32 9519 8605 18</a></li>
                <li class="email">mid.kit@domain.com</li>
              </ul>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">SOCIAL</h3>
            <ul class="list-unstyled">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">YouTube</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Registered Office Address</h3>
              <ul class="list-unstyled">
                <li class="address">MidKit Internet Pvt Ltd. M249, Rozok Colony, Erangle, BGMI Lite, USA</li>
                <li class="phone"><a href="tel://23923929210">+32 9519 8605 18</a></li>
                <li class="email">mid.kit@domain.com</li>
              </ul>
            </div>
  </div>

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>