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
  <title>Finished Reservation</title>
  <!-- ADMIN HEADER PHP -->
<?php include 'a_header.php';?>
  
</head>

<body>
	<!-- WRAPPER -->
  <div class="d-flex" id="wrapper">

    <!-- ADMIN SIDEBAR -->
    <?php include 'sidebar.php';?>

    <!-- PAGE CONTENT -->
    <div id="page-content-wrapper">

	<!-- ADMIN NAV PHP -->
     <?php include 'a_nav.php';?>

	<div class="container-fluid">
    <div class="row">
	<div class="col-lg-10 col-lg-offset-2">  
	<h2 class="title">Finished Reservation</h2>                        
	<div class="clearfix"></div>             

	<!-- TABLE -->
             
	<div class="page-tables">
                <div class="table-responsive table-hover table-striped" >
                  <table id="dt" cellpadding="5" cellspacing="5" id="data-table" width="100%" align="center">
                     <thead>
                      <tr>
                        <th>RCode</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Contact</th>
                        <th>Ocassion</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Mode of Payment</th>
                        <th>Balance</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('includes/dbcon.php');

    $query=mysqli_query($con,"select * from reservation where r_status='Finished'")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['rid'];
        $rcode=$row['r_code'];
        $first=$row['r_first'];
        $last=$row['r_last'];
        $contact=$row['r_contact'];
		$ocassion=$row['r_ocassion'];
		$date=$row['r_date'];
        $address=$row['r_address'];
		$balance=$row['balance'];
?>                      
                      <tr>
                        <td><?php echo $rcode;?></td>
                        <td><?php echo $last;?></td>
                        <td><?php echo $first;?></td>
                        <td><?php echo $contact;?></td>
						<td><?php echo $ocassion;?></td>
                        <td><?php echo $date;?></td>
                        <td><?php echo $address;?></td>
                        <td><?php echo $row['mop'];?></td>
                        <td><?php echo $balance;?></td>
                        <td>                            
                              <a href="#delete" class="btn btn-outline-danger" title="delete" data-target="#delete<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-trash"></i>
                              </a>  							 
                        </td>

                      </tr>
<!-- MODAL -->
<div id="delete<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Reservation Details</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="height:150px">
              <!--FORM-->
              <form class="form-horizontal" method="post" action="a_reservation_details_delete.php">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                  <div class="alert alert-danger">
                      Are you sure you want to delete <?php echo $first;?> <?php echo $last;?> reservation details ?
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

<!-- FOOTER --> 
<?php include 'a_footer.php';?>

<!-- ADMIN SCRIPT PHP --> 
<?php include 'a_script.php';?>
</body>
</html>