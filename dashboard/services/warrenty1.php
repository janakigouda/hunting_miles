<?php
include '../../include.php';
$mname=$_POST['model'];
$ename=$_POST['ename'];
$vdate=$_POST['date'];
$warrenty=$_POST['wdate'];
$c_name=$_POST['cname'];
$c_email=$_POST['cemail'];
$amount=$_POST['amount'];
$q="SELECT * FROM customer c,vehicle v WHERE c_name='$c_name' AND email='$c_email' AND c.c_id=v.cust_id";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
        $c_id=$row['c_id'];
        $v_id=$row['v_id'];
    }
}

$x="INSERT INTO `services`(`service_type`, `model_no`, `visited_date`,`amount`,`warrenty_period`,`cust_id`, `vehicle_id`) 
    VALUES ('Warrenty','$mname','$vdate','$amount','$warrenty','$c_id','$v_id')";

    $res=mysqli_query($con,$x);

    echo '<script language="javascript">document.location.href="service.php"</script>';

?>