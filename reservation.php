<!DOCTYPE html>
<html lang="en">
	<!-- HEADER PHP -->
<?php include 'header.php';?>

<body>
	<!-- NAV PHP -->
<?php include 'navhome.php';?>

     <!-- ENTERING RESERVATION -->
     <section id="reservation" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">  
                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12" style="padding-top: 20px;">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Create Reservation</h2>
                              </div>
                         </div>

                         <!-- RESERVATION FORM -->
                         <form action="reservation_save.php" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">                             
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="first" placeholder="First name" required>
                              </div>
							  <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="last" placeholder="Last name" required>
                              </div>
							  <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="6" id="cf-message" name="address" placeholder="Address" required></textarea>
								</div>
							  <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-name" name="contact" placeholder="Contact" required>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address" required>
                              </div>
							 <div class="col-md-12 col-sm-12">
								<div class="form-group">
								<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
								<label class="form-check-label" for="invalidCheck2">
								Agree to terms and conditions
								</label>
								</div>
								</div>
							 </div>
                              <div class="col-md-6 col-sm-6">                                  
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Clear</button>
                              </div>
							  <div class="col-md-6 col-sm-6">                                  
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