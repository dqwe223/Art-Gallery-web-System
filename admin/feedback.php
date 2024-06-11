<?php
   include("../connection.php");
	include("header.php");
?> 
<!-- css -->
<link rel="stylesheet" href="stl.css" />



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
            $sql="select * from feedback_t"; // display all details of booking
            $run=mysqli_query($con,$sql);
            echo "<table class='ctable'>
            <tr>
            <th>Feedback Id</th>
            <th>Customer Email</th>
            <th>Mobile Number</th>
            <th>Response</th>
            <th>Feedback Type</th>
            <th>Feedback</th>
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
            </tr>";
            }
            echo "</table>";
            ?>
      </div>
</div>
</section>
</div>