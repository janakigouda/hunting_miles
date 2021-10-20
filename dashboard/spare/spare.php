<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>
<div class="text-center" id="module_name">
    <h4>Spare-Parts List</h4>
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

$q = "SELECT * FROM spare_parts s,customer c WHERE c.c_id=s.cust_id";
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
          <th>S.id</th>
          <th>Spare-Part Category</th>
          <th>Customer Name</th>
          <th>Model Name</th>
          <th>Part Name</th>
          <th>Purchased Date</th>
          <th>Amount</th>
          <th>Edit</th>
        </tr>
      </thead>
      <?php while( $row = mysqli_fetch_assoc($r)){
    ?>
      <tbody id="myTable">
        <tr>
          <td><?php echo $row['sp_id']; ?></td>
          <td><?php echo $row['sp_category']; ?></td>
          <td><?php echo $row['c_name']; ?></td>
          <td><?php echo $row['model']; ?></td>
          <td><?php echo $row['part_name']; ?></td>
          <td><?php echo $row['p_date']; ?></td>
          <td><?php echo $row['amount']; ?></td>
          <td><a class="mr-2 d-none d-lg-inline text-gray small btn btn-info" id="veh" href="view_spare.php?ans=<?php echo $row['sp_id'];?>">
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