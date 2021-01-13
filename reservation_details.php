<!DOCTYPE html>
<html lang="en">
	<!-- HEADER PHP -->
<?php include 'header.php';?>

<body>
	<!-- NAV PHP -->
<?php include 'navhome.php';?>

     <!-- ENTERING RESERVATION DETAILS -->
     <section id="reservation" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">                   
                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Reservation Details</h2>
                              </div>
                         </div>

                         <!-- RESERVATION FORM -->
                         <form action="reservation_details_save.php" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">
								<div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="6" id="cf-message" name="address" placeholder="Address" required></textarea>
								</div>
								<div class="col-md-6 col-sm-6">
								<div class="form-group">
								<label>Date of Event</label>
								<input type="date" id="datepicker" class="form-control" placeholder="Choose" name="date" required>
								</div>
								</div>
								<div class="col-md-6 col-sm-6">
								<div class="form-group">
								<label>Time of Event</label>
								<input type="time" id="time" class="form-control" placeholder="Choose" name="time">
								</div>
								</div>
								<div class="col-md-6 col-sm-6">
							    <select type="text" class="form-control" id="cf-name" name="theme" placeholder="Theme">
								<option>Select Theme</option>
                                      <option>Halloween</option>
                                      <option>Christmas</option>
                                      <option>Star Wars</option>
									  <option>Princess</option>
									  <option>Pirates</option>
									  <option>Disney</option>
									  <option>Sports</option>
									  </select>
                              </div>
                              <div class="col-md-6 col-sm-6">
							    <select type="text" class="form-control" id="cf-name" name="ocassion" placeholder="Occasion">
								 <option>Select Ocassion</option>
                                      <option>Birthday</option>
                                      <option>Christmas Party</option>
                                      <option>Wedding</option>
									  <option>Cocktail Party</option>
                                      <option>Dinner Party</option>
                                      <option>Business Dinner</option>
									  <option>Company Party</option>
									  <option>Funeral</option>
									  <option>First Date</option>
									  </select>
                              </div>
							  <div class="col-md-6 col-sm-6">
                                   <input type="Number" class="form-control" id="cf-name" name="nop" placeholder="Number of people">
                              </div>
							  							 
   <div class="col-md-12 col-sm-12">
       
<?php
include('includes/dbcon.php');

    $query=mysqli_query($con,"select * from subcategory order by subcat_name")or die(mysqli_error($con));
      $count=mysqli_num_rows($query);
      while ($row=mysqli_fetch_array($query)){
        $s_id=$row['subcat_id'];
        $s_name=$row['subcat_name'];
		$sub_price=$row['sub_price'];
       
?>     
					
<?php

  
        
?>                       
                   <div class="col-md-12 col-sm-12">
					<input type="radio" id="inlineCheckbox1" value="<?php echo $s_name;?>" name="subcat_name"> 
						<?php echo $s_name;?> 	-					                                    
						
						<?php echo $sub_price;?>
                   </div>                                
<?php }?>                    
            <?php ?>  
       			  
	</div>						  
                  
                              <div class="col-md-12 col-sm-12">                                  
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Clear</button>
                              </div>
							  <div class="col-md-12 col-sm-12">                                  
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Next</button>
                              </div
                         </form>
                    </div>

               </div>
          </div>
     </section>          


     <!-- FOOTER PHP -->
      <?php include 'base.php';?>

	<!-- SCRIPT PHP -->
   <?php include 'script.php';?>

</body>
</html>