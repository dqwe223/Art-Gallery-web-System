<?php
	include("../connection.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ArtLock</title>

    <!-- css -->
    <link rel="stylesheet" href="cta.css" />
</head>
<body>
    <!-- Header -->
	<?php
		include("header.php");
	?> 

    <div class="bg">
    <section class="contact" id="contact">
	<h2 class="h22">Customer FeedBack</h2>
    <form action="" method="post" name="f1">
		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" class="form-control" id="email" name="mail" placeholder="Enter email" required>
		</div>
		<div class="form-group">
			<label for="mob">Mobile Number :</label>
			<input type="text" class="form-control" id="mob" name="num" placeholder="Enter Mobile Number" pattern="\d*" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "10">
		</div>
		<div class="form-group">
			<label for="sel1">Response :</label>
			<select class="form-control" id="sel1" name="res" required>
				<option value="" hidden>------Select------</option>
				<option value="Positive">Positive</option>
				<option value="negative">negative</option>
			</select>
		</div>
        <div class="form-group">
			<label for="sel1">Feedback Type :</label>
			<select class="form-control" id="sel1" name="type" required>
				<option value="" hidden>------Select------</option>
				<option value="Service">Service</option>
				<option value="Time Management">Time Management</option>
                <option value="Quality">Quality</option>
				<option value="Other">Other</option>
			</select>
		</div><br><br>
		<div class="12u$">
                <textarea name="mbox" id="contact-message" placeholder="Enter your message" rows="6"></textarea>
            </div>
 
		
		<button type="submit" class="button_special" name="sub" >Send FeedBack</button>
	</form>
	
    </section>
	</div>


<?php
if ( isset($_POST['sub'])){
	$mail=$_POST['mail'];
    $num=$_POST['num'];
	$fres=$_POST['res'];
	$ftype=$_POST['type'];
	$fbox=$_POST['mbox'];
	
	$sql = "INSERT INTO feedback_t(c_email, c_number, f_response, f_type, f_back) VALUES ('$mail', '$num', '$fres', '$ftype', '$fbox')";
	if (mysqli_query($con, $sql)) {
        echo "<script>alert('Thank you ! Your Feedback')</script>";
        echo "<script>window.location.assign('index.php')</script>";
        }
	else {
    echo "<script>alert('error');
	window.location.assign('index.php')</script>";
        }	
}
mysqli_close($con);
?>
</body>
</html>