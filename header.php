<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="myscript.js"></script>
  <script src="login.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-default" style="background-image: linear-gradient(#cceeff, #e6ccff);padding: 20px;border-radius: 10px;">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Quiz App </a>
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class=""><a href="#">Home <span class="sr-only"></span></a></li>
                  <li><a class="nav-link" data-toggle="modal" data-target="#regsiterModal">Register</a></li>
                  <li><a class="nav-link" data-toggle="modal" data-target="#myModal">Login</a></li>
                  
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
    </header>
    
<div class="container">
 
 

  <!-- Login Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form>
            <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control">
            <br>
            <input type="password" id="password" placeholder="Enter your Password" class="form-control"> 
            <br>  
           
         </form>
        </div>
        <div class="modal-footer">
         
          <button type="submit" class="btn btn-primary" id="btnLogin">Submit</button>  
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Login Modal -->

  <!-- Register Modal -->
  <div class="modal fade" id="regsiterModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
          <form id="regForm"> 
            <input type="text" id="fname" name="fullname" placeholder="Please Enter your Full Name" class="form-control">
            <p class="hide alert alert-danger" id="fnerror">Please Enter the name</p>
            <br>
                <input type="email" id="email2" name="email2" placeholder="Please Enter your email" class="form-control">
                <p class="hide alert alert-danger" id="emerror">Please Enter the Email</p>
                <br>
                <lable style="font-size:x-large">Are you:</lable>
                <div class="radio-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Student">Student
                  </label>
                </div>
                <div class="radio-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optradio" value="Teacher">Teacher
                  </label>
                </div>
                <p class="hide alert alert-danger" id="terror">Please Select your role</p>
                <br>
                <input type="date" name="dob" id="dob" class="form-control">
                <p class="hide alert alert-danger" id="doberror">Please Enter your Date of birth</p>

                <br>
                <input type="password" id="password2" name="password2" minlength="8" class="form-control" placeholder="Password must be atlest 8 char long"> 
                <p class="hide alert alert-danger" id="passerror">Your Password must be 8 character long</p>

           
         </form>
        </div>
        <div class="modal-footer">
         
          <button type="submit" class="btn btn-primary" id="btnSubmit">Signup</button>  
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Register Modal -->
</div>
<main class="px-3">

  <div class="container-fluid">
      <div class="row">
          <div class="col-md-6 hero-content">
              <h1 class=" hero-title">The 100 % <br> engagement <br> platform</h1>
              <p class="hero-para">Find and Create free quizizz and <br> interactive lessons to engage any <br> learner.</p>
              <div class="row">
                <div class="col-md-6">
                  <button class="get-started-btn form-control" type="button">Get started</button>
                </div>
                <div class="col-md-6">
                  <button class="login-btn form-control" type="button">Log In</button>
                </div>
              </div>
          </div>
          <div class="col-md-6">
              <img src="https://cf.quizizz.com/img/mkt/1-HERO-Digital_Collage.png" alt="" aria-hidden="true" class="home-image">
          </div>
      </div>
  </div>


</main>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="background-color:#5d2057">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Quiz App
          </h6>
          <p>
          © 2021 Copyright: Quiz App
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    Developed by:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Syed Sheeraz Zaidi</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>
