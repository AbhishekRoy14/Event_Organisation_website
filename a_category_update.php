<!-- UPDATE CATEGORY QUERY -->
<?php
include('includes/dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['id'];
	 $category = $_POST['category'];
	 
	 mysqli_query($con,"UPDATE subcategory SET dubcat_name='$category' where subcat_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated category details!');</script>";
		echo "<script>document.location='a_category.php'</script>";
	
} 

?>