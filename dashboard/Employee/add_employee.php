<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="text-center" id="module_name">
    <h4>Add Employee</h4>
</div>
<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>
<div class="container" id="container">
  <form class="form-inline" action="add_emp2.php" method="POST">
    <div class="form-group col-6" id="group">
        <label for="fname">First Name:</label>
        <input type="text" class="form-control col-9" placeholder="John" id="name" name="fname" autofocus required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="lname">Last Name:</label>
        <input type="text" class="form-control col-9" placeholder="Deo" id="lname" name="lname" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="email">Email:</label>
        <input type="email" class="form-control col-9" placeholder="abc@gmail.com" id="email" name="email" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="designation">Designation:</label>
        <input type="text" class="form-control col-9" placeholder="Worker" id="designation" name="designation" required>
    </div><br>
    <div class="form-group col-6" id="group">
        <label for="salary">Salary:</label>
        <input type="number" class="form-control col-9" placeholder="10000" id="salary" name="salary" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="education">Education:</label>
        <input type="text" class="form-control col-9" placeholder="Phd" id="education" name="education" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="contact">Contact:</label>
        <input type="number" class="form-control col-9" placeholder="123-34-567" id="contact" name="contact" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="address">Address:</label>
        <input type="text" class="form-control col-9" placeholder="PB Road , Belgaum, karnataka" id="address" name="address"  required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="pass">Password:</label>
        <input type="text" class="form-control col-9" placeholder="Enter password" id="pass" name="pass" maxlength="10" minlength="8" required>
    </div>
    <!-- <div class="form-group col-6" id="group">
        <label for="photo">Photo:</label>
        <input type="file" class="form-control col-9"  id="photo" name="photo">
    </div> -->
    <div class="col-12">
        <button type="submit" class="btn btn-primary col-4 group" name="submit" id="group">Submit</button>
    </div>
  </form>
</div>
<!-- <script src="../jquery/formvalid.js" type="text/javascript"></script> -->

<?php
include('../includes/footer.php');

?>