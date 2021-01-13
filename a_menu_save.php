<!-- SAVE MENU QUERY -->
<?php 

include('includes/dbcon.php');
	
	$menu = $_POST['menu'];
	$subcat = $_POST['subcat'];
	$price = $_POST['price'];

	$result = mysqli_query($con,"SELECT menu_name FROM menu where menu_name='$menu'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
				mysqli_query($con,"INSERT INTO menu(menu_name,subcat_name,menu_price) 
					VALUES('$menu','$subcat','$price')")or die(mysqli_error());  
					echo "<script type='text/javascript'>alert('Successfully added new menu!');</script>";
					echo "<script>document.location='a_menu.php'</script>";   
		}
		else
		{
					echo "<script type='text/javascript'>alert('Menu already added!');</script>";
					echo "<script>document.location='a_menu.php'</script>";  
		}	
?>