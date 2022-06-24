<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Website</title>

    <!-- Link our CSS file -->
    
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="myprofile.html">My Profile</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- student sEARCH Section Starts Here -->
    <section class="student-search text-center">
        <div class="container">
            
            <form action="student-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for student.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- student sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore student</h2>

            <a href="category-student.html">
            <div class="box-3 float-container">
            <img src="{{ url('images/dk.jpeg') }}" alt="dk" class="img-responsive img-curve">

                <h3 class="float-text text-white">CSE</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
            <img src="{{ url('images/dk.jpeg') }}" alt="dk" class="img-responsive img-curve">

                <h3 class="float-text text-white">CIVIL</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
            <img src="{{ url('images/dk.jpeg') }}" alt="dk" class="img-responsive img-curve">

                <h3 class="float-text text-white">IT</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>Designed By <a href="#">Dhiraj Kumar Yadav</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>