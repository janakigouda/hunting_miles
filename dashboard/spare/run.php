<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>
<div class="text-center" id="module_name">
    <h4>Running OR Fast moving Spare-Parts</h4>
</div>
<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>
<div class="container" id="container">
  <form class="form-inline" action="run1.php" method="POST">
  <div class="form-group col-6" id="group">
        <label for="cname">Customer Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter customer name" id="cname" name="cname">
    </div>
    <div class="form-group col-6" id="group">
        <label for="cemail">Customer email:</label>
        <input type="text" class="form-control col-9" placeholder="Enter customer email address" id="cemail" name="cemail">
    </div>
  <div class="form-group col-6" id="group">
        <label for="vname">Vehicle Model Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter vehicle model name" id="vname" name="vname">
    </div>
    <div class="form-group col-6" id="group">
        <label for="part">Part Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter Paret name" id="part" name="part">
    </div>
    <div class="form-group col-6" id="group">
        <label for="bdate">Booked Date:</label>
        <input type="date" class="form-control col-9"  id="bdate" name="bdate">
    </div>
    <div class="form-group col-6" id="group">
        <label for="pdate">Purchased Date:</label>
        <input type="date" class="form-control col-9"  id="pdate" name="pdate">
    </div>
    <div class="form-group col-6" id="group">
        <label for="amount">Amount with GST:</label>
        <input type="number" class="form-control col-9" placeholder="Enter amount" id="amount" name="amount">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary col-4 group" name="submit" id="group">Submit</button>
    </div>
  </form>
</div>

<?php
include('../includes/footer.php');

?>