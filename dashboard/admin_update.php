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
    <link rel="stylesheet" href="css2/form.css">

    <!-- jquery files -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="jquery/formvalid.js"></script>
    

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

?>

<div class="text-center" id="module_name">
    <h4>Update Admin</h4>
</div>
<?php

// if(isset($_REQUEST['update']))
// {
$q = "SELECT * FROM `admin` ";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    
     while( $row = mysqli_fetch_assoc($r))
     {
?>
<div class="container">
  <form class="form-inline" action="" method="POST">
    <div class="form-group col-6" id="group">
        <label for="fname">Admin Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter full name" id="name" name="fname" value="<?php echo $row['name']; ?>" readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="email">Email:</label>
        <input type="email" class="form-control col-9" placeholder="Enter email" id="email" name="email" value="<?php echo $row['email']; ?>" readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="designation">Designation:</label>
        <input type="text" class="form-control col-9" placeholder="Enter designation" id="designation" name="designation" value="<?php echo $row['designation']; ?>">
        <p id="p1"></p>
    </div>
    <div class="form-group col-6" id="group">
        <label for="education">Education:</label>
        <input type="text" class="form-control col-9" placeholder="Enter education" id="education" name="education" value="<?php echo $row['education']; ?>">
        <p id="p2"></p></div>
    <div class="form-group col-6" id="group">
        <label for="contact">Contact:</label>
        <input type="number" class="form-control col-9" placeholder="Enter phone number" id="contact" name="contact" value="<?php echo $row['contact']; ?>">
        <p id="p3"></p></div>
    <div class="form-group col-6" id="group">
        <label for="address">Address:</label>
        <input type="text" class="form-control col-9" placeholder="Enter address" id="address" name="address" value="<?php echo $row['address']; ?>">
        <p id="p4"></p></div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary col-4 group" name="submit" id="group" value="update">Update</button>
    </div>
  </form>
</div>

<?php
    }

}
else{
    echo "error 1";
}

// }

if(isset($_REQUEST['submit']))
{ 

 $name=$_POST['name'];
 $email=$_POST['email'];
 $designation=$_POST['designation'];
 $education=$_POST['education'];
 $contact=$_POST['contact'];
 $address=$_POST['address'];

    // $x="UPDATE  `register` SET `name` = '$user', `email` =  '$email',`contact` =  '$contact',`company` =  '$company',`designation` =  '$designation',`batch` =  '$batch',`current_place` =  '$current_place'
    //    WHERE  `name` ='$user' LIMIT 1" ;

$x="UPDATE `admin` SET  `designation` = '$designation',  `contact` = '$contact', `education` = '$education', `address` = '$address' WHERE email='$email'";

    $res=mysqli_query($con,$x);

    // header('location:udash.php');
    // }
    // else{ echo "error"; }    
    echo '<script language="javascript">document.location.href="admin_profile.php"</script>';
}

else 
{
//   echo "error";
}

include('includes/footer.php');

?>