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
  <title>Confirmed Reservation</title>
  <!-- ADMIN HEADER PHP -->
<?php include 'a_header.php';?>
  
</head>

<body>

	<!-- WRAPPER-->
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
	<h2 class="title">Confirmed Reservation</h2>                         
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

    $query=mysqli_query($con,"select * from reservation where r_status='Approved'")or die(mysqli_error($con));
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
		$email=$row['r_email'];
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
                              <a href="#payment" class="btn btn-outline-success" data-target="#payment<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-money bgreen"></i>
                              </a>
                              <a href="#update" class="btn btn-outline-success" data-target="#update<?php echo $id;?>" data-toggle="modal">
								 <i class="fa fa-edit"></i>
                              </a>
                        </td>
                      </tr>
<!-- MODAL -->
<div id="payment<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <option>Approved</option>
                                <option>Finished</option>
                                 <option>Cancelled</option>
                        </select>
                      </div>
                  </div> 

                  <div class="form-group">
                    <label class="control-label col-lg-4" for="title"></label>
                      <div class="col-lg-8"> 
                          <button type="submit" class="btn btn-outline-success" name="update">Update</button>
                          <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>  
                  </div>
              </form>
            </div>           
        </div>
    </div>
</div>

<!-- MODAL -->
<div id="update<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">              
              <h4 class="modal-title">Update Reservation Details</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="height:600px">
              <!--FORM-->
              <form class="form-horizontal" method="post" action="reservation_update.php" enctype='multipart/form-data'>                 
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Last Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="last" id="title" value="<?php echo $last;?>" placeholder="Enter Last Name">
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">First Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="first" id="title" value="<?php echo $first;?>" placeholder="Enter First Name">
                      </div>
                  </div> 
                  <div class="form-group">
                                  <label class="col-lg-4 control-label">Address</label>
                                  <div class="col-lg-8">
                                    <textarea class="form-control" rows="5" placeholder="Complete Address" name="address"><?php echo $address;?></textarea>
                                  </div>
                                </div>    

                                <div class="form-group">
                                  <label class="col-lg-4 control-label">Contact</label>
                                  <div class="col-lg-8">
                                    <input type="text" class="form-control" placeholder="Contact #" name="contact" value="<?php echo $contact;?>" >
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-4 control-label">Email Address</label>
                                  <div class="col-lg-8">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" value="<?php echo $email;?>" >
                                  </div>
                                </div>
                              
                  <div class="col-md-4">
                  </div>  
                  <div class="col-md-8">
                        <button type="submit" class="btn btn-outline-success" name="update">Update</button>
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
         </div>
        </div>
      </div>
    </div>
   <div class="clearfix"></div>
</div>


<!-- FOOTER --> 
<?php include 'a_footer.php';?>



<!-- DELETE RESERVATION QUERY --> 

<?php
    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

  // sending query
  mysqli_query($con,"delete from reservation WHERE rid='$id'")
  or die(mysqli_error());
  echo "<script>document.location='pending.php'</script>";
    }
    ?>
<!-- ADMIN SCRIPT PHP --> 
<?php include 'a_script.php';?>
</body>
</html>