<!-- SAVE A CATEGORY QUERY -->
<?php 

include('includes/dbcon.php');
	
	$category = $_POST['category'];
	
	$result = mysqli_query($con,"SELECT subcat_name FROM subcategory where subcat_name='$category'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {
			mysqli_query($con,"INSERT INTO subcategory(subcat_name) 
				VALUES('$category')")or die(mysqli_error());  
				echo "<script type='text/javascript'>alert('Successfully added new category!');</script>";
				echo "<script>document.location='a_category.php'</script>";   
		}
		else
		{	
				echo "<script type='text/javascript'>alert('Category already added!');</script>";
				echo "<script>document.location='a_category.php'</script>";  
		}
	
?>