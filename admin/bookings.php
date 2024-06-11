<?php
   include("../connection.php");
	include("header.php");
?>

<div class="back-img back-img1">
   <div class="container-fluid" style="margin-top: 31px;" >
      <br><br><br><br><br><br><h2 class="tab_h2">Table of Bookings</h2>
      <b>
   </div>
   <section>
      <div class="container-fluid" style="
         background-color: #1f242d;>
         <div class="row" style="margin-left:10px;">
         <?php
            $r= 0;
            $sql="select * from booking_info"; // display all details of booking
            $run=mysqli_query($con,$sql);
            echo "<table class='ctable'>
            <tr>
            <th>Booking Art Id</th>
            <th>Customer Id</mmth>
            <th> Art Id</th>
            <th>Name</th>
            <th>Booking Art Name</th>
            <th>Booking Order Status</th>
            <th>Delivery Address</th>
            <th>Booking Art Date</th>
            <th>Booking Art Price</th>	
            <th>Cancel or Close Booking</th>	
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
            <td><a href='bookings.php?id1=$result[0]' class='btn btn-danger'>Cancel</a> </td>
            	</tr>";
            }
            echo "</table>";
            ?>
      </div>
</div>
</section>
</div>

<?php
   if ( isset( $_GET[ 'id1' ] ) ){
   	$a=$_GET['id1'];
   	$up="delete from booking_info where bart_id=$a"; // this is query for cancelling of booking
   	$run=mysqli_query($con, $up);
   	if($run){
   		echo "<script> window.alert('Booking Successfully Canceled..!');
   		window.location.assign('bookings.php')
         </script>";
         }
   	else{
   		 echo "<script>alert('Error');
   		</script>";}
   }
   mysqli_close($con);
   ?>
