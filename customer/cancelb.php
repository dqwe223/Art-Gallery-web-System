<?php
	include("../connection.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cancel Booking</title>
    
    <!-- css -->
    <link rel="stylesheet" href="cta.css" />
</head>
<body>
   <!-- Header -->
	<?php
		include("header.php");
      $user_id = $_SESSION['uid'];
	?> 
   
<div class="back-img back-img1">
   <div class="container-fluid" style="margin-top: 31px;" >
      <b>
   </div>
   <section class="contact" id="contact">
   <h2 class="h22">Table of Bookings</h2>
      <div class="container-fluid" style="
         background-color: #1f242d;">
         <div class="row" style="margin-left:10px;">
         <?php
            $r = $user_id;
            $sql="select * from booking_info where cust_id=$r"; // display all details of booking
            $run=mysqli_query($con,$sql);
            echo "<table class='ctable'>
            <tr>
            <th>Booking Art Id</th>
            <th>Customer Id</th>
            <th> Art Id</th>
            <th>Name</th>
            <th>Booking Art Name</th>
            <th>Booking Order Status</th>
            <th>Delivery Address</th>
            <th>Booking Art Date</th>
            <th>Booking Art Price</th>	
            <th>Cancel Booking</th>	
            </tr>";
            
            while($result=mysqli_fetch_array($run))
            {
            	echo "<tr>
            	<td>$result[0]</td>
            <td>$result[1]</td>
            <td>$result[2]</td>
            <td>$result[3]</td>
            <td>$result[4]</td>
            <td>$result[5]</td>
            <td>$result[6]</td>
            <td>$result[7]</td>
            <td>$result[8]</td>
            <td><a href='cancelb.php?id1=$result[0]' class='btn btn-danger'>Cancel</a> </td>
            	</tr>";
            }
            echo "</table>";
            ?>
      </div>
</div>
</section>
<!-- Visit : www.mayurik.com -->
</div>

<?php
   if ( isset( $_GET[ 'id1' ] ) ){
   	$a=$_GET['id1'];
   	$up="delete from booking_info where bart_id=$a"; // this is query for cancelling of booking
   	$run=mysqli_query($con, $up);
   	if($run){
   		$upto="delete from payment_info where bart_id=$a";
   		mysqli_query($con, $upto);
   		echo "<script> window.alert('Booking Successfully Canceled..!');
   		window.location.assign('cancelb.php')
         </script>";
   	}
   	else{
   		 echo "<script>alert('Error');

   		</script>";}
   }
   mysqli_close($con);
   ?>
</body>
</html>