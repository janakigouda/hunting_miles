<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hunting Miles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/jlogo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css2/style1.css">
    <link rel="stylesheet" href="css2/style.css">
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<header class="header_area">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 col-xl-6">
                        <div id="logo">
                            <a href="index2.html" class="navbar-brand"><img id="icon" src="images/jlogo.png" alt="" title="" /> Hunting Miles Showroom</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-6" id="nav1">
                        <div class="sub_header_social_icon float-right">
                            <a href="index2.html" class="register_icon">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
<div class="sign-up-form">
    <img src="images/img17.jpg" alt="back_img" style="width:100%;height:40rem"; id="logo_emp_img">
    <div class="content">
        <h3><i class="fa fa-user"></i> <br>Admin Login</h3>
        <hr>
        <form method="POST" action="login1.php">
            <label>Enter Email Address:</label>
            <input type="email" placeholder=" Enter your Email" name="email">
            <label>Enter Password:</label>
            <input type="password" placeholder="Enter your Password" name="password"  id="myInput"><br>
            <input type="checkbox" onclick="myFunction()"> Show Password<br>
            <button type="submit" class="btn btn-primary">Login</button>
            <hr>
        </form>
    </div>
    </div>
    <script>
    function myFunction() {
    var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>
<?php
if(isset($_SESSION['msg']))
 {
     echo '<p class="message"> <font size="5" color="White"> <center> <i>';
     echo $_SESSION['msg'];
     echo "</i></center></font></p>";
     unset($_SESSION['msg']);
 }
?>
</html>
<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>



    <!-- footer part start-->
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark" style="background-color: #3282b8; color:white;">

        <div style="background-color: #0f4c75; color:white;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Company name</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Hunting Miles Showroom Management</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!" style="color:white;">Two wheelers</a>
                    </p>
                    <p>
                        <a href="#!" style="color:white;">Four wheelers</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> Fort Road ,Belgaum</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>huntingmiles@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color: #0f4c75; color:white;">© 2020 Copyright : AIJ
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    </footer>
    <!-- footer part end-->
</body>

</html>