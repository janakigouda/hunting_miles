<?php

include '../../include.php';
$a=$_POST['fname'];
$i=$_POST['lname'];
$b=$_POST['email'];
$c=$_POST['designation'];
$d=$_POST['salary'];
$e=$_POST['contact'];
$f=$_POST['education'];
$g=$_POST['address'];
$h=$_POST['pass'];
// die();

$u=$_SESSION['email'];

$sel="SELECT * FROM `employee` where email='".$_POST['email']."' AND designation='".$_POST['designation']."'";

// $sel="SELECT * FROM `register` where name='".$_POST['name']."' and ";

$res=mysqli_query($con,$sel);
if(mysqli_num_rows($res) == 0)
{

$q="INSERT INTO `employee`(`e_name`,`e_lastname`,`email`, `designation`, `salary`, `contact`, `education`, `address`,`e_pass`) VALUES('$a','$i','$b','$c','$d','$e','$f','$g','$h')";

mysqli_query($con,$q);

// echo "registered succesfully";
    session_start();
	$_SESSION['reg'] = 'Employee added succesfully.....';
	header('location: employee_list.php');
}
else{
    echo '<script language="javascript">document.location.href="add_employee.php?ans=The employee is already added ..."</script>';
   
}
?>



?>