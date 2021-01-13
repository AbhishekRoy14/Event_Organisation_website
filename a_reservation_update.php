<!-- RESERVATION UPDATE QUERY -->
<?php 
session_start();
include('includes/dbcon.php');
	
	$id = $_POST['id'];
	$last = $_POST['last'];
	$first = $_POST['first'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$mop = $_POST['mop'];

	mysqli_query($con,"UPDATE reservation SET r_last='$last',r_first='$first',r_address='$address',r_contact='$contact',r_email='$email',mop='$mode' where rid='$id'") or die(mysqli_error($con)); 
	echo "<script>document.location='a_confirm_reservation.php'</script>";   
	
	
?>