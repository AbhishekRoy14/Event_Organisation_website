<!-- MENU-->
<section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Our Menus</h2>                   
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/menu-image1.jpg" class="image-popup" title="Breakfast">
                                   <img src="images/menu-image1.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
										<h3>Breakfast<p><i>Served With Orange juice / Hot Drinks</i></p></h3>
										
										
 
                     <?php
  include('includes/dbcon.php');
  $query=mysqli_query($con,"select * from subcategory where subcat_id='11'")or die(mysqli_error($con));
    while ($row=mysqli_fetch_array($query)){
      $subcat_id=$row['subcat_id'];
      $subcat_name=$row['subcat_name'];
?>                       
<?php            
              $querym=mysqli_query($con,"select * from menu natural join subcategory where subcat_id='11' order by menu_name")or die(mysqli_error($con));
              while ($rowm=mysqli_fetch_array($querym)){
                $mid=$rowm['menu_id'];
                $menu=$rowm['menu_name'];                
                $subcat=$rowm['subcat_name'];               
                $price=$rowm['menu_price'];
                
?>                                        
                    <p> - <?php echo $menu=$rowm['menu_name']; ?> </p>                                                 
                     <?php }?>                    
<?php }?>  
                                        </div>
                                        <div class="menu-price">
                                             <span>$25/pp</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
					
					    <div class="col-md-4 col-sm-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/menu-image1.jpg" class="image-popup" title="Lunch">
                                   <img src="images/lunch.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
										<h3>Lunch<p><i>Served With Drinks</i></p></h3>
 
                     <?php
  include('includes/dbcon.php');
  $query=mysqli_query($con,"select * from subcategory where subcat_id='12'")or die(mysqli_error($con));
    while ($row=mysqli_fetch_array($query)){
      $subcat_id=$row['subcat_id'];
      $subcat_name=$row['subcat_name'];
?>                       
<?php            
              $querym=mysqli_query($con,"select * from menu natural join subcategory where subcat_id='12' order by menu_name")or die(mysqli_error($con));
              while ($rowm=mysqli_fetch_array($querym)){
                 $mid=$rowm['menu_id'];
                $menu=$rowm['menu_name'];                
                $subcat=$rowm['subcat_name'];               
                $price=$rowm['menu_price'];
?>                                        
                    <p> - <?php echo $menu=$rowm['menu_name']; ?> </p>                                                 
                     <?php }?>                    
<?php }?>  
                                        </div>
                                        <div class="menu-price">
                                             <span>$75/pp</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
					
					    <div class="col-md-4 col-sm-4">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/menu-image1.jpg" class="image-popup" title="Dinner">
                                   <img src="images/dinner.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
										<h3>Dinner<p><i>Served With Drinks</i></p></h3>
 
                     <?php
  include('includes/dbcon.php');
  $query=mysqli_query($con,"select * from subcategory where subcat_id='13'")or die(mysqli_error($con));
    while ($row=mysqli_fetch_array($query)){
      $subcat_id=$row['subcat_id'];
      $subcat_name=$row['subcat_name'];
?>                       
<?php            
              $querym=mysqli_query($con,"select * from menu natural join subcategory where subcat_id='13' order by menu_name")or die(mysqli_error($con));
              while ($rowm=mysqli_fetch_array($querym)){
                 $mid=$rowm['menu_id'];
                $menu=$rowm['menu_name'];                
                $subcat=$rowm['subcat_name'];               
                $price=$rowm['menu_price'];
?>                                        
                    <p> - <?php echo $menu=$rowm['menu_name']; ?> </p>                                                 
                     <?php }?>                    
<?php }?>  
                                        </div>
                                        <div class="menu-price">
                                             <span>$100/pp</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>

               </div>
          </div>
     </section>