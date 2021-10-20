<?php
include '../../include.php';
echo $vname=$_POST['vname'];
echo $bdate=$_POST['bdate'];
echo $pname=$_POST['part'];
echo $pdate=$_POST['pdate'];
echo $amount=$_POST['amount'];
echo $c_name=$_POST['cname'];
echo $c_email=$_POST['cemail'];

$q="SELECT * FROM customer c,vehicle v WHERE c_name='$c_name' AND email='$c_email' AND c.c_id=v.cust_id";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
        echo $c_id=$row['c_id'];
        echo $v_id=$row['v_id'];
    }
}

$x="INSERT INTO `spare_parts`(`sp_category`, `part_name`, `amount`, `cust_id`, `vehicle_id`, `b_date`, `p_date`, `model`)
     VALUES ('Runnable','$pname','$amount','$c_id','$v_id','$bdate','$pdate','$vname')";

    $res=mysqli_query($con,$x);

    echo '<script language="javascript">document.location.href="spare.php"</script>';

?>