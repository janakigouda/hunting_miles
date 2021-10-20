<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>
<div class="text-center" id="module_name">
    <h4>Booked Vehicle List</h4>
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

<?php


include '../../include.php';

$q = "SELECT * FROM vehicle v,customer c WHERE c.c_id=v.cust_id AND v.v_status='sold'";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{

?>
<div class="table-responsive">
<input class="form-control col-2" id="myInput" type="text" placeholder="Search..">
  <br>
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
          <td><a class="mr-2 d-none d-lg-inline text-gray small btn btn-info" id="veh" href="view_s.php?ans=<?php echo $row['v_id'];?>">
                  View
                </a>
          <!-- <td class="dropdown" id="ve">
            <a href="#" id="vDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray small btn btn-info" id="veh">
                  Edit
              </span>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="vDropdown"> -->
                
              <!-- </div> -->
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
    echo "error";
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