<!-- UPDATE MENU QUERY -->
<?php
include('includes/dbcon.php');

 if (isset($_POST['update']))
 { 
	$id = $_POST['id'];
	$menu = $_POST['menu'];
	$subcat = $_POST['subcat'];
	$price = $_POST['price'];
	 
		
	 mysqli_query($con,"UPDATE menu SET menu_name='$menu',subcat_name='$subcat',menu_price='$price' where menu_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated menu details!');</script>";
		echo "<script>document.location='a_menu.php'</script>";
	
} 

?>