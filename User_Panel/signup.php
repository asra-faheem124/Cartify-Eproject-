<?php
include("shared/_nav.php");
include("shared/_connection.php");

if(isset($_POST['submit'])) {
  $username = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users(user_name, user_email, user_password, user_role_id)VALUES('{$username}', '{$email}', '{$password}', 2)";
  $run = mysqli_query($conn,$sql) or die("Query Unsuccessful");
  if ($run) {
    echo "<script>alert('You are registered.')</script>";
    header("Location:login.php");
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

    <!-- ***** Signup Area Starts ***** -->
    <div class="contact-us">
        <div class="container">
            <div class="row login-form">
                    <div class="section-heading mt-5">
                        <h2>Signup</h2>
                        <span>Join Us and Enjoy Exclusive Products on Your Favorite Finds!</span>
                    </div>
                    </div>
                    <form id="contact" action="" method="post">
                        <div class="row login-row">
                            <!-- username -->
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="name" type="text" id="username" placeholder="Enter your Username" required="">
                              <i><p id="user-error"></p></i>
                            </fieldset>
                          </div>
                           <!-- email -->
                           <div class="col-lg-6">
                            <fieldset>
                              <input name="email" type="email" id="email-signup" placeholder="Enter Your Email" required="">
                              <i><p id="email-error"></p></i>
                            </fieldset>
                          </div>
                          <!-- password -->
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="password" type="password" id="password" placeholder="Enter Your Password" required="">
                              <i><p id="pass-error"></p></i>
                            </fieldset>
                          </div>
                          <!-- submit -->
                          <div class="col-lg-12 mt-3">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button" name="submit" onclick="signup()"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </form>
        </div>
    </div>
    <!-- ***** Signup Area Ends ***** -->
<?php
include("shared/_foot.php");
?>