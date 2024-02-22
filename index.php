<?php

    include('include/header.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Elder Healthcare Home Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
          .carousel-item{
            width: 100%;
            max-height: 500px !important;
          }

          .grd .row{
            margin-top: -70px;
          }
            
        </style>
    </head>
    <body>
      <!-- SLIDER START -->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/bg-1.png">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/bg-2.png" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/bg-3.png">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <!-- SLIDER END > -->

      <div class="container">
        <div class="grd">
          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-sm-3 shadow-lg p-3 mb-5 bg-white rounded text-center">
              <img src="images/patient-1.png">            
              <p>IN PATIENT SERVICES</p>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-sm-3 shadow-lg p-3 mb-5 bg-white rounded text-center">
              <img src="images/patient-2.png">
              <p>OUT PATIENT SERVICES</p>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-sm-3 shadow-lg p-3 mb-5 bg-white rounded text-center">
              <img src="images/patient-3.png">
              <p>ACCIDENT & EMERGENCY SERVICES</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h2>Elder Care Facilities</h2>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-5 shadow-lg p-3 mb-5 bg-white rounded text-center">
            <img class="img-fluid" src="images/private ward.jpg">
            <h3>Semi Private Ward</h3>
            <p>A fully medically equipped room shared by two patients</p>
          </div>
          <div class="col-md-2">

          </div>
          <div class="col-md-5 shadow-lg p-3 mb-5 bg-white rounded text-center">
            <img class="img-fluid" src="images/General ward.png">
            <h3>General Ward</h3>
            <p>A fully medically equipped room shared by five patients</p>
          </div>
        </div>
      </div>
      <footer class="bg-primary text-center">
        @ elder healthcare services. All right receved
      </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>