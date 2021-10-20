<?php
session_start();
include 'include.php';  
$u=$_POST["email"];
$p=$_POST["password"];
$sql="SELECT * FROM `employee` where email='$u' and e_pass='$p'";

$result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0)
    {

        $row=mysqli_fetch_assoc($result);
            
        if($row['email']==$u && $row['e_pass']==$p)
        {
            $_SESSION['email']=$u;
            header("location:e_view.php");
        }
        else
        {
            header("location:elogin.php?ans=failed");
        }
    }
    else
    {
        header("location:elogin.php?ans=failed");
    }    
?>
<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>