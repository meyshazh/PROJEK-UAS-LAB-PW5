<?php
    session_start();
    include "connection.php";
    if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit();
    }
    if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PRODUCT</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>
    
    <!-- Kit Code Font Awesome-->
    <script src="https://kit.fontawesome.com/4971e23d94.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="justify-content:space-between">
    <div class="container">
      <div class="row align-items-start">
        <div class="col">
          <img src="logo.png" width="100" height="50" class="d-inline-block align-top" alt="">
        </div>
      </div>
      <div class="row align-items-end">
        <div class="col">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data_produk.php">Data Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

<!--Start Carousel-->
<div class="container">
      <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <!--Use Button-->
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="avoskin.jpg" class="d-block w-fluid mt-5" alt="" style="width:1100px; height: 400px;">
          </div>
          <div class="carousel-item">
            <img src="a5.jpg" class="d-block w-fluid mt-5" alt="" style="width:1100px; height: 400px;">
          </div>
          <div class="carousel-item">
            <img src="a2.jpg" class="d-block w-fluid mt-5" alt="" style="width:1100px; height: 400px;">
          </div>
          <div class="carousel-item">
            <img src="a4.jpg" class="d-block w-fluid mt-5" alt="" style="width:1100px; height: 400px;">
          </div>
          <div class="carousel-item">
            <img src="a3.jpg" class="d-block w-fluid mt-5" alt="" style="width:1100px; height: 400px;">
          </div>
              
        </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
    </div>
    <!--End Carousel-->

    <!--Use Card/Grid-->
      <!--Start Card-->
      <div class="container">
      <div class="judul-produk" style="padding: 5px 10px;">
      <br>
            <h5 class="text-center" style="margin-top: 5px;">Rangkaian Spesial</h5>
        </div>

        <div class="container-color" style="text-align: center;">
              <p>Produk terbaik Avoskin yang diformulasikan dari bahan alami sehingga dapat memberikan manfaat optimal untuk kulit Anda</p>
        </div>

      <div class="card-group mt-4">
      <div class="card">
        <img src="a5.jpg" class="card-img-top" alt="...">
      </div>
      <div class="card">
        <img src="a3.jpg" class="card-img-top" alt="...">
      </div>
      <div class="card">
        <img src="a2.jpg" class="card-img-top" width="200px" alt="...">
      </div>
      </div>
    
      <!--End Card-->
  
      <!--Start Footer-->
      <footer class="bg-light p-3 mt-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                  <h4>Follow Us</h4>
                  <a class="btn btn-floating m-1" href="https://www.facebook.com/AvoskinID/">
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a class="btn btn-floating m-1" href="https://www.instagram.com/avoskinbeauty/">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                  <a class="btn btn-floating m-1" href="https://www.youtube.com/c/avoskinbeauty">
                    <i class="fa-brands fa-youtube"></i>
                  </a>
                    
                <br>
                <p>Copyright © 2022, AVOSKIN All rights reserved</p>
                </div>
            </div>
        </div>
      </footer>
      <!--End Footer-->

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>