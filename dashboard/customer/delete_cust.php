<?php
include '../../include.php';

$ans = $_GET['ans'];

$q="DELETE FROM `customer` WHERE `email`='$ans' ";
mysqli_query($con,$q);

echo '<script language="javascript">document.location.href="cust_list.php"</script>';


?>