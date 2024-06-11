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
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>ArtLock</title>

    <!-- css -->
    <link rel="stylesheet" href="st.css" />
</head>
<body>
    <!-- Header -->
	<?php
		include("header.php");
	?> 
    
	<!-- home setion design -->
	<section class="home" id="home">
      
    <!-- Background Video -->
    <div class="banner">
        <video src="images/home/video1.mp4" type="video/mp4" autoplay muted loop></video>
   
      <div class="content"> 
        <div class="title">
            <h1>Welcome to Artlock</h1>
            <p>Step into a world of captivating beauty and immerse yourself in the breathtaking masterpieces that grace our art gallery's virtual halls</p>
            <a href="register.php" class="button">Register Now!</a>
        </div>
      </div>
    </div>
	</section>

<!-- category setion design -->
	<section class="category" id="category">
      <h2 class="heading">Our <span>Category</span></h2>

      <div class="category-container">
        <div class="category-box">
          <img src="images/cat/1.jpg" alt="">
          <div class="category-layer">
            <h4>Painting</h4>
            <p>Painting is the practice of applying paint, pigment, color or other medium to a solid surface.</p>
            <a href="login_dir/customer_login.php"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="category-box">
          <img src="images/cat/2.jpg" alt="">
          <div class="category-layer">
            <h4>Pop Art</h4>
            <p>Pop Art is an art movement that emerged in the United Kingdom and the United States during the mid- to late-1950s.</p>
            <a href="login_dir/customer_login.php"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="category-box">
          <img src="images/cat/3.jpg" alt="">
          <div class="category-layer">
            <h4>Fine Art</h4>
            <p>"Fine Art", traditionally the premier form of visual creativity, is supposedy a drawing-based acivity, </p>
            <a href="login_dir/customer_login.php"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="category-box">
          <img src="images/cat/4.jpg" alt="">
          <div class="category-layer">
            <h4>Drawing</h4>
            <p>Drawing is a visual art that uses an instrument to mark paper or another two-dimensional surface.</p>
            <a href="login_dir/customer_login.php"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="category-box">
          <img src="images/cat/5.jpg" alt="">
          <div class="category-layer">
            <h4>Photography</h4>
            <p>Fine Art photography refers to photographs that are created to fulfill the creative vision of the artist.</p>
            <a href="login_dir/customer_login.php"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="category-box">
          <img src="images/cat/6.jpg" alt="">
          <div class="category-layer">
            <h4>Abstract Art</h4>
            <p>Abstract Art uses visual language of shape, form, color and line to create a composition which may exist with a degree of independence from visual references in the world.</p>
            <a href="login_dir/customer_login.php"><i class='bx bx-link-external'></i></a>
          </div>
        </div>
      </div>
    </section>

	<section class="about" id="about">
      <div class="about-img">
        <img src="images/cat/about.jpg" alt="">
      </div>

      <div class="about-content">
        <h2 class="heading">About <span>Us</span></h2>
        <h3>We are Art Lock</h3>
        <p>Welcome to our art gallery, a haven where imagination meets expression. We are passionate about art and committed to showcasing exceptional talent from around the world. Our gallery is a space where creativity thrives, and every stroke of the brush or sculptor's touch tells a story that captivates the soul.With a curated collection of diverse styles and mediums, we aim to inspire, provoke thought, and evoke emotions through the power of art. </p>
      </div>
    </section>

    <!-- footer -->
	<?php
		include("footer.php");
	?> 
</body>
</html>