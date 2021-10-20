<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>
<div class="text-center" id="module_name">
    <h4>Vehicle Report</h4>
</div>
<?php
if(isset($_SESSION['reg']))
{
    echo '<p class="message"> <font size="5" color="Black"> <center> <i>';
    echo $_SESSION['reg'];
    echo "</i></center></font></p>";
    unset($_SESSION['reg']);
}
?>
<br>
<form action="" method="post" id="drop_down">
  <select name="year" id="years" class="form-control col-2">
    <option value="">Select year to get report</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
  </select>
  <br>
 <input type="submit" value="Submit" name="sub">
</form>
  <br>
<?php

include '../../include.php';
if(isset($_REQUEST['sub'])){
$year=$_POST['year'];

$q = "SELECT * FROM vehicle v,customer c WHERE c.c_id=v.cust_id AND  YEAR(date)='$year'";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{

?>
<div class="text-center">
    <h4>Vehicle Report Of Year <?php echo "$year";?></h4>
</div>
<div class="table-responsive">
<input class="form-control col-2" id="myInput" type="text" placeholder="Search.."><br>

<?php
// $year=$_POST['year'];

// $query="SELECT * FROM `vehicle` WHERE YEAR(date)='$year'";
// $r1=mysqli_query($con,$query);
// if($r1){
//     echo "done";
// }
// else{ 
//     echo "eooro";
// }

?>


    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>V.id</th>
          <th>Customer Name</th>
          <th>Vehicle type</th>
          <th>Model Name</th>
          <th>Colour</th>
          <th>Price</th>
          <th>Status</th>
          <th>Edit</th>
        </tr>
      </thead>
      <?php while( $row = mysqli_fetch_assoc($r)){
    ?>
      <tbody id="myTable">
        <tr>
          <td><?php echo $row['v_id']; ?></td>
          <td><?php echo $row['c_name']; ?></td>
          <td><?php echo $row['vehicle_type']; ?></td>
          <td><?php echo $row['model']; ?></td>
          <td><?php echo $row['color']; ?></td>
          <td><?php echo $row['amount']; ?></td>
          <td class="text-info"><?php echo $row['v_status']; ?></td>
          <td class="dropdown" id="ve">
            <a href="#" id="vDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray small btn btn-info" id="veh">
                  Edit
              </span>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="vDropdown">
                <a class="dropdown-item" name="update" href="#?ans=<?php echo $row['v_id']; ?>">
                  Update
                </a>
                <a class="dropdown-item" name="delete" href="v_delete.php?ans=<?php echo $row['v_id']; ?>">
                  Delete
                </a>
                <a class="dropdown-item" href="v_view.php?ans=<?php echo $row['v_id'];?>">
                  View
                </a>
              </div>
          </td>
        </tr>
      </tbody>
      <?php
    }
    ?>
    </table>
  </div>
</div>
<?php
}
else{
    echo "Sorry Enter Other Year to get report";
}
}
?>

<script>
// search box
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


<?php
include('../includes/footer.php');

?>