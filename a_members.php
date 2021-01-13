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
  <title>Members</title>
  
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
	<h2 class="title">Member</h2>  
	<a href="#addModal" class="btn btn-outline-primary" id="Add" data-toggle="modal">Add New Member</a>
	<div class="clearfix"></div>             

	<!-- TABLE -->
	<div class="page-tables">
                <div class="table-responsive table-hover table-striped" >
                  <table id="dt" cellpadding="5" cellspacing="5" id="data-table" width="100%" align="center">
                    <thead>
                      <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Update</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('includes/dbcon.php');

    $query=mysqli_query($con,"select * from member order by member_last")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['member_id'];
        $last=$row['member_last'];
        $first=$row['member_first'];
        $contact=$row['member_contact'];
        $address=$row['member_address'];
        $status=$row['member_status'];
        if ($status=="active") $flag="success";else $flag="danger";
?>                      
                      <tr>
                        <td><?php echo $last;?></td>
                        <td><?php echo $first;?></td>
                        <td><?php echo $contact;?></td>
                        <td><?php echo $address;?></td>
                        <td><span class="label label-<?php echo $flag;?>"><?php echo $status;?></span></td>
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
<!-- MODAL -->
<div id="update<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Member Details</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="height:550px">
              <!--FORM-->
              <form class="form-horizontal" method="post" action="a_member_update.php">

                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Last Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="last" id="title" placeholder="Last Name" value="<?php echo $last;?>">
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="control-label col-lg-4" for="username">First Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="first" id="username" placeholder="First Name" value="<?php echo $first;?>">
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="control-label col-lg-4" for="password">Contact</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="contact" id="password" placeholder="contact number" value="<?php echo $contact;?>">
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="control-label col-lg-6" for="password">Complete Address</label>
                      <div class="col-lg-8"> 
                        <textarea class="form-control" name="address" id="password" placeholder="complete address"><?php echo $address;?></textarea>
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="control-label col-lg-4" for="password">Status</label>
                      <div class="col-lg-8"> 
                        <select class="form-control" id="exampleSelect1" name="status">
                                <option><?php echo $status;?></option>
                                <option>active</option>
                                <option>inactive</option>
                        </select>
                      </div>
                  </div>                                

                  <div class="form-group">

                      <div class="col-lg-offset-4 col-lg-6">
                        <button type="submit" class="btn btn-outline-primary" name="update">Update</button>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-hidden="true">Close</button>
                       </div>
                  </div>
              </form>
            </div>           
        </div>
    </div>
</div>
   
<!-- MODAL -->
<div id="delete<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Member</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="height:150px">
              <!--FORM-->
              <form class="form-horizontal" method="post" action="a_member_delete.php">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                  <div class="alert alert-danger">
                      Are you sure you want to delete <?php echo $first;?> <?php echo $last;?>?
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

<!-- MODAL - ADD NEW MEMBER -->
<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">             
              <h4 class="modal-title">Add New Member</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <!--FORM-->
              <form class="form-horizontal" method="post" action="a_member_save.php">
                  
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Last Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="last" id="title" placeholder="Last Name" required>
                      </div>
                  </div> 
               
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="username">First Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="first" id="username" placeholder="First Name" required>
                      </div>
                  </div> 
                
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="password">Contact</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="contact" id="password" placeholder="contact number">
                      </div>
                  </div> 
                
                  <div class="form-group">
                      <label class="control-label col-lg-6" for="password">Complete Address</label>
                      <div class="col-lg-8"> 
                        <textarea class="form-control" name="address" id="password" placeholder="complete address"></textarea>
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