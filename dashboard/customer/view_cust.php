<?php
include('../includes/header.php');
include('../includes/navbar.php');
include '../../include.php';
$ans = $_GET['ans'];

$q = "SELECT * FROM customer where email='$ans'";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
?>
<div class="text-center" id="module_name">
    <h4>Customer Details</h4>
</div>
<div class="container" id="view">
  <div class="card col-lg-6 col-md-9 col-sm-12">
    <div class="card-body">
      <h4 class="card-title text-center">Customer Name: <strong><?php echo $row['c_name']; ?></strong></h4><hr>
      <p class="card-text text-dark">Email: <?php echo $row['email']; ?></p>
      <p class="card-text text-dark">Pan-card: <?php echo $row['pancard']; ?></p>
      <p class="card-text text-dark">Contact: <?php echo $row['contact']; ?></p>
      <p class="card-text text-dark">Address: <?php echo $row['address']; ?></p>
      <p class="card-text text-dark">City: <?php echo $row['city']; ?></p>
      <p class="card-text text-dark">State: <?php echo $row['state']; ?></p>
      <p class="card-text text-dark">Status: <?php echo $row['status']; ?></p>
      <a href="cust_list.php" class="btn btn-primary col-lg-3 group">Back</a>
    </div>
  </div>
</div>

<?php
    }
}
include('../includes/footer.php');

?>