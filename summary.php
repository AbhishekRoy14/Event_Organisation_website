<?php session_start();
	if(empty($_SESSION['id'])):
	header('Location:index.php');
	endif;
?>


<!DOCTYPE html>
<html lang="en">
	<!-- HEADER PHP -->
	<?php include 'header.php';?>
	
	<body>
	<!-- NAV PHP -->
		<?php include 'navhome.php';?>
		
		<!-- RESERVATION SEARCH QUERY-->
		<section id="reservation" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">                   
                    <div class="col-md-6 col-sm-12">
						
						<div class="col-md-12 col-sm-12">
							<div class="section-title wow fadeInUp" data-wow-delay="0.1s">
								<u>  <h2>Reservation Summary</h2></u></br>		
							</div>			
							
						</div>
						
						<table  class=" col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.8s">

							<?php
								include('includes/dbcon.php');
								$id=$_SESSION['id'];
								$query=mysqli_query($con,"select * from reservation natural join subcategory where rid='$id'")or die(mysqli_error($con));
								$row=mysqli_fetch_array($query);
								$rcode=$row['r_code'];
								$first=$row['r_first'];
								$last=$row['r_last'];
								$contact=$row['r_contact'];
								$address=$row['r_address'];
								$ocassion=$row['r_ocassion'];
								$theme=$row['r_theme'];								
								$payable=$row['payable'];
								$date=$row['r_date'];
								$balance=$row['balance'];								
								$status=$row['r_status'];								
								$time=$row['r_time'];
								$time=$row['r_time'];
								$s_name = $row['subcat_name'];
								
							?>                      
							<tr>
								<td>RCode: </td>
								<td><?php echo $rcode;?></td>
								<td>Event Date: </td>
								<td><?php echo date("M d, Y",strtotime($date));?></td>
							</tr>
							<tr>  
								<td>Name: </td>
								<td><?php echo $last." ,".$first;?></td>
								<td>Time: </td>
								<td><?php echo date("h:i a",strtotime($time));?></td>
							</tr>
							<tr>
								<td>Contact #: </td>
								<td><?php echo $contact;?></td>
								<td>Address: </td>
								<td><?php echo $address;?></td>
							</tr> 
							<tr>
								<td>Ocassion: </td>
								<td><?php echo $ocassion;?></td>
								<td>Theme: </td>
								<td><?php echo $theme;?></td>
								
							</tr>                     
							<tr>  
								<td></td>
								<td></td>
								<td>No. of People: </td>
								<td><?php echo $row['nop'];?></td>
								
							</tr>  
							
							<tr>  
								<td></td>
								<td></td>
								<td>Payable: </td>
								<td>NZ $<?php echo number_format($payable,2);?></td>
							</tr> 
							<tr>  
							<td></td>
							<td></td>
							<td>Mode of Payment: </td>
							<td><?php echo $row['mop'];?></td>
							</tr> 
							
						</table>
							<br>
						<div class=" col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.8s">
							<h4><?php echo $row['subcat_name'];?></h4>
							<span>No. of persons: <?php echo $row['nop'];?> * <?php echo $row['price'];?> = <?php echo $row['payable'];?></span>
							<ul>
							
							<?php
							
							$query1=mysqli_query($con,"select * from subcategory natural join menu where subcat_name='$s_name'")or die(mysqli_error($con));
							while($row1=mysqli_fetch_array($query1))
							{
							?>    
							<li><?php echo  $row1['menu_name'];?></li>
							</ul>
							<?php }?>    
						</div>
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