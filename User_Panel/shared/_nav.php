<?php
include("shared/_connection.php");
session_start();
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
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php">
              <img src="assets/images/art logo.png" height="180px" class="pb-5" />
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section">
                <a href="index.php" class="active">Home</a>
              </li>
              <li class="submenu">
                <a href="javascript:;">Categories</a>
                <ul>
                  <?php
                  $sql = "SELECT * FROM category";
                  $run = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_assoc($run)) {
                  ?>
                  <li><a href="products.php?getid = <?php echo $row ['category_id']?>"><?php echo $row['category_name']?></a></li>
                  <?php
                  }
                  ?>
                </ul>
              </li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <?php
              if(!isset($_SESSION['user_name'])){
              ?>
              <li><a href="login.php">Login</a></li>
              <li><a href="signup.php">Signup</a></li>
              <?php
              } else {?>
                <li><a href="login.php"><?php echo $_SESSION['user_name']?></a></li>
                <li><a href="logout.php">Logout</a></li>
              <?php
              }
              ?>
              <li><a href="add to cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
            <a class="menu-trigger">
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->