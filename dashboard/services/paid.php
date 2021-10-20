<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>
<div class="text-center" id="module_name">
    <h4>Paid Service</h4>
</div>
<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>
<div class="container" id="container">
  <form class="form-inline" action="paid1.php" method="POST">
  <div class="form-group col-6" id="group">
        <label for="cname">Customer Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter customer name" id="cname" name="cname">
    </div>
    <div class="form-group col-6" id="group">
        <label for="cemail">Customer email:</label>
        <input type="text" class="form-control col-9" placeholder="Enter customer email address" id="cemail" name="cemail">
    </div>
  <div class="form-group col-6" id="group">
        <label for="ename">Emp Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter service provider employee name" id="ename" name="ename">
    </div>
    <div class="form-group col-6" id="group">
        <label for="model">Model No:</label>
        <input type="text" class="form-control col-9" placeholder="Enter model no" id="model" name="model">
    </div>
    
    <div class="form-group col-6" id="group">
        <label for="date">Visited Date:</label>
        <input type="date" class="form-control col-9"  id="date" name="date">
    </div><br>
    <div class="form-group col-6" id="group">
        <label for="amount">Amount:</label>
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