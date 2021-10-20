<?php

include '../../include.php';
$a=$_POST['fname'];
$b=$_POST['email'];
$c=$_POST['contact'];
$d=$_POST['address'];
$e=$_POST['city'];
$f=$_POST['state'];
$g=$_POST['status'];
$h=$_POST['pan'];
$i=$_POST['cid'];
// die();

// $u=$_SESSION['name'];

$sel="SELECT * FROM `customer` where email='".$_POST['email']."' AND c_name='".$_POST['fname']."'";


$res=mysqli_query($con,$sel);
if(mysqli_num_rows($res) == 0)
{
$q="INSERT INTO `customer`(`cust_id`,`c_name`, `email`, `contact`, `address`,`pancard`,`status`, `city`, `state`) VALUES ('$i','$a','$b','$c','$d','$h','$g','$e','$f')";

mysqli_query($con,$q);

// echo "registered succesfully";
    session_start();
	$_SESSION['reg'] = 'customer added succesfully.....';
	header('location: cust_list.php');
}
else{
    echo '<script language="javascript">document.location.href="add_cust.php?ans=The customer is already added ..."</script>';
   
}
?>



?>