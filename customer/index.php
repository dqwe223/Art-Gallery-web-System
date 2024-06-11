<?php
	include("../connection.php");
    session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Customer in Artlock</title>

    <!-- css -->
    <link rel="stylesheet" href="cta.css" />
</head>
<body>
    <!-- Header -->
	<?php
		include("header.php");
	?> 
   
    <div class="container-fluid">
    <h2>aaaa</h2>
        <div class="row">
            <?php
            $run=mysqli_query($con, "select * from 	art_info");
            if (mysqli_num_rows($run) >0){	
                // output data of each row
                while($result=mysqli_fetch_array($run)){
                    echo "<div class='artcontent'>
                          <div style='border: 3px solid #000;margin: 30px;text-align: -webkit-center;'>
                    <div>
                    <img src='$result[5]' style='height:230px;' class='img-responsive'>
                    </div>
                <div style='background:#ab6cbb;color:#fff;font-size:16px;font-weight:bold;' class='text-center text-capitalize'>
                <span>$result[1] |   <span style='text-decoration:line-through;'>Less(Rs.):$result[4]</span> | Rs.$result[3]</span></div>
                <div class='product-des' style='background:#000;color:#fff;font-size: 16px;height:50px;overflow-y:hidden;' class='text-center'><span>$result[6]</span></div>
                <div class='text-center'style='background:green;font-size: 20px;'><a href='bookingnow.php?id=$result[0]' style='color:#fff'>Booking Now</a></div>
                    </div>
                </div>";
                 
             }
                     }
             mysqli_close($con);
            ?>
        </div>
    </div>


</body>
</html>