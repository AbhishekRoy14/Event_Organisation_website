<!DOCTYPE html>
<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>
<html lang="en">
	<!-- HEADER PHP -->
<?php include 'header.php';?>

<body>
	<!-- NAVIGATION PHP -->
<?php include 'navhome.php';?>

     <!-- PAYMENT SECTION -->
     <section id="reservation" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">                    
                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Payment</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="payment_save.php" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">                             
								
								<!-- DATABASE CONNECTION -->
								<?php 
									include('includes/dbcon.php');
$id = $_SESSION['id'];
$query = mysqli_query($con, "SELECT * FROM reservation natural join subcategory WHERE rid='$id'");
      $row=mysqli_fetch_array($query);
       $s_id=$row['subcat_id'];
	   echo"</br>";
	   echo"</br>";
	   echo"<b><u>MENU CHOOSEN</u></b>";
	   echo"</br>";
		echo"</br>";
       echo "<b> - ".$row['subcat_name']."</b>";
      $query1 = mysqli_query($con, "SELECT * FROM subcategory natural join menu WHERE subcat_id='$s_id'");
        while($row1=mysqli_fetch_array($query1))
        {


?>
								
                                   
         <?php }?>  
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
								</br>
								</br>
								</br>
								<label><u>Payment Details</u></label>
                                  <h4>
                                    <?php
                                      echo $row['nop'];
                                      echo " x ";
                                      echo number_format($row['price'],2);
                                      echo " = ";
                                      echo number_format($row['payable'],2);
                                    ?>
                                   </h4> 
                                 </div>
								</div>
								<div>
                                  <label class="col-lg-2 control-label">Mode of Payment</label>
                                  <div class="col-lg-5">
                                    <select class="form-control select2 " id="exampleSelect1" name="mop" placeholder="Select occasion" required>
                                     
                                      <option>Cash</option>
									  <option>Bank Transfer</option>
                                    </select>
                                  </div>
                                </div>  
							
                      
                              <div class="col-md-6 col-sm-6">                                  
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Exit</button>
                              </div>
							  <div class="col-md-6 col-sm-6">                                  
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
                              </div
                         </form>
                    </div>

               </div>
          </div>
     </section>          


     <!-- FOOTER PHP-->
     <?php include 'base.php';?>

	<!-- SCRIPT PHP -->
   <?php include 'script.php';?>

</body>
</html>