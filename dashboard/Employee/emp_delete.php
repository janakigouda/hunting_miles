<?php
include '../../include.php';

$ans = $_GET['ans'];

$q="DELETE FROM `employee` WHERE `email`='$ans' ";
mysqli_query($con,$q);

echo '<script language="javascript">document.location.href="employee_list.php"</script>';


?>