<?php
	include("../connection.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Booking</title>

	 <!-- css -->
	 <link rel="stylesheet" href="cta.css" />
</head>
<body>
	<!-- Header -->
	<?php
		session_start();
		include("header.php");
	?> 
	<?php
		$user_id = $_SESSION['uid'];

		$query = "SELECT * FROM customer_t WHERE c_id='$user_id'";
		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_assoc($result);
		$name=$row['c_fname'];

		$aid=$_GET['id'];
		$run_art=mysqli_query($con,"select * from art_info where art_id=$aid"); //
		$art_result=mysqli_fetch_array($run_art);
		$_SESSION['aart'] = $aid;
	?> 

	<!--this is form for booking-->
<div class="back-img back-img1">
<div class="bg">
	<section class="contact" id="contact">
	<h2>Booking</h2><br>
	<form action="" method="post" name="f1">
		<div class="form-group">
			<label for="a1">Customer Id:</label>
			<input type="number" class="form-control" id="a1" name="custid" placeholder="Enter Id" readonly value="<?php echo $user_id;?>" >
		</div>
		<div class="form-group">
			<label for="a2">Art_Id:</label>
			<input type="number" class="form-control" id="a2" name="arid"  readonly value="<?php echo $aid;?>">
		</div>
		<div class="form-group">
			<label for="a3"> Name:</label>
			<input type="text" class="form-control" id="a3" name="cname" readonly required value="<?php echo $name;?>">
		</div>
		<div class="form-group">
			<label for="a4"> Art_Name:</label>
			<input type="text" class="form-control" id="a4" name="aname" readonly  value="<?php echo $art_result[1];?>">
		</div>
		<div class="form-group">
			<label for="a5">Order_Status:</label>
			<input type="text" class="form-control" id="a5" name="os" readonly value="Available">
		</div>
		<div class="form-group">
			<label for="a6">Delivery_Address:</label>
			<input type="text" class="form-control" id="a6" name="da" placeholder="Enter Address" required>
		</div>
		<div class="form-group">
			<label for="a8">Price(Rs.):</label>
			<input type="number" class="form-control" id="a8" name="price" readonly value="<?php echo $art_result[3];?>">
		</div>
		<div class="form-group">
            <label for="a10">Mode:</label>
            <select class="form-control" name="sel" id="a10" required>
               <option value="">---Select--</option>
               <option value="Cash On Delivery">Cash On Delivery</option>
            </select>
         </div>
		<button type="submit" class="button_special" name="sub">Submit</button>
	</form>
	</section>
</div>
</div>

<!-- Visit : www.mayurik.com -->

<!--End this is form for booking-->
<?php
if ( isset( $_POST[ 'sub' ] ) ){
	$a11=$_POST['custid'];
	$a12=$_POST['arid'];
	$a13=$_POST['cname'];
	$a14=$_POST['aname'];
	$a15=$_POST['os'];
	$a16=$_POST['da'];
	$a18=$_POST['price'];
	$sql = "INSERT INTO booking_info (cust_id, art_id, Name	, bart_name, order_status, delivery_address, bart_date, bart_price) VALUES ('$a11', '$a12', '$a13', '$a14', '$a15','$a16', NOW(), '$a18')"; 
	if (mysqli_query($con, $sql)) {
		$current_baid = mysqli_insert_id($con);
		$_SESSION['baid'] =$current_baid;

   echo "<script>alert('Your Booking has been successfully! You will get your product at home in working day');
	window.location.assign('index.php')
	</script>";
		
} else {
    echo "<script> window.alert('Please try again later.');
   	window.location.assign('index.php')
   </script>";
}
}
mysqli_close($con);
?>


