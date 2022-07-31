<header class="header-area">

    <!-- ***** Top Header Area ***** -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Top Header Content -->
                        <div class="top-header-meta">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: naturescart@gmail.com</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: 9876543278</span></a>
                        </div>

                        <!-- Top Header Content -->
                        <div class="top-header-meta d-flex">

                            @if(Session()->has('user'))
                            <!-- Logout -->
                            <div class="logout">
                                <a href="{{route('logoutuser')}}"><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a>
                            </div>
                            @else
                            <!-- Login -->
                            <div class="login">
                                <a href="{{url('login')}}"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                            </div>

                            <!-- signup -->
                            <div class="signup">
                                <a href="{{url('signup')}}"><i class="fa fa-user" aria-hidden="true"></i> <span>Sign Up</span></a>
                            </div>

                            @endif
                            <!-- Cart
                        <div class="cart">
                            <a href="cartlist"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity"></span></span></a>
                        </div>  -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ***** Navbar Area ***** -->
    <div class="alazea-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="alazeaNav">
                    <!-- Nav Brand -->
                    <a href="index" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>


                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">


                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Navbar Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{url('index')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('view')}}">Shop</a> </li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                            </li>
                            </ul>
                            <!-- Search Icon -->
                            <div id="searchIcon">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                        <!-- Navbar End -->
                    </div>
                </nav>

                <!-- Search Form -->
                <div class="search-form">
                    <form action="search" class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" name="query" class="form-control search-box" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <!-- Close Icon -->
                    <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->
    <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">

    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->