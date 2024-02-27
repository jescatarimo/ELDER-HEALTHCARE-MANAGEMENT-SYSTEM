<?php

    session_start();

    include("../include/connection.php");

    if(isset($_POST['submit'])){
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        $error = array();

        if(empty($Username)){
            $error['admin'] = "Enter Username";
        } else 
        if(empty($Password)){
            $array['admin'] = "Enter Password";
        }

        if(count($error)==0){
            $query = "SELECT * FROM `admin` WHERE Username = '$Username' AND Password = '$Password'";

            $result = mysqli_query($con,$query);

            if(mysqli_num_rows($result) == 1){
                echo "<script>alert('You have login as an admin')</script>";

                $_SESSION['admin'] = $Username;

                header("Location:index.php");
                exit();
            }else{
                echo "<script>alert('Invalid Username or Password')</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login Page</title>
    </head>
    <body style="background-image: url(../images/hosp-bg.webp); repeat: no repeat; background-size:cover;">
        <?php
            include("../include/header.php");
        ?>

        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron">
                    <img src="../images/admin login.jpg" class="col-md-12 pb-3"> 
                    <form method="POST">

                        <div>
                            <?php
                            
                                if(isset($error['admin'])){
                                    $sh = $error['admin'];

                                   $show = "<h4 class='alert alert-danger'>$sh</h4>";

                                } else{
                                    $show = "";
                                }

                                echo $show;

                            ?>
                        </div>

                        <div class="form-group">
                            <input type="text" name="Username" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="Password" class="form-control" autocomplete="off" placeholder="Enter Password">
                        </div>
                        <input type="submit" name="submit" value="Login" class="btn btn-info">
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </body>
</html>