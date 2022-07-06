<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                            </a>
                            <h3>Add User</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="enter your name">
                            <label for="floatingText">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="date" class="form-control" id="floatingPassword" placeholder="enter dob">
                            <label for="floatingPassword">date-of-birth</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="number" class="form-control" id="floatingPassword" placeholder="enter adhar number">
                            <label for="floatingPassword">Adharcard number</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="enter city name">
                            <label for="floatingPassword">City</label>
                        </div>
                        
                        <label for="state">State</label>
        <select id="state" name="state" required>
          <option value="karnataka">Karnataka</option>
          <option value="telangana">Telangana</option>
          <option value="haryana">Haryana</option>
          <option value="andhra pradesh">Andhra Pradesh</option>
        </select><br><br>

        <label for="country">Country</label>              
        <select id="country" name="country" required>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="india">India</option>
          <label for="country">Country</label>
        </select><br><br>
              
        <label for="floatingPassword">Mobile Number</label>
                            <input type="number" class="form-control" id="floatingPassword" placeholder="enter mobile number"><br><br>
                            
                       
                        
                        <label for="address" required>Address</label>
                        <textarea id="adress" name="address" placeholder="enter address" style="height:50px"></textarea><br><br>
                        
                       
                        <label for="address" required>Permant Addresss</label>
                         <textarea id="permant_address" name="permant_address" placeholder="enter your address" style="height:50px"></textarea><br><br>
                       
                        
                        <label for="martial_status" required>Martial Status</label><br><br>
                        <input type="radio" name="martial_status" value="unmarried">unmarried 
                        <input type="radio" name="martial_status" value="married">married <br><br>
                      
                        
                        <label for="gender" required>Gender</label><br><br>
                        <input type="radio" name="gender" value="male">male
                        <input type="radio" name="gender" value="female">female
                        <input type="radio" name="gender" value="others">others<br><br>
                        <label for="education">Education</label>              
        <select id="education" name="education" required>
          <option value="Electronics and Communication Engineering">Electronics And Communication Engineering</option>
          <option value="Mechanical Engineering">Mechanical Engineering</option>
          <option value="Civil Engineering">Civil Engineering</option>
          <option value="Computerscience Engineering">Computerscience Engineering</option>
          <option value="Aerospace Engineering">Aerospace Engineering</option>
        </select><br><br>
                            
                            <label for="floatingText">Year</label>
                            <input type="date" name="year">
                            
                      
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>