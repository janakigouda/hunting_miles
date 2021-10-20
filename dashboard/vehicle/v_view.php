<?php
include('../includes/header.php');
include('../includes/navbar.php');
include '../../include.php';
$ans = $_GET['ans'];

$q = "SELECT * FROM vehicle v,customer c where v_id='$ans' AND c.c_id=v.cust_id";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
    while( $row = mysqli_fetch_assoc($r)){
?>
<div class="text-center" id="module_name">
    <h4>Customer Details</h4>
</div>
<div class="container" id="view">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title text-center">Customer Name: <strong><?php echo $row['c_name']; ?></strong></h4><hr>
      <div class="part1">
        <p class="card-text text-dark">Vehicle Type: <?php echo $row['vehicle_type']; ?></p>
        <p class="card-text text-dark">Vehicle Model: <?php echo $row['model']; ?></p>
        <p class="card-text text-dark">Emission Type: <?php echo $row['emissin_type']; ?></p>
        <p class="card-text text-dark">Milege: <?php echo $row['milege']; ?></p>
        <p class="card-text text-dark">Gear Box: <?php echo $row['gear_box']; ?></p>
        <p class="card-text text-dark">ABS: <?php echo $row['abs']; ?></p>
        <p class="card-text text-dark">Wheel Type: <?php echo $row['wheel_type']; ?></p>
        <p class="card-text text-dark">Chessis No: <?php echo $row['chessis_no']; ?></p>
      </div>
      <div class="part2">
        <p class="card-text text-dark">Engine: <?php echo $row['engine']; ?></p>
        <p class="card-text text-dark">Power: <?php echo $row['power']; ?></p>
        <p class="card-text text-dark">Fuel Type: <?php echo $row['fuel_type']; ?></p>
        <p class="card-text text-dark">Tyre Type: <?php echo $row['tyre_type']; ?></p>
        <p class="card-text text-dark">Amount: <?php echo $row['amount']; ?></p>
        <p class="card-text text-dark">Colour: <?php echo $row['color']; ?></p>
        <p class="card-text text-dark">Vehicle Status: <?php echo $row['v_status']; ?></p>
      </div>
      <a href="cust_list.php" class="btn btn-primary col-lg-3 group">Back</a>
    </div>
  </div>
</div>

<?php
    }
}
include('../includes/footer.php');

?>