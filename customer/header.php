<?php
	// Start the session
	session_start();

	$user_id = $_SESSION['uid'];
	$uname = $_SESSION['uname'];
	include("../connection.php");
	
?>

<header class="header">
        <a href="index.php" class="logo">ArtLock</a>
        <nav class="navbar">
            <a href="index.php?id2=<?php echo $user_id;?>">Home</a>
            <a href="cancelb.php?id2=<?php echo $user_id;?>">Cancel booking</a>
            <a href="feedback.php">Feedback</a>
            <div class="dropdown">
				<button class="dropbtn"><i class='bx bxs-user-circle bx-flip-horizontal' ></i><?php echo $uname;?>
				<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="../index.php">Logout</a>
				</div>
			</div>
		</nav>
    </header>