<?php
include('../includes/header.php');
include('../includes/navbar.php');
include '../../include.php';
$ans = $_GET['ans'];

$q = "SELECT * FROM spare_parts s,customer c where sp_id='$ans' AND c.c_id=s.cust_id";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
?>
<div class="text-center" id="module_name">
    <h4>Spare-Part Details</h4>
</div>
<div class="container" id="view">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title text-center">Spare-Part Category: <strong><?php echo $row['sp_category']; ?></strong></h4><hr>
        <p class="card-text text-dark">Customer Name: <?php echo $row['c_name']; ?></p>
        <p class="card-text text-dark">Model name: <?php echo $row['model']; ?></p>
        <p class="card-text text-dark">Part Name: <?php echo $row['part_name']; ?></p>
        <p class="card-text text-dark">Booked Date: <?php echo $row['b_date']; ?></p>
        <p class="card-text text-dark">Purchase Date: <?php echo $row['p_date']; ?></p>
        <p class="card-text text-dark">Amount: <?php echo $row['amount']; ?></p>
      <a href="spare.php" class="btn btn-primary col-lg-3 group">Back</a>
    </div>
  </div>
</div>

<?php
    }
}
include('../includes/footer.php');

?>