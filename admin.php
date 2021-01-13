<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>
  
	<!-- ADMIN HEADER PHP -->
	<?php include 'a_header.php';?>

</head>
<body>

	<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include 'sidebar.php';?>

    <!-- PAGE CONTENT -->
    <div id="page-content-wrapper">

	<!-- ADMIN NAV PHP -->
    <?php include 'a_nav.php';?>
	
    <div class="container-fluid">
    <h1 class="welcome">WELCOME!</h1>
	<p class="wl">Admin section for REO Website</p>		
	</div>
    </div>
	</div>

	<!-- FOOTER --> 
	<?php include 'a_footer.php';?>

	<!-- ADMIN SCRIPT PHP -->
	<?php include 'a_script.php';?>

</body>

</html>
