<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>
  
<!-- ADMIN HEADER -->
   <?php include 'a_header.php';?>


</head>

<body id="admin" >

	<div class="d-flex" id="wrapper">

    <!-- PAGE CONTENT -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
			</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">logout</a>
            </li>
          </ul>
        </div>
      </nav>

	<!-- LOGIN FORM -->
		<div class="container-fluid">
        <h1 class="mt-4">Admin</h1>
		<div id="login" class="col-md-3 col-sm-6">
        <form action="a_login.php" method="POST">
									
										<input type="username" class="form-control"  name="username" placeholder="Username">
									
									</br>
										<input type="password" class="form-control" name="password" placeholder="Password">
									</br>
									<button type="submit" class="btn btn-outline-primary" name="login">Login</button>
								</form>
								</div>
      </div>
    </div>
  </div>

	<!-- ADMIN SCRIPT -->
  <?php include 'a_script.php';?>

</body>

</html>
