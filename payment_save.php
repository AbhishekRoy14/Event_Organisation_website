<!-- UPDATING RESERVATION AND DISPLAYING RESERVATION INFORMATION -->

<?php 
session_start();
include('includes/dbcon.php');
	
	$id = $_SESSION['id'];
	$mop = $_POST['mop'];

		mysqli_query($con,"UPDATE reservation SET mop='$mop',r_status='pending' where rid='$id'")or die(mysqli_error($con)); 

$query = mysqli_query($con, "SELECT * FROM reservation natural join subcategory WHERE rid='$id'");
      $row=mysqli_fetch_array($query);
        $rcode=$row['r_code'];
        $first=$row['r_first'];
        $last=$row['r_last'];
        $contact=$row['r_contact'];
        $address=$row['r_address'];
        $email=$row['r_email'];
        $date=$row['r_date'];
        $balance=$row['balance'];
        $payable=$row['payable'];
        $ocassion=$row['r_ocassion'];
        $status=$row['r_status'];
        $theme=$row['theme'];
        $time=$row['r_time'];
        $time=$row['r_time'];
        $s_name = $row['subcat_name'];

    ini_set( 'display_errors', 1 );
    
    error_reporting( E_ALL );
    
    $from = "reo@gmail.com";
    
    $to = $email;
    
    $subject = "Reservation Details";
    
    $message = "Dear $first $last. Below are your reservation details to REO<br>
    	Reservation Code: $rcode
    	Event Date: $date
    	Event Time: $time
    	Address: $address
    	Theme: $theme
    	Ocassion: $ocassion
    	Total Payable: $payable
    	Type: $s_name
    	
    ";
    
    $headers = "From:" . $from;
    
    mail($to,$subject,$message, $headers);            
           echo "<script>document.location='summary.php'</script>";   
    
?> 
	
