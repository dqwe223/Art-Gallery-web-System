<link rel="stylesheet" href="losty.css" />

<main class="form-container">
    <h1 class="h22">Customer Login</h1>
    <form action="" method="post" name="f1">
        <div class="form-floating">
            <label for="id">Email :</label>
            <input type="email" class="box" name="id" id="id" placeholder="name@example.com" required>
        </div>
        <div class="form-floating">                 
            <label for="pwd">Password :</label>
            <input type="password" class="box" name="pass" id="pass" placeholder="Enter Password" required>
        </div>  
        <button type="submit" class="btn" name="sub">Login</button>
        <p>If you don't have an account?</p><a href="../register.php">Sign Up</a>
    </form>
</main>
    

<?php
include("../connection.php");
session_start();

if ( isset( $_POST[ 'sub' ] ) ) {
	$id = $_POST[ 'id' ];
	$pas = $_POST[ 'pass' ];
	$sql= "select * from customer_t where c_email='".$id."' and c_pwd='".$pas."'"; 
	$result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
	   if($row = mysqli_fetch_assoc($result)) {
            $_SESSION["uid"]=$row["c_id"];
            $_SESSION["uname"]=$row["c_fname"];

            header('Location: ../customer/index.php');
            }
        } 
    else {
        echo "<script> window.alert('Your input is invalid! Please Enter the Correct Id & Password! ')</script>";
        echo "<script>window.location.assign('customer_login.php')</script>";
        }
    }
mysqli_close($con);
?>
