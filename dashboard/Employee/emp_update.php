<?php
include('../includes/header.php');
include('../includes/navbar.php');

include '../../include.php';
// $u=$_SESSION['name'];
$ans = $_GET['ans'];
?>

<div class="text-center" id="module_name">
    <h4>Update Employee</h4>
</div>
<?php

// if(isset($_REQUEST['update']))
// {
$q = "SELECT * FROM `employee` where email='$ans' ";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    
     while( $row = mysqli_fetch_assoc($r))
     {
?>
<div class="container">
  <form class="form-inline" action="" method="POST">
    <div class="form-group col-6" id="group">
        <label for="fname">First Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter full name" id="name" name="fname" value="<?php echo $row['e_name'];?> <?php echo $row['e_lastname']; ?> " readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="email">Email:</label>
        <input type="email" class="form-control col-9" placeholder="Enter email" id="email" name="email" value="<?php echo $row['email']; ?>" readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="designation">Designation:</label>
        <input type="text" class="form-control col-9" placeholder="Enter designation" id="designation" name="designation" value="<?php echo $row['designation']; ?>">
    </div><br>
    <div class="form-group col-6" id="group">
        <label for="salary">Salary:</label>
        <input type="number" class="form-control col-9" placeholder="Enter salary" id="salary" name="salary" value="<?php echo $row['salary']; ?>">
    </div>
    <div class="form-group col-6" id="group">
        <label for="education">Education:</label>
        <input type="text" class="form-control col-9" placeholder="Enter education" id="education" name="education" value="<?php echo $row['education']; ?>">
    </div>
    <div class="form-group col-6" id="group">
        <label for="contact">Contact:</label>
        <input type="number" class="form-control col-9" placeholder="Enter phone number" id="contact" name="contact" value="<?php echo $row['contact']; ?>">
    </div>
    <div class="form-group col-6" id="group">
        <label for="address">Address:</label>
        <input type="text" class="form-control col-9" placeholder="Enter address" id="address" name="address" value="<?php echo $row['address']; ?>">
    </div>
    <div class="form-group col-6" id="group">
        <label for="pass">Password:</label>
        <input type="text" class="form-control col-9" placeholder="Enter password" id="pass" name="pass" value="<?php echo $row['e_pass']; ?>">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary col-4 group" name="submit" id="group" value="update">Update</button>
    </div>
  </form>
</div>

<?php
    }

}
else{
    echo "error 1";
}

// }

if(isset($_REQUEST['submit']))
{ 

 $name=$_POST['fname'];
 $email=$_POST['email'];
 $designation=$_POST['designation'];
 $salary=$_POST['salary'];
 $education=$_POST['education'];
 $contact=$_POST['contact'];
 $address=$_POST['address'];
 $pass=$_POST['pass'];
    // $x="UPDATE  `register` SET `name` = '$user', `email` =  '$email',`contact` =  '$contact',`company` =  '$company',`designation` =  '$designation',`batch` =  '$batch',`current_place` =  '$current_place'
    //    WHERE  `name` ='$user' LIMIT 1" ;

$x="UPDATE `employee` SET  `designation` = '$designation', `salary` = '$salary', `contact` = '$contact', `education` = '$education', `address` = '$address',`e_pass`='$pass' WHERE email='$email'";

    $res=mysqli_query($con,$x);

    // header('location:udash.php');
    // }
    // else{ echo "error"; }    
    echo '<script language="javascript">document.location.href="employee_list.php"</script>';
}

else 
{
//   echo "error";
}

include('../includes/footer.php');

?>