<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>
<div class="text-center" id="module_name">
    <h4>Free services</h4>
</div>

<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>
<div class="container">
  <form class="form-inline" action="free1.php" method="post">
  <div class="form-group col-6" id="group">
        <label for="cname">Customer Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter customer name" id="cname" name="cname" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="cemail">Customer email:</label>
        <input type="text" class="form-control col-9" placeholder="Enter customer email address" id="cemail" name="cemail" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="mname">Model Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter vehicle model name" id="mname" name="mname" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="ename">Employee Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter employee name" id="ename" name="ename" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="date">Visited Date:</label>
        <input type="date" class="form-control col-9" placeholder="Enter visited date" id="date" name="date" required>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary col-4 group" name="submit" id="group">Submit</button>
    </div>
  </form>
</div>


<?php
include('../includes/footer.php');
?>