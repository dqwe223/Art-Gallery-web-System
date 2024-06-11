<?php
	include("../connection.php");
   include("header.php");
?> 
<div class="back-img back-img1">
	<div class="bg">
    <section class="contact" id="contact">

		<?php
		$r = $_GET[ 'id' ];
		$s = mysqli_query( $con, "select * from art_info where art_id=$r" ); // this is query for fetching detail of product who is updating.
		while ( $row = mysqli_fetch_array( $s ) ) {
			?>
		<h2>Update Product</h2>

		<form action="" method="post" name="f1" enctype="multipart/form-data">

			<div class="form-group">
				<label for="artnm">Art Name:</label>
				<input type="text" class="form-control" id="artnm" name="a1" required value="<?php echo $row[1];?>">
			</div>
			<div class="form-group">
				<label for="sell">Art Category:</label>
				<select class="form-control" id="sel1" name="a2" required>
            <option value="<?php echo $row[2];?>" selected><?php echo $row[2];?></option>
                     <option value="Painting">Painting</option>
                     <option value="Pop Art">Pop Art</option>
                     <option value="Fine Art">Fine Art</option>
                     <option value="Drawing">Drawing</option>
                     <option value="Photography">Photography</option>
                    </select>
			
			</div>
			<div class="form-group">
				<label for="pr">Art Price(Rs.):</label>
				<input type="text" class="form-control" id="pr" name="a3" required value="<?php echo $row[3];?>">
			</div>
			<div class="form-group">
				<label for="dis">Art Discount(Rs.):</label>
				<input type="text" class="form-control" id="dis" name="a4" required value="<?php echo $row[4];?>">
			</div>
			<div class="form-group">
				<label for="ph">Art Photo:</label>
				<input type="text" class="form-control" id="ph" name="a5" readonly value="<?php echo $row[5];?>">
			</div>
			<div class="form-group">
				<label for="det">Art Detail:</label>
				<textarea class="form-control" id="det" name="a6" required>
					<?php echo $row[6];?>
				</textarea>
			</div><br/>
            
			<button type="submit"  class="button_special" name="sub">Update</button>
            <button type="submit"  class="button_special" name="dsub">Delete</button>
		</form>

		<?php } ?>
    </section>
	</div>
<?php
if ( isset( $_POST[ 'sub' ] ) ) {
	$a = $_POST[ 'a1' ];
	$b = $_POST[ 'a2' ];
	$c = $_POST[ 'a3' ];
	$d = $_POST[ 'a4' ];
	$e = $_POST[ 'a5' ];
	$f = $_POST[ 'a6' ];
	$up = "update art_info set art_name='$a', art_category='$b', art_price='$c', art_discount='$d', art_photo='$e',art_detail='$f' where art_id='$r'"; // this query for updating product

	$run = mysqli_query( $con, $up );
	if ( $run ) {
		echo "<script>alert('Art Successfully Updated!');
        window.location.assign('editart.php')
        </script>";
	} else {
		echo "not ok";
	}
}

if ( isset( $_POST[ 'dsub' ] ) ){
    $a=$r;

    $up="delete from art_info where art_id='$a'"; // this is query for removing art detail.
    
$run=mysqli_query($con, $up);
    if($run){
        if(file_exists($g)){
            unlink($g);
        }
        echo "<script>confirm('successfully');
        window.location.assign('editart.php')
        </script>";
    }
    else{
        echo "not ok";
    }
}
mysqli_close( $con );
?>