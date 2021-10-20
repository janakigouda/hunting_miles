<?php 
session_start();
if($_SESSION['email']=="")
{
header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hunting Miles</title>
    <link rel="icon" href="images/jlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="css2/style1.css">
    <!-- Bootstrap CSS CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


</head>

<body>
    <!-- Nav Bar -->
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
                            <a href="logout.php" class="register_icon">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <hr>
<div class="detail_body">

<?php
$ans=$_SESSION['email'];
include 'include.php';

$q = "SELECT * FROM employee where email='$ans'";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
?>
<div class="text-center" id="module_name">
    <h4>Employee Details</h4>
</div>
<div class="container" id="detail">
  <div class="card col-lg-6 col-md-9 col-sm-12">
    <div class="card-body">
      <h4 class="card-title text-center">Name: <strong><?php echo $row['e_name'];?>
      <?php echo $row['e_lastname'];?></strong></h4><hr>
      <p class="card-text text-dark">Designation: <?php echo $row['designation']; ?></p>
      <p class="card-text text-dark">Email: <?php echo $row['email']; ?></p>
      <p class="card-text text-dark">Contact: <?php echo $row['contact']; ?></p>
      <p class="card-text text-dark">Education: <?php echo $row['education']; ?></p>
      <p class="card-text text-dark">Salary: <?php echo $row['salary']; ?></p>
      <p class="card-text text-dark">Address: <?php echo $row['address']; ?></p>
    </div>
  </div>
</div>

<?php
    }
}

?>
</div>
    <!-- footer part start-->
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark " style="background-color: #3282b8; color:white; ">

        <div style="background-color: #0f4c75; color:white; ">
            <div class="container ">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center ">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 ">
                        <h6 class="mb-0 ">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right ">

                        <!-- Facebook -->
                        <a class="fb-ic ">
                            <i class="fab fa-facebook-f white-text mr-4 "> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic ">
                            <i class="fab fa-twitter white-text mr-4 "> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic ">
                            <i class="fab fa-linkedin-in white-text mr-4 "> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic ">
                            <i class="fab fa-instagram white-text "> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5 ">

            <!-- Grid row -->
            <div class="row mt-3 ">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold ">Company name</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto " style="width: 60px; ">
                    <p>Hunting Miles Showroom Management</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold ">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto " style="width: 60px; ">
                    <p>
                        <a href="#! " style="color:white; ">Two wheelers</a>
                    </p>
                    <p>
                        <a href="#! " style="color:white; ">Four wheelers</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 ">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold ">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto " style="width: 60px; ">
                    <p>
                        <i class="fas fa-home mr-3 "></i> Fort Road ,Belgaum</p>
                    <p>
                        <i class="fas fa-envelope mr-3 "></i>huntingmiles@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3 "></i> + 01 234 567 88</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 " style="background-color: #0f4c75; color:white; ">© 2020 Copyright : AIJ
        </div>
        <!-- Copyright -->

    </footer>
    <!-- footer part end-->
</body>
</html>