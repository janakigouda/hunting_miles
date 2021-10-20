<?php

include '../../include.php';
$a=$_POST['model'];
$b=$_POST['emission'];
$c=$_POST['milage'];
$d=$_POST['gear'];
$e=$_POST['abs'];
$f=$_POST['wheel'];
$g=$_POST['engine'];
$h=$_POST['date'];
$i=$_POST['fuel'];
$j=$_POST['tyre'];
$k=$_POST['price'];
$l=$_POST['color'];
$m=$_POST['status'];
$n=$_POST['chessis'];

 $c_name=$_POST['cname'];
 $c_email=$_POST['cemail'];

$q="SELECT * FROM customer WHERE c_name='$c_name' AND email='$c_email'";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
     $c_id=$row['c_id'];
     $m_cust_id=$row['cust_id'];
    }
}

// die();

// $u=$_SESSION['name'];

$sel="SELECT * FROM `vehicle` where chessis='".$_POST['chessis']."'";


$res=mysqli_query($con,$sel);
if(mysqli_num_rows($res) == 0)
{
$q="INSERT INTO `vehicle` (`vehicle_type`, `model`, `emissin_type`, `milege`, `gear_box`, `abs`, `wheel_type`, `engine`,`fuel_type`, `tyre_type`, `amount`, `color`, `v_status`, `chessis_no`, `cust_id`,`main_c_id`,`date`) 
    VALUES ('2-wheeler', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$i', '$j', '$k', '$l', '$m', '$n', '$c_id','$m_cust_id','$h')";




mysqli_query($con,$q);

echo "registered succesfully";
//     session_start();
	$_SESSION['reg'] = 'Vehicle added succesfully.....';
	header('location: vehicle_list.php');
}
else{
    echo '<script language="javascript">document.location.href="add_cust.php"</script>';
   
}
// ?>



