<?php
include '../../include.php';
$mname=$_POST['mname'];
$ename=$_POST['ename'];
$vdate=$_POST['date'];

$c_name=$_POST['cname'];
$c_email=$_POST['cemail'];

$q="SELECT * FROM customer c,vehicle v WHERE c_name='$c_name' AND email='$c_email' AND c.c_id=v.cust_id";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
        $c_id=$row['c_id'];
        $v_id=$row['v_id'];
    }
}

$x="INSERT INTO `services`(`service_type`, `model_no`, `visited_date`,`cust_id`, `vehicle_id`) 
    VALUES ('Free','$mname','$vdate','$c_id','$v_id')";

    $res=mysqli_query($con,$x);

    echo '<script language="javascript">document.location.href="service.php"</script>';

?>