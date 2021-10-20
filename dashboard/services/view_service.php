<?php
include('../includes/header.php');
include('../includes/navbar.php');
include '../../include.php';
$ans = $_GET['ans'];

$q = "SELECT * FROM services s,customer c where s_id='$ans' AND c.c_id=s.cust_id";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
?>
<div class="text-center" id="module_name">
    <h4>Service Details</h4>
</div>
<div class="container" id="view">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title text-center">Service Type: <strong><?php echo $row['service_type']; ?></strong></h4><hr>
        <p class="card-text text-dark">Customer Name: <?php echo $row['c_name']; ?></p>
        <p class="card-text text-dark">Model name: <?php echo $row['model_no']; ?></p>
        <p class="card-text text-dark">Visited Date: <?php echo $row['visited_date']; ?></p>
        <p class="card-text text-dark">Amount: <?php echo $row['amount']; ?></p>
        <p class="card-text text-dark">Warrenty_Period: <?php echo $row['warrenty_period']; ?></p>
      <a href="service.php" class="btn btn-primary col-lg-3 group">Back</a>
    </div>
  </div>
</div>

<?php
    }
}
include('../includes/footer.php');

?>