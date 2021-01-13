<!-- RESERVATION DELETE QUERY -->
<?php
include('includes/dbcon.php');

    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

  // sending query
  mysqli_query($con,"delete from reservation WHERE rid='$id'")
  or die(mysqli_error());
  echo "<script>document.location='a_finish_reservation.php'</script>";
    }
    ?>
