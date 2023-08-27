<!DOCTYPE html>
<html lang="en">



<?php 

session_start();
include "./include/connection.php";
include "./include/header.php";

if(isset($_POST['submit'])){
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);

  $sql="SELECT * FROM `patient_record` WHERE `pemail`='$email' and `password`='$password'";
  $run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);

if(@$fet['pemail']!=$email and @$fet['password']!=$password){
  echo "<script>alert('Your data has been wrong ')</script>";
}else{
  $_SESSION['email']=$email;
  $_SESSION['password']=$password;
  header("location:view-appointment.php");
  exit;
}

$dsql="SELECT * FROM `doctors-name` WHERE `demail`='$email' and `dpassword`='$password'";
  $drun=mysqli_query($conn,$dsql);
$dfet=mysqli_fetch_assoc($drun);

if(@$dfet['demail']!=$email and @$dfet['dpassword']!=$password){
  echo "<script>alert('Your data has been wrong ')</script>";
}else{
  $_SESSION['email']=$email;
  $_SESSION['password']=$password;
  header("location:index.php");
}
}

?>
<style>
  body{
    background-image: url(./include/pic1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
  .card {
    background-color: rgba(28, 40, 145, 0.25);
    
  }
  .form-group label{
    color:white;
  }
  </style>
<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="text-white">Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" name="password" class="control-label text-white">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small text-white">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-white">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook ">
                      <span class="fab fa-facebook bg-primary"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social  btn-twitter">
                      <span class="fab fa-twitter bg-info"></span> Twitter
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5 text-white text-center">
              Don't have an account? <a href="auth-register.php">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php
                   include "./include/footer.php";
                   ?>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>