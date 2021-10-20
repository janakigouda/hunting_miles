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
$q = "SELECT * FROM customer c,vehicle v where v.v_id='$ans' AND c.c_id=v.cust_id";
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
        <input type="text" class="form-control col-9"  id="name" name="name" value="<?php echo $row['c_name']; ?>" readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="vmodel">Model Name:</label>
        <input type="email" class="form-control col-9"  id="vmodel" name="vmodel" value="<?php echo $row['model']; ?>" readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="vtype">Vehicle Type:</label>
        <input type="text" class="form-control col-9"  id="vtype" name="vtype" value="<?php echo $row['vehicle_type']; ?>" readonly>
    </div>
    
    <!-- <div class="form-group col-6" id="group">
        <label for="v_status">Vehicle Status:</label>
        <input type="text" class="form-control col-9" placeholder="Change the vehicle status" id="v_status" name="v_status" >
    </div> -->

    <div class="form-group col-6" id="group">
        <label for="v_status">Vehicle Status:</label>
        <select id="v_status" class="form-control col-9" name="v_status" >
            <optionvalue="<?php echo $row['v_status']; ?>">select status</option>
            <option value="booked">Booked</option>
            <option value="sold">Sold</option>
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

 $status=$_POST['v_status'];

    // $x="UPDATE  `register` SET `name` = '$user', `email` =  '$email',`contact` =  '$contact',`company` =  '$company',`designation` =  '$designation',`batch` =  '$batch',`current_place` =  '$current_place'
    //    WHERE  `name` ='$user' LIMIT 1" ;

$x="UPDATE `vehicle` SET  `v_Status` = '$status' WHERE v_id='$ans'";

    $res=mysqli_query($con,$x);

    // header('location:udash.php');
    // }
    // else{ echo "error"; }    
    if($status=="sold"){
    echo '<script language="javascript">document.location.href="../sold_v/sold_vehicle.php"</script>';
    }
    else{
        echo '<script language="javascript">document.location.href="booked_vehicle.php"</script>';
    }
}

else 
{
//   echo "error";
}

include('../includes/footer.php');

?>