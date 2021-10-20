<?php 
session_start();
if($_SESSION['email']=="")
{
    header("location:../index.php");
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
                        Employee-list
                    </a>
                    <ul class="collapse list-unstyled" id="employee">
                        <li>
                            <a href="Employee/add_employee.php"><i class="fa fa-address-card" aria-hidden="true"></i>Add Employee</a>
                        </li>
                        <li>
                            <a href="Employee/employee_list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Customer-list</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-users"></i>
                        Customer-list
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
                        Vehicle-list
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
                    <a href="#">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                        Booked-Vehicles
                    </a>
                </li>
                <li>
                    <a href="#">
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
                    <li>
                        <a href="#"><i class="fa fa-leaf" aria-hidden="true"></i>Future enhancement</a>
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
                        <a href="#"><i class="fa fa-asl-interpreting" aria-hidden="true"></i>Service report</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench" aria-hidden="true"></i>Spare-Parts report</a>
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



<?php
include '../include.php';

$q = "SELECT * FROM admin";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
?>
<div class="text-center" id="module_name">
    <h4>Admin Profile</h4>
</div>
<br>
<div class="container">
  <div class="card col-lg-6 col-md-9 col-sm-12">
    <div class="card-body">
      <h4 class="card-title text-center">Admin Name: <strong><?php echo $row['name']; ?></strong></h4><hr>
      <p class="card-text text-dark">Designation: <?php echo $row['designation']; ?></p>
      <p class="card-text text-dark">Email: <?php echo $row['email']; ?></p>
      <p class="card-text text-dark">Contact: <?php echo $row['contact']; ?></p>
      <p class="card-text text-dark">Education: <?php echo $row['education']; ?></p>
      <p class="card-text text-dark">Address: <?php echo $row['address']; ?></p>
      <a href="dash.php" class="btn btn-primary col-lg-3">Back</a>
      <a href="admin_update.php" class="btn btn-primary col-lg-3">Update</a>
    </div>
  </div>
</div>

<?php
    }
}
include('includes/footer.php');

?>