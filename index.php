<!DOCTYPE html>
<html lang="en">
	<!-- HEADER -->
<?php include 'header.php';?>

<body>
	<!-- NAVIGATION -->
    <?php include 'nav.php';?>

     <!-- ABOUT-->
	<?php include 'home.php';?>

	<!-- MENU -->
	<?php include 'menu.php';?>

     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Testimonials</h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p>“We’ve absolutely loved working with REO. REO cares so much about its clients, and staff really goes above and beyond to make sure our needs are met—they’re a joy to work with.”.</p>
                                        <div class="tst-author">
                                             <h4>Sam lee - </h4>
                                             <span>Auckand Central</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>“The spaces were terrific, historic and modern. Perfect mix for our group.”</p>
                                        <div class="tst-author">
                                             <h4>Johnny Stephen - </h4>
                                             <span>Wellington</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Thank you so much for all of your wonderful work on the Chruch reopening event. It was an absolute pleasure to collaborate with you on this project.</p>
                                        <div class="tst-author">
                                             <h4>Jessie White - </h4>
                                             <span>The CHRUCH, Auckland</span>
                                        </div>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>  


     <!-- CONTACT US -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
			   
	<!-- GOOGLE MAP-->
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.3019930279766!2d174.79132511588128!3d-36.90704329047684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d48bf9b457a61%3A0x3208587a8ab57c!2s2%2F64%20Rawhiti%20Road%2C%20One%20Tree%20Hill%2C%20Auckland%201061!5e0!3m2!1sen!2snz!4v1602288552147!5m2!1sen!2snz" allowfullscreen></iframe>
                         </div>
                    </div>    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Contact Us</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="add_message.php" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="fullname" placeholder="Full name" required>
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address" required>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject" required>

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project" required></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>          


     <!-- FOOTER -->
    <?php include 'footer.php';?>

	<!-- SCRIPT -->
     <?php include 'script.php';?>

</body>
</html>