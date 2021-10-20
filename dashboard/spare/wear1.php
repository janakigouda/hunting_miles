<?php
include '../../include.php';
$vname=$_POST['vname'];
$bdate=$_POST['bdate'];
$pname=$_POST['part'];
$pdate=$_POST['pdate'];
$amount=$_POST['amount'];
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

$x="INSERT INTO `spare_parts`(`sp_category`, `part_name`, `amount`, `cust_id`, `vehicle_id`, `b_date`, `p_date`, `model`)
     VALUES ('Wear & Tear','$pname','$amount','$c_id','$v_id','$bdate','$pdate','$vname')";

    $res=mysqli_query($con,$x);

    echo '<script language="javascript">document.location.href="spare.php"</script>';

?>