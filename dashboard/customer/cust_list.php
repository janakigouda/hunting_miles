<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>
<div class="text-center" id="module_name">
    <h4>Customer List</h4>
</div>

<?php
// $u=$_SESSION['name'];
if(isset($_SESSION['reg']))
{
    echo '<p class="message"> <font size="5" color="Black"> <center> <i>';
    echo $_SESSION['reg'];
    echo "</i></center></font></p>";
    unset($_SESSION['reg']);
}


include '../../include.php';

$q = "SELECT * FROM customer";
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
          <!-- <th>S.No</th> -->
          <th>Customer Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>City</th>
          <th>Status</th>
          <th>Edit</th>
        </tr>
      </thead>
      <?php while( $row = mysqli_fetch_assoc($r)){
    ?>
      <tbody id="myTable">
        <tr>
          <!-- <td></td> -->
          <td><?php echo $row['c_name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['contact']; ?></td>
          <td><?php echo $row['city']; ?></td>
          <td><?php echo $row['status']; ?></td>
          <td class="dropdown">
            <a class="nav-link" href="#" id="emrDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray small" id="emp">
                  Edit
              </span>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="emDropdown">
                <a class="dropdown-item" name="update" href="update_cust.php?ans=<?php echo $row['email']; ?>">
                  Update
                </a>
                <a class="dropdown-item" name="delete" href="delete_cust.php?ans=<?php echo $row['email']; ?>">
                  Delete
                </a>
                <a class="dropdown-item" name="view" href="view_cust.php?ans=<?php echo $row['email']; ?>">
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
    echo "error";
}
?>

<script>
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