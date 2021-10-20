<?php
include('../includes/header.php');
include('../includes/navbar.php');
include '../../include.php';
$ans = $_GET['ans'];

$q = "SELECT * FROM employee where email='$ans'";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
?>
<div class="text-center" id="module_name">
    <h4>Employee Details</h4>
</div>
<hr>
<div class="container">
  <div class="card col-lg-6 col-md-9 col-sm-12">
    <div class="card-body">
      <h4 class="card-title text-center">Employee Name: <strong><?php echo $row['e_name']; ?> <?php echo $row['e_lastname'];?></strong></h4><hr>
      <p class="card-text text-dark">Designation: <?php echo $row['designation']; ?></p>
      <p class="card-text text-dark">Email: <?php echo $row['email']; ?></p>
      <p class="card-text text-dark">Contact: <?php echo $row['contact']; ?></p>
      <p class="card-text text-dark">Education: <?php echo $row['education']; ?></p>
      <p class="card-text text-dark">Salary: <?php echo $row['salary']; ?></p>
      <p class="card-text text-dark">Address: <?php echo $row['address']; ?></p>
      <p class="card-text text-dark">Password: <?php echo $row['e_pass']; ?></p>
      <a href="employee_list.php" class="btn btn-primary col-lg-3 group">Back</a>
    </div>
  </div>
</div>

<?php
    }
}
include('../includes/footer.php');

?>