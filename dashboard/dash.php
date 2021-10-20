<?php 
session_start();
$_SESSION['email'];
if($_SESSION['email']=="")
{
    header("location:../index2.html");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hunting Miles</title>
    <link rel="icon" href="../images/jlogo.png" type="image/x-icon">
    <!-- Bootstrap CSS CDN -->
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css2/style4.css">

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Hunting Miles</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#">
                        <i class="fa fa-tachometer"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#employee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa fa-user-circle-o" aria-hidden="true"></i>
                        Employee
                    </a>
                    <ul class="collapse list-unstyled" id="employee">
                        <li>
                            <a href="Employee/add_employee.php"><i class="fa fa-address-card" aria-hidden="true"></i>Add Employee</a>
                        </li>
                        <li>
                            <a href="Employee/employee_list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Employees-list</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-users"></i>
                        Customer
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="customer/add_cust.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>Add Customer</a>
                        </li>
                        <li>
                            <a href="customer/cust_list.php"><i class="fa fa-list" aria-hidden="true"></i>Customer-list</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#vehicle" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-list"></i>
                        Vehicle
                    </a>
                    <ul class="collapse list-unstyled" id="vehicle">
                    <li>
                        <a href="vehicle/add_2_wheeler.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>Add-2-wheeler</a>
                    </li>
                    <li>
                        <a href="vehicle/add_4_wheeler.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>Add-4-wheeler</a>
                    </li>
                        <li>
                            <a href="vehicle/vehicle_list.php"><i class="fa fa-list" aria-hidden="true"></i>Vehicle-list</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="booked_v/booked_vehicle.php">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                        Booked-Vehicles
                    </a>
                </li>
                <li>
                    <a href="sold_v/sold_vehicle.php">
                        <i class="fa fa-outdent"></i>
                        Sold-Vechicles
                    </a>
                </li>
                <li>
                <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-asl-interpreting"></i>
                    Services
                </a>
                <ul class="collapse list-unstyled" id="services">
                   <li>
                        <a href="services/free.php"><i class="fa fa-heart" aria-hidden="true"></i>Free Services</a>
                    </li>
                    <li>
                        <a href="services/paid.php"><i class="fa fa-credit-card" aria-hidden="true"></i>Paid Services</a>
                    </li>
                    <li>
                        <a href="services/warrenty.php"><i class="fa fa-star" aria-hidden="true"></i>Warrenty Services</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#spare" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-wrench"></i>
                    Spare-Parts
                </a>
                <ul class="collapse list-unstyled" id="spare">
                   <li>
                        <a href="spare/consumable.php"><i class="fa fa-cogs" aria-hidden="true"></i>Consumables</a>
                    </li>
                    <li>
                        <a href="spare/run.php"><i class="fa fa-cog" aria-hidden="true"></i>Running</a>
                    </li>
                    <li>
                        <a href="spare/wear.php"><i class="fa fa-chevron-right" aria-hidden="true"></i>Wear & Tear</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-flag"></i>
                    Reports
                </a>
                <ul class="collapse list-unstyled" id="report">
                    <li>
                        <a href="services/service.php"><i class="fa fa-asl-interpreting" aria-hidden="true"></i>Service report</a>
                    </li>
                    <li>
                        <a href="spare/spare.php"><i class="fa fa-wrench" aria-hidden="true"></i>Spare-Parts report</a>
                    </li>
                    <li>
                            <a href="Employee/employee_list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Employee report</a>
                    </li>
                    <li>
                        <a href="customer/cust_list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Customer report</a>
                    </li>
                    <li>
                        <a href="vehicle/vehicle_list.php"><i class="fa fa-list" aria-hidden="true"></i>Vehicle report</a>
                    </li>
                </ul>
            </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-toggle-on" aria-hidden="true"></i>
                        <span>Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="navbar-brand">
                        DASHBOARD
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow" id="admin">
              <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray small" id="admin1">
                  
               ADMIN
                  
                </span>
                <img class="img-profile rounded-circle" src="../images/pro2.png" width="30%">
              </a>
              <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="admin_profile.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../logout.php" id="logout">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        Logout
                        </a>
                    </div>
            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<!-- body -->

<?php
include '../include.php';
$result = mysqli_query($con,"select count(1) FROM employee");
$row = mysqli_fetch_array($result);
$total = $row[0];
// echo "Total rows: " . $total;

$q = mysqli_query($con,"select count(1) FROM customer");
$row1 = mysqli_fetch_array($q);
$total1 = $row1[0];
?>

<div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Employees</h4>
            <p><?php echo  $total ?></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Customers</h4>
            <p><?php echo  $total1 ?></p> 
          </div>
        </div>
</div>



<!-- end -->
        </div class="col-sm-12">
        <!-- include('graphs/graph.php'); -->
        <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Customer Satisfaction"
                },
                axisY: {
                    title: "Satisfied Customers",
                    includeZero: true,
                    suffix: "%"
                },
                data: [{
                    type: "stepArea",
                    markerSize: 5,
                    xValueFormatString: "YYYY",
                    yValueFormatString: "#,##0.##\"%\"",
                    dataPoints: [{
                        x: new Date(2015, 0),
                        y: 34
                    }, {
                        x: new Date(2016, 0),
                        y: 73
                    }, {
                        x: new Date(2017, 0),
                        y: 78
                    }, {
                        x: new Date(2018, 0),
                        y: 82
                    }, {
                        x: new Date(2019, 0),
                        y: 70
                    }, {
                        x: new Date(2020, 0),
                        y: 86
                    }]
                }]
            });
            chart.render();

        }
    </script>
    <div id="chartContainer" style="height: 370px; width:40%; position:absolute; margin-top:18rem; margin-left:18rem;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
<!-- <.....> -->


<!-- ....... -->
</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
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
                            <i class="fa fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fa fa-twitter white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fa fa-linkedin white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fa fa-instagram white-text"> </i>
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
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;">
                    <p style="color:white;">Hunting Miles Showroom Management</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;">
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
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:white;">
                    <p style="color:white;">
                        <i class="fa fa-home mr-3"></i> Fort Road ,Belgaum</p>
                    <p style="color:white;">
                        <i class="fa fa-envelope mr-3"></i>huntingmiles@gmail.com</p>
                    <p style="color:white;">
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>

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
</body>

</html>