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
    <title>ArtLock</title>

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
	<h2 class="h22">Contact US</h2>
    <form action="" method="post" name="f1">
		<div class="form-group">
			<label for="first">Name :</label>
			<input type="text" class="form-control" id="first" name="first" placeholder="Enter First Name" required>
		</div>
		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" class="form-control" id="email" name="mail" placeholder="Enter email" required>
		</div>
		<div class="form-group">
			<label for="mob">Mobile Number :</label>
			<input type="text" class="form-control" id="mob" name="num" placeholder="Enter Mobile Number" required  pattern="\d*" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "10">
		</div>
		<div class="form-group">
			<label for="sel1">Category :</label>
			<select class="form-control" id="sel1" name="sex" required>
				<option value="" hidden>------Select------</option>
				<option value="">Art</option>
				<option value="">Payment</option>
				<option value="">Administration</option>
				<option value="">Complains</option>
				<option value="">Other</option>
			</select>
		</div>
		<div class="ra">
			<div class="radios">
        		<input type="radio" id="priority-low" value="Low" name="priority" checked>
                <label class="a1" for="priority-low">Low Priority</label>
            </div>
            <div class="radios">
                <input type="radio" id="priority-normal" value="Normal" name="priority">
                <label class="a1" for="priority-normal">Normal Priority</label>
            </div>
            <div class="radios">
        		<input type="radio" id="priority-high"  value="High" name="priority">
                <label class="a1" for="priority-high">High Priority</label>
            </div>
		</div>
		<div class="12u$">
                <textarea name="contact-message" id="contact-message" placeholder="Enter your message" rows="6"></textarea>
            </div>
        <b/>
        <b/>
		
		<button type="submit" class="button_special" name="SubmitButton" >Send Massage</button>
	</form>
	
    </section>
	</div>


<?php    
	if(isset($_POST['SubmitButton'])){ //check if form was submitted
		$frm=$_POST['contact-email'];
		$email="mayuri.infospace@gmail.com";
		$sub="You receive a query from Online Artwork & Fine Art";
		$mes="Messege From Online Artwork & Fine Art Contact form \n 
            Name: ".$_POST['contact-name']."\n
            Category: ".$_POST['category']."\n 
            Priority: ".$_POST['priority']."\n 
            Copy: ".$_POST['copy']."\n 
            Message: ".$_POST['contact-message'];

			$ml= mail($email, $sub, $mes, "From:".$frm);
				if($ml){
					echo "<script type='text/javascript'>alert('Thanks for messaging us.\\n We will get back to you soon.'); window.location.assign('index.php?page=contactus');</script>";
				}
				else{
					echo "<script type='text/javascript'>alert('Please Try Again Later.');window.location.assign('index.php?page=contactus');</script>";
				}

		}    
?>
</body>
</html>