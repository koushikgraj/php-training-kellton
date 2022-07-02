<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Website</title>

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
                        <a href="categories.html">About</a>
                    </li>
                    <li>
                        <a href="foods.html">My Profile</a>
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

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this Students Details form.</h2>

            <form action="index" method="get" class="order">
               
                    <legend>Students Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Enter Full Name" class="input-responsive" required>



                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Enter Email" class="input-responsive" required>

                    <div class="order-label">DOB</div>
                    <input type="date" name="date"><br>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="Enter Number" class="input-responsive" required>

                    

                    
                    <div class="order-label">Country</div>
                    <select class="select" name="country" id ="car">
          <option value="NO-country">Select Your Country</option>
          <option value="NO-country">INDIA</option>
          <option value="NO-country">NEPAL</option>
          <option value="NO-country">JAPAN</option>
          <option value="NO-country">US</option>
          <option value="NO-country">UK</option>
          </select>

          
          <div class="order-label">Address</div>
                    <textarea name="address" rows="2" placeholder="Street, City, Country" class="input-responsive" required></textarea>


                    <div class="order-label">Subject</div>
                    <input type="text" name="subject" placeholder="Enter Subject" class="input-responsive" required>


                    <div class="order-label">Message</div>
                    <input type="textarea" name="email" placeholder="Enter Message" class="input-responsive" required></textarea>


                    <input type="submit" name="submit" value="Confirm " class="btn btn-primary">
                    <input type="submit" name="submit" value="Reset" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- student sEARCH Section Ends Here -->

   

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>Designed By <a href="#">Dhiraj Kumar Yadav</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>