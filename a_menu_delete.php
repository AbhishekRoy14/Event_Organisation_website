<!-- DELETE MENU QUERY -->
<?php
include('includes/dbcon.php');

    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

  // sending query
  mysqli_query($con,"delete from menu WHERE menu_id='$id'")
  or die(mysqli_error());
  echo "<script>document.location='a_menu.php'</script>";
    }
    ?>