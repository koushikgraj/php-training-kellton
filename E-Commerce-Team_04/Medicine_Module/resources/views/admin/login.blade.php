<!DOCTYPE html>
<html lang="en">

<head>
  <title>MidKit &mdash; HealthCare</title>
  <meta charset="utf-4">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

  <body>
    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <span class="icon-close2"></span></a>
          
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="#" class="js-logo-clone"><strong class="text-primary">Mid</strong>Kit &mdash; <strong class="text-primary">HealthCare</strong></a>
            </div>
          </div>  
        </div>
      </div>
    </div>

          <div class="col-md-12">
    
            <form action="{{url('admin/auth')}}" method="post">
              @csrf
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-4">
                    <label for="c_fname" class="text-black">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="username" placeholder="Enter username" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-4">
                  <label for="c_fname" class="text-black">Passowrd <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_email" name="password" placeholder="Enter valid password" required>
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                    <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    </form>
<a href="admin/register"><div class="col-md-12">
<p>Create Account. New to MidKit?</p>

                  <div class="col-lg-2">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Create Account">
                    
                  </div>
                </div></a>
</body>

</html>