<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>
<div class="text-center" id="module_name">
    <h4>Add Vehicle</h4>
</div>

<div class="container">
  <form class="form-inline" action="add_vehicle2.php" method="post">
    <div class="form-group col-6" id="group">
        <label for="vtype">Vehicle Type:</label>
        <!-- <input type="text" class="form-control col-9" placeholder="Enter vehicle type" id="vtype" name="vtype"> -->
        <select id="vtype" class="form-control col-9" name="vtype">
            <option value="">select your vehicle type</option>
            <option value="2-wheeler">2 wheeler</option>
            <option value="3-wheeler">3 wheeler</option>
            <option value="4-wheeler">4 wheeler</option>
        </select>
    </div>
    <div class="form-group col-6" id="group">
        <label for="fuel">Fuel Type:</label>
        <!-- <input type="text" class="form-control col-9" placeholder="Enter vehicle type" id="vtype" name="vtype"> -->
        <select id="fuel" class="form-control col-9" name="fuel">
            <option value="">select fuel</option>
            <option value="diesel">2 Diesel</option>
            <option value="petrol">Petrol</option>
            <option value="gas">Gas</option>
        </select>
    </div>
    <div class="form-group col-6" id="group">
        <label for="model">Model No:</label>
        <input type="text" class="form-control col-9" placeholder="Enter model number" id="model" name="model">
    </div>
    <div class="form-group col-6" id="group">
        <label for="price">Price:</label>
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
        <label for="chassis">Chassis No:</label>
        <input type="text" class="form-control col-9" placeholder="Enter chessis number" id="chessis" name="chessis">
    </div>
    <div class="form-group col-6" id="group">
        <label for="manufacturer">Manufacturer</label>
        <input type="text" class="form-control col-9" placeholder="Enter manufacturer" id="manufacturer" name="manufacturer">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary col-4" id="group">Submit</button>
    </div>
  </form>
</div>

<?php
include('../includes/footer.php');

?>