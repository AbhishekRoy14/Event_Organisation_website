<?php session_start();
if(empty($_SESSION['id'])):
header('Location:admin.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- TITLE -->
  <title>Menu</title>

	<!-- ADMIN HEADER PHP -->
	<?php include 'a_header.php';?>
  
</head>

<body>
	<!-- WRAPPER -->
	<div class="d-flex" id="wrapper">

    <!-- SIDEBAR -->
    <?php include 'sidebar.php';?>

	<!-- PAGE CONTENT -->
    <div id="page-content-wrapper">

	<!-- ADMIN NAV PHP -->
    <?php include 'a_nav.php';?>

	<div class="container-fluid">
    <div class="row">
	<div class="col-lg-10 col-lg-offset-2">
	<h2 class="title">Menu</h2>  
	<a href="#addModal" class="btn btn-outline-primary" id="Add" data-toggle="modal">Add New Menu</a>
	<div class="clearfix"></div>             

	<!-- TABLE -->
             
	<div class="page-tables">
               
                <div class="table-responsive table-hover table-striped" >
                  <table id="dt" cellpadding="5" cellspacing="5" id="data-table" width="100%" align="center">
                    <thead>
                      <tr>                       
                        <th>Menu Name</th>
                        <th>Category</th>                       
                        <th>Price</th>
                        <th>Update</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('includes/dbcon.php');

    $query=mysqli_query($con,"select * from menu natural join subcategory order by menu_name")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['menu_id'];
        $menu=$row['menu_name'];
        $subcat=$row['subcat_name'];
        $price=$row['menu_price'];
?>                      
                      <tr>
                        <td><?php echo $menu;?></td>
                        <td><?php echo $subcat;?></td>                       
                        <td><?php echo $price;?></td>
                        <td>                            
                              <a href="#update" class="btn btn-outline-success" title="Update" data-target="#update<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-edit"></i>
                              </a>                                                      
                        </td>
						<td>                            
                              <a href="#delete" class="btn btn-outline-danger" title="Delete" data-target="#delete<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-trash"></i>
                              </a>                                                      
                        </td>
                      </tr>
<!-- MODAL - UPDATE MENU -->
<div id="update<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             
              <h4 class="modal-title ">Update Menu</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="height:400px">
              <!--FORM-->
              <form class="form-horizontal" method="post" action="a_menu_update.php" enctype='multipart/form-data'>
                  <input type="hidden" name="id" value="<?php echo $id;?>">
				  
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Menu Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="menu" id="title" placeholder="Menu Name" value="<?php echo $menu;?>">
                      </div>
                  </div> 
                  
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Category</label>
                      <div class="col-lg-8"> 
                        <select class="form-control select2" id="exampleSelect1" name="subcat">
                         <?php
                            include('includes/dbcon.php');

                              $result = mysqli_query($con,"SELECT * FROM subcategory ORDER BY subcat_name"); 
                                  while ($row = mysqli_fetch_assoc($result)){

                                ?>
                                <option value="<?php echo $row['subcat_name'];?>"><?php echo $row['subcat_name'];?></option>
                        <?php } ?>
                        </select>
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Price</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="price" id="title" placeholder="Price" value="<?php echo $price;?>">
                      </div>
                  </div> 

                  <div class="col-md-4">
                  </div>  
                  <div class="col-md-8">
                        <button type="submit" class="btn btn-outline-primary" name="update">Update</button>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-hidden="true">Close</button>
                  </div>  
              </form>
            </div>           
        </div>
    </div>
</div>

<!-- MODAL - DELETE MENU-->
<div id="delete<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Menu</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="height:150px">
              <!--FORM-->
              <form class="form-horizontal" method="post" action="a_menu_delete.php">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                  <div class="alert alert-danger">
                      Are you sure you want to delete <?php echo $menu;?> from the menu ?
                    </div>                                  
                  <div class="form-group">
                       <button type="submit" class="btn btn-outline-danger" name="del">Delete</button>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-hidden="true">Close</button>                      
                  </div>
              </form>
            </div>          
        </div>
    </div>
</div>
                    
<?php }?>
                    </tbody>                  
                  </table>
                 <div class="clearfix"></div>
                </div>
               </div>               
              </div>
             </div>  
			</div>
		</div>
	</div>
   <div class="clearfix"></div>
</div>

<!-- MODAL - ADD NEW MENU -->
<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Menu</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <!--FORM-->
              <form class="form-horizontal" method="post" action="a_menu_save.php" enctype='multipart/form-data'>
                 
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Menu Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="menu" id="title" placeholder="Menu Name" required>
                      </div>
                  </div> 
            
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="title">Category</label>
                      <div class="col-lg-8"> 
                        <select class="form-control select2" id="exampleSelect1" name="subcat" required>
                         <?php
                            include('includes/dbcon.php');

                              $result = mysqli_query($con,"SELECT * FROM subcategory ORDER BY subcat_name"); 
                                  while ($row = mysqli_fetch_assoc($result)){

                                ?>
                                <option value="<?php echo $row['subcat_name'];?>"><?php echo $row['subcat_name'];?></option>
                        <?php } ?>
                        </select>
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="control-label col-lg-2" for="title">Price</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="price" id="title" placeholder="Price" required>
                      </div>
                  </div> 
   
                  <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-6">
                        <button type="submit" class="btn btn-outline-primary">Save</button>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-hidden="true">Close</button>
                       </div>
                  </div>
              </form>
            </div>
            
        </div>
    </div>
</div>

<!-- FOOTER --> 
<?php include 'a_footer.php';?>

<!-- ADMIN SCRIPT PHP -->
 <?php include 'a_script.php';?>
</body>
</html>