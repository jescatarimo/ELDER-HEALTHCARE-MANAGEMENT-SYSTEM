<!DOCTYPE html>
<html>
    <head>
        <title>ELDER HEALTHCARE</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <!-- links -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/css/jquery.timepicker.css">

    

    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- links -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">



    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-info bg-info">
    <div class="container">
        <div class="row w-100">
            <div class="col">
                <h5 class="text-white ml-3">ELDER HEARTHCARE</h5>
            </div>
            <div class="col-auto">
                <ul class="navbar-nav">

                    <?php

                        if(isset($_SESSION['admin'])){
                            $user = $_SESSION['admin'];
                            echo'
                            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
                            <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>';
                        }
                    else{
                        echo'
                    <li class="nav-item"><a href="admin/adminlogin.php" class="nav-link text-white">Admin</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Doctor</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Patient</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Family member</a></li>
                    ';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-auto">
                <a href="#">
                    <button class="btn btn-success border-start border-dark mr-3 bg-dark text-white">Sign Up</button>
                </a>
            </div>
        </div>
    </div>
</nav>

    <!-- navbar end -->

    










        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>

        <script src="assets/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/jquery.timepicker.min.js"></script>
        
        <script src="assets/js/jquery.animateNumber.min.js"></script>
        

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="assets/js/google-map.js"></script>

        <script src="assets/js/main.js"></script>
    </body>
</html>