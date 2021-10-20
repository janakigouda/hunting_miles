<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="text-center" id="module_name">
    <h4>Add Customer</h4>
</div>

<?php
if(isset($_GET['ans'])){
    echo "<script lang='javascript'> alert ('{$_GET['ans']}')</script>";
}
?>
<div class="container">
  <form class="form-inline" action="add_cust2.php" method="post">
    <div class="form-group col-6" id="group">
        <label for="cid">Customer ID:</label>
        <input type="text" class="form-control col-9"  id="cid" name="cid" tabindex="1" maxlength="20" size="20" autocomplete="off" value="<?php echo  "CUST" . rand(10000,99999999)?>" readonly>
    </div>
    <div class="form-group col-6" id="group">
        <label for="fname">Full Name:</label>
        <input type="text" class="form-control col-9" placeholder="John Doe" id="fname" name="fname" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="email">Email:</label>
        <input type="email" class="form-control col-9" placeholder="john@gmail.com" id="email" name="email" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="pan">Pan-card No:</label>
        <input type="text" class="form-control col-9" placeholder="GHYRF12332" id="pan" name="pan" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="contact">Contact:</label>
        <input type="number" class="form-control col-9" placeholder="123-34-456" id="contact" name="contact" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="address">Address:</label>
        <input type="text" class="form-control col-9" placeholder="PB Road Belgaum" id="address" name="address" required>
    </div><div class="form-group col-6" id="group">
        <label for="city">City:</label>
        <input type="text" class="form-control col-9" placeholder="Belgaum" id="city" name="city" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="state">State:</label>
        <input type="text" class="form-control col-9" placeholder="Karnataka" id="state" name="state" required>
    </div>
    <div class="form-group col-6" id="group">
        <label for="status">Customer Status:</label>
        <select id="status" class="form-control col-9" name="status">
            <option value="">select status</option>
            <option value="enquiry">Enquiry</option>
            <option value="booking">Booking</option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary col-4 group" id="group">Submit</button>
    </div>
  </form>
</div>


<?php
include('../includes/footer.php');

?>