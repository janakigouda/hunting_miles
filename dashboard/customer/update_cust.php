<?php
include('../includes/header.php');
include('../includes/navbar.php');

include '../../include.php';
$ans = $_GET['ans'];
?>

<div class="text-center" id="module_name">
    <h4>Update Employee</h4>
</div>
<?php

// if(isset($_REQUEST['update']))
// {
$q = "SELECT * FROM `customer` where email='$ans' ";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    
     while( $row = mysqli_fetch_assoc($r))
     {
?>
<div class="container">
  <form class="form-inline" action="" method="POST">
    <div class="form-group col-6" id="group">
        <label for="name">Customer Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter name" id="name" name="name" value="<?php echo $row['c_name']; ?>" readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="email">Email:</label>
        <input type="email" class="form-control col-9" placeholder="Enter email" id="email" name="email" value="<?php echo $row['email']; ?>" readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="pan">Pan-card No:</label>
        <input type="text" class="form-control col-9" placeholder="Enter pan-card number" id="pan" name="pan" value="<?php echo $row['pancard']; ?>" readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="phone">Contact:</label>
        <input type="text" class="form-control col-9" placeholder="Enter phone number" id="phone" name="phone" value="<?php echo $row['contact']; ?>">
    </div><br>
    <div class="form-group col-6" id="group">
        <label for="address">Address:</label>
        <input type="text" class="form-control col-9" placeholder="Enter address" id="address" name="address" value="<?php echo $row['address']; ?>">
    </div>
    <div class="form-group col-6" id="group">
        <label for="city">City:</label>
        <input type="text" class="form-control col-9" placeholder="Enter city" id="city" name="city" value="<?php echo $row['city']; ?>">
    </div>
    <div class="form-group col-6" id="group">
        <label for="state">State:</label>
        <input type="text" class="form-control col-9" placeholder="Enter state" id="state" name="state" value="<?php echo $row['state']; ?>">
    </div>
    <div class="form-group col-6" id="group">
        <label for="status">Customer Status:</label>
        <select id="status" class="form-control col-9" name="status" value="<?php echo $row['status']; ?>">
            <option value="">select status</option>
            <option value="enquiry">Enquiry</option>
            <option value="booking">Booking</option>
        </select>
    </div>
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
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $status=$_POST['status'];
 $pan=$_POST['pan'];

    // $x="UPDATE  `register` SET `name` = '$user', `email` =  '$email',`contact` =  '$contact',`company` =  '$company',`designation` =  '$designation',`batch` =  '$batch',`current_place` =  '$current_place'
    //    WHERE  `name` ='$user' LIMIT 1" ;

$x="UPDATE `customer` SET  `contact` = '$phone', `address` = '$address', `city` = '$city', `state` = '$state',`status`='$status' WHERE email='$email'";

    $res=mysqli_query($con,$x);

    // header('location:udash.php');
    // }
    // else{ echo "error"; }    
    echo '<script language="javascript">document.location.href="cust_list.php"</script>';
}

else 
{
//   echo "error";
}

include('../includes/footer.php');

?>