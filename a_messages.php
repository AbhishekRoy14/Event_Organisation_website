<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- TITLE -->
  <title>User</title>
  
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
	<h2 class="title">Messages/Feedback</h2>  
	<div class="clearfix"></div>             

	<!-- TABLE -->
             
	<div class="page-tables">
                
                <div class="table-responsive table-hover table-striped" >
                  <table id="dt" cellpadding="5" cellspacing="5" id="data-table" width="100%" align="center">
                    <thead>
                      <tr>
                        <th>Full Name</th>
                        <th>Contact</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Date</th>
                         <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('includes/dbcon.php');

    $query=mysqli_query($con,"select * from message order by date desc")or die(mysqli_error());
      while ($row=mysqli_fetch_array($query)){
        $id=$row['message_id'];
        $fullname=$row['fullname'];
        $email=$row['email'];
        $subject=$row['subject'];
		$message=$row['message'];
        $date=$row['date'];
      

?>                      
                      <tr>
                        <td><?php echo $fullname;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $subject;?></td>
                        <td><?php echo $message;?></td>
                        <td><?php echo date("F d, Y", strtotime($row['date'])); ?></td>
                        <td>                            
                              <a href="#delete" class="btn btn-outline-danger" title="Delete" data-target="#delete<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-trash"></i>
                              </a>                                                      
                        </td>
                      </tr>
					  
<!-- MODAL - DELETE MESSAGE -->
<div id="delete<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">           
              <h4 class="modal-title">Delete Message</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="height:150px">
              <!--FORM-->
              <form class="form-horizontal" method="post">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                  <div class="alert alert-danger">
                      Are you sure you want to delete this message from <?php echo $fullname;?>?
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

<!-- DELETE MESSAGE QUERY -->
<?php
    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

  // sending query
  mysqli_query($con,"delete from message WHERE message_id='$id'")
  or die(mysqli_error());
  echo "<script>document.location='a_messages.php'</script>";
    }
    ?>

<!-- FOOTER --> 
<?php include 'a_footer.php';?>

<!-- ADMIN SCRIPT PHP -->
<?php include 'a_script.php';?>
</body>
</html>