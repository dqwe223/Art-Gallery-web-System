<?php
	include("connection.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ArtLock-registration</title>

    <!-- css -->
    <link rel="stylesheet" href="st.css" />
</head>
<body>
    <!-- Header -->
	<?php
		include("header.php");
	?> 

	<div class="bg">
    <section class="contact" id="contact">
	<h2 class="h22">Customer Registration</h2>
    <form action="" method="post" name="f1">
		<div class="form-group">
			<label for="first">First Name:</label>
			<input type="text" class="form-control" id="first" name="first" placeholder="Enter First Name" required>
		</div>
		<div class="form-group"> 
			<label for="last">Last Name:</label>
			<input type="text" class="form-control" id="last" name="last" placeholder="Enter Last Name" required>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="mail" placeholder="Enter email" required>
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password" required>
		</div>
		<div class="form-group">
			<label for="sel1">Sex:</label>
			<select class="form-control" id="sel1" name="sex" required>
				<option value="" hidden>------Select------</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
		</div>
		<div class="form-group">
			<label for="mob">Mobile Number:</label>
			<input type="text" class="form-control" id="mob" name="num" placeholder="Enter Mobile Number" required  pattern="\d*" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "10">
		</div>
		<div class="form-group">
			<label for="add">Complete Address:</label>
			<input type="text" class="form-control" id="address" name="add" placeholder="Enter Address" required>
		</div>
		<div class="form-group">
			<label for="pl">Country:</label>
			<input type="text" class="form-control" id="pl" name="place" placeholder="Enter Country" required>
		</div>
        <b/>
        <b/>
		
		<button type="submit" class="button_special" name="sub" >Register</button>
	</form>
	
    </section>
	</div>
<?php
if ( isset($_POST['sub'])){
	$fn=$_POST['first'];
	$ln=$_POST['last'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$sex=$_POST['sex'];
	$num=$_POST['num'];
	$add=$_POST['add'];
	$place=$_POST['place'];
	$sql = "INSERT INTO customer_t(c_pwd, c_email, c_fname, c_lname, c_sex, c_phone, c_pla, c_address) VALUES ('$pass', '$mail', '$fn', '$ln', '$sex', '$num', '$place', '$add')";
	if (mysqli_query($con, $sql)) {
		echo "<script>alert('Your register has been successfully!')</script>";
	} 
	else {
    echo "<script>alert('This Email Id has used. Please use other Email ID');
	window.location.assign('register.php')</script>";
	}	
}
mysqli_close($con);
?>

</body>
</html>