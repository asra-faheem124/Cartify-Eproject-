<?php
include("shared/_nav.php");
include("shared/_connection.php");

session_start();
if(isset($_POST['loginBtn'])) {
  $user_email = $_POST['email'];
  $user_password = $_POST['password'];
  $sql = "SELECT* FROM users WHERE user_email = '{$user_email}' AND user_password = '{$user_password}'";
  $run = mysqli_query($conn,$sql) or dir ("Query Unsuccessful");
  $row = mysqli_fetch_assoc($run);
  if(mysqli_num_rows($run) > 0) {
    if($row['user_role_id'] == 1) {
      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['user_email'] = $row['user_email'];
      $_SESSION['user_password'] = $row['user_password'];
      $_SESSION['user_role_id'] = $row['user_role_id'];
      header("../AdminPanel/index.php");
    } else {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['user_email'] = $row['user_email'];
      $_SESSION['user_password'] = $row['user_password'];
      $_SESSION['user_role_id'] = $row['user_role_id'];
      header("Location:index.php");
    }
  } else {
    echo "<script> alert ('Login Denied: Invalid Email or Password.') </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Hexashop Ecommerce HTML CSS Template</title>

  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

  <link rel="stylesheet" href="assets/css/templatemo-hexashop.css" />

  <link rel="stylesheet" href="assets/css/owl-carousel.css" />

  <link rel="stylesheet" href="assets/css/lightbox.css" />
  <!--

TemplateMo 571 Hexashop


-->
</head>

<body>

<!-- ***** Login Area Starts ***** -->
<div class="contact-us ">
        <div class="container">
            <div class="row login-form">
                    <div class="section-heading mt-5">
                        <h2>Login</h2>
                        <span>Welcome Back! Discover New Arrivals and Exclusive Offers!</span>
                    </div>
                    </div>
                    <form id="contact" action="" method="post">
                        <div class="row login-row">
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="email" type="email" id="name" placeholder="Enter your email" required="">
                              <i><p id="user-error"></p></i>
                            </fieldset>
                          </div>
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="password" type="password" id="password" placeholder="Enter Your Password" required="">
                              <i><p id="pass-error"></p></i>
                            </fieldset>
                          </div>
                          <div class="col-lg-12 mt-3">
                            <fieldset>
                              <button type="submit" id="form-submit" name="loginBtn" onclick="login()" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </form>
        </div>
    </div>
    <!-- ***** Login Area Ends ***** -->
<?php
include("shared/_foot.php");
?>