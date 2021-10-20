<?php
session_start();
include 'include.php';  
$u=$_POST["email"];
$p=$_POST["password"];
$sql="SELECT * FROM `admin` where email='$u' and pass='$p'";

$result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0)
    {

        $row=mysqli_fetch_assoc($result);
            
        if($row['email']==$u && $row['pass']==$p)
        {
            $_SESSION['email']=$u;
            header("location:dashboard/dash.php");
        }
        else
        {
            header("location:login.php?ans=failed");
        }
    }
    else
    {
        header("location:login.php?ans=failed");
    }    
?>
<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>