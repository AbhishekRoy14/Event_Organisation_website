<!-- SAVING RESERVATION DETAILS -->
<?php 
session_start();
include('includes/dbcon.php');
	
	$id = $_SESSION['id'];
	$address = $_POST['address'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$theme = $_POST['theme'];
	$nop = $_POST['nop'];
	$ocassion = $_POST['ocassion'];
	$s_name = $_POST['subcat_name'];
	$date=date("Y-m-d",strtotime($date));

	$query = mysqli_query($con, "SELECT * FROM `reservation` WHERE r_date='".$date."' AND r_status = 'Approved'");
			if(mysqli_num_rows($query) > 0)
			{
                   echo "<script>alert ('Date is already reserved');
					document.location='reservation_details.php'; </script>";
			}
			else{
    // do something
			{
		$query = mysqli_query($con, "SELECT * FROM subcategory WHERE subcat_name='$s_name'");
			$row=mysqli_fetch_array($query);
				$price=$row['sub_price'];
				$payable=$nop*$price;

		mysqli_query($con,"UPDATE reservation SET payable='$payable',balance='$payable',r_address='$address',r_date='$date',r_time='$time',r_theme='$theme'
		,r_ocassion='$ocassion',nop='$nop',subcat_name='$s_name',price='$price' where rid='$id'")or die(mysqli_error($con)); 

			$_SESSION['id']=$id;

			
			echo "<script>document.location='payment.php'</script>";   
	}}
	
?>