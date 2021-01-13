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
  <title>Pending Reservation</title>
  
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

      <?php include 'a_nav.php';?>

	<div class="container-fluid">
    <div class="row">
	<div class="col-lg-10 col-lg-offset-2">  
	<h2 class="title">Pending Reservation</h2>
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
                        <th>Update</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('includes/dbcon.php');

    $query=mysqli_query($con,"select * from reservation where r_status='Pending'")or die(mysqli_error($con));
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
                              <a href="#update" class="btn btn-outline-success" title="update" data-target="#update<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-edit"></i>
                              </a>  							 
                        </td>

                      </tr>
<!-- MODAL - ADD PAYMENT -->
<div id="update<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Payment</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="height:300px">
              <!--FORM-->
              <form class="form-horizontal" method="post" action="a_payment_save.php" enctype='multipart/form-data'>
                  <input type="hidden" name="id" value="<?php echo $id;?>">

                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Payment</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="amount" id="title" placeholder="Enter Amount">
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Status</label>
                      <div class="col-lg-8"> 
                        <select class="form-control select2" id="exampleSelect1" name="status">
                                <option>Pending</option>
                                <option>Approved</option>
                                <option>Finished</option>
                                 <option>Cancelled</option>
                        </select>
                      </div>
                  </div> 

                  <div class="form-group">
                    <label class="control-label col-lg-4" for="title"></label>
                      <div class="col-lg-8"> 
                          <button type="submit" class="btn btn-outline-primary" name="update">Update</button>
                          <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>  
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

<!-- DELETE RESERVATION PHP QUERY -->

<?php
    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

  // sending query
  mysqli_query($con,"delete from reservation WHERE rid='$id'")
  or die(mysqli_error());
  echo "<script>document.location='a_pending_reservation.php'</script>";
    }
    ?>

<!-- SCRIPT -->
<?php include 'a_script.php';?>
</body>
</html>