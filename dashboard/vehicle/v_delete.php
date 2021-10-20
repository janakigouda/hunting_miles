<?php
include '../../include.php';

$ans = $_GET['ans'];

$q="DELETE FROM `vehicle` WHERE `v_id`='$ans' ";
mysqli_query($con,$q);

echo '<script language="javascript">document.location.href="vehicle.php"</script>';


?>