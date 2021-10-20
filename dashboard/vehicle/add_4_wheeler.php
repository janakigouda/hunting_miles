<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>
<div class="text-center" id="module_name">
    <h4>Add Four-Wheeler Vehicle</h4>
</div>

<div class="container">
  <form class="form-inline" action="add2.php" method="post">
  <div class="form-group col-6" id="group">
        <label for="cname">Customer Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter customer name" id="cname" name="cname">
    </div>
    <div class="form-group col-6" id="group">
        <label for="cemail">Customer email:</label>
        <input type="text" class="form-control col-9" placeholder="Enter customer email address" id="cemail" name="cemail">
    </div>
    <div class="form-group col-6" id="group">
        <label for="model">Model Name:</label>
        <input type="text" class="form-control col-9" placeholder="Enter model number" id="model" name="model">
    </div>
    <div class="form-group col-6" id="group">
        <label for="emission">Emission Type:</label>
        <input type="text" class="form-control col-9" placeholder="Enter emission type" id="emission" name="emission">
    </div>
    <div class="form-group col-6" id="group">
        <label for="milage">Milege</label>
        <input type="text" class="form-control col-9" placeholder="Enter milage" id="milage" name="milage">
    </div>
    <div class="form-group col-6" id="group">
        <label for="gear">Gear Box</label>
        <input type="text" class="form-control col-9" placeholder="Enter gear" id="gear" name="gear">
    </div>
    <div class="form-group col-6" id="group">
        <label for="abs">ABS</label>
        <input type="text" class="form-control col-9" placeholder="Enter abs" id="abs" name="abs">
    </div>
    <div class="form-group col-6" id="group">
        <label for="wheel">Wheels type</label>
        <input type="text" class="form-control col-9" placeholder="Enter wheels type" id="wheel" name="wheel">
    </div>
    <div class="form-group col-6" id="group">
        <label for="engine">Engine Displ.</label>
        <input type="text" class="form-control col-9" placeholder="Enter manufacturer" id="engine" name="engine">
    </div>
    <div class="form-group col-6" id="group">
        <label for="date">Date</label>
        <input type="date" class="form-control col-9" id="date" name="date">
    </div>
    <div class="form-group col-6" id="group">
        <label for="fuel">Fuel Type:</label>
        <!-- <input type="text" class="form-control col-9" placeholder="Enter vehicle type" id="vtype" name="vtype"> -->
        <select id="fuel" class="form-control col-9" name="fuel">
            <option value="">select fuel</option>
            <option value="diesel">Diesel</option>
            <option value="petrol">Petrol</option>
        </select>
    </div>
    <div class="form-group col-6" id="group">
        <label for="tyre">Tyre Type</label>
        <input type="text" class="form-control col-9" placeholder="Enter tyre type" id="tyre" name="tyre">
    </div>
    <div class="form-group col-6" id="group">
        <label for="price">Booked Price/stock price:</label>
        <input type="text" class="form-control col-9" placeholder="Enter price" id="price" name="price">
    </div>
    <div class="form-group col-6" id="group">
        <label for="color">color</label>
        <input type="text" class="form-control col-9" placeholder="Enter vehicle color" id="color" name="color">
    </div>
    <div class="form-group col-6" id="group">
        <label for="status">Vehicle Status:</label>
        <select id="status" class="form-control col-9" name="status">
            <option value="">select status</option>
            <option value="booked">Booked</option>
            <option value="stock">Stock</option>
        </select>
    </div>
    <div class="form-group col-6" id="group">
        <label for="chassis">Chessis No:</label>
        <input type="text" class="form-control col-9" placeholder="Enter chessis number" id="chessis" name="chessis">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary col-4 group" id="group">Submit</button>
    </div>
  </form>
</div>

<?php
include('../includes/footer.php');

?>