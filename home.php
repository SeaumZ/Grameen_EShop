<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSE482</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/media.css">
<link rel="stylesheet" href="css/responsive.css">

</head>
<body>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
   <script src="js/suggestions.js"></script>
<nav class="navbar navbar-expand-lg bg-info fixed-top navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/logo.png" alt=" " >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white "href="products/index.php?page=products&p=3">Grameen Products </a>
          </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="products/index.php?page=products&p=2" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Grameen Accesories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item" href="products/index.php?page=products&p=2">Grameen Item's </a></li>
            
          </ul>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white "href="products/index.php">New Arrival </a>
          </li>

        
<li class="nav-item">
          <a class="nav-link text-white" href="products/index.php?page=cart">Cart</a>
        </li>


<li class="nav-item">
          <a class="nav-link text-white"  href="logout.php">Logout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white "href="signu.html">Sign Up</a>
        </li>

       
      
    </div>
  </div>
</nav>


<section id="home">
  <div class="container">
    <div class="row">
      <div class="home-centre">
        <h1> Shop With Us</h1>
        <p>Experience shopping like never before</p>
<div class="home-btn">
          <a href="Search/search.html" class="btn btn-shop"> Shop Now </a>
          <a href="video/video.html" class="btn btn-member">Live Demo</a>
          
        </div>
      </div>
    </div>
  </div>
</section>




</body>




</html>

