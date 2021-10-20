<?php

include '../../include.php';
$a=$_POST['vtype'];
$b=$_POST['model'];
$c=$_POST['price'];
$d=$_POST['color'];
// die();

// $u=$_SESSION['name'];

$sel="SELECT * FROM `vehicle` where modle_no='".$_POST['model']."'";


$res=mysqli_query($con,$sel);
if(mysqli_num_rows($res) == 0)
{
$q="INSERT INTO `vehicle` (`v_type`, `modle_no`, `price`, `color`, `status`) VALUES ('$a', '$b', '$c', '$d', '".$_POST['status']."')";

mysqli_query($con,$q);

// echo "registered succesfully";
    session_start();
	$_SESSION['reg'] = 'customer added succesfully.....';
	header('location: vehicle_list.php');
}
else{
    // echo '<script language="javascript">document.location.href="add_cust.php"</script>';
   
}
?>



?>