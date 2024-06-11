<?php
	include("../connection.php");
   include("header.php");
?> 
<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">
      <?php
         $sql="select * from art_info"; // this is query for displaying all product
         $run=mysqli_query($con,$sql);
         // this table  of all arts 
         echo "<table class='ctable'>
         <tr>
         <th>Art ID:</th>
         <th>Art Name</th>
         <th>Art Category</th>
         <th>Art Price(Rs.)</th>
         <th>Art Discount(Rs.)</th>
         <th>Art Photo</th>
         <th>Art Detail</th>
         <th>Edit</th>
         
         </tr>";
         while($result=mysqli_fetch_array($run)) {
         echo "<tr>
         <td>$result[0]</td>
         <td>$result[1]</td>
         <td>$result[2]</td>
         <td>$result[3]</td>
         <td>$result[4]</td>
         <td><img src='$result[5]' class='img-td'></td>
         <td><div style='width:300px'>$result[6]</div></td>
         <td><a class='button special' href='dledit.php?id=$result[0]' class='button_special'>Edit & Delete</a></td>
         </tr>";
         }
         echo "</table>";
         mysqli_close($con);
         ?>
   </div>
</section>