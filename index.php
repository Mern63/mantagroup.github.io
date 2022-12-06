<?php
   include("connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/MANTA-LOGO-03.png" rel="icon">
  <link href="assets/img/MANTA-LOGO-03.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.1.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#heros {
  width: 100%;
  height: 90vh;
  background: url("assets/img/hero.png") top center;
  background-size: cover;
  position: relative;
  text-align: center;
}

#heros:before {
  content: "";
  background: rgba(255, 255, 255, 0.8);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#heros .container {
  position: relative;
}

#heros h1 {
  margin: 0;
  font-size: 60px;
  font-weight: 700;
  line-height: 56px;
  color: #234090;
  font-family: "Poppins", sans-serif;
}

#heros h1 span {
  color: #0c2042;
}

#heros h2 {
  color: #28aae1;
  margin: 5px 0 30px 0;
  font-size: 30px;
  font-weight: 600;
}

#heros .btn-get-started {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px;
  border-radius: 4px;
  transition: 0.5s;
  color: #fff;
  background: #106eea;
}

#heros .btn-get-started:hover {
  background: #247cf0;
}

#heros .btn-watch-video {
  font-size: 16px;
  transition: 0.5s;
  margin-left: 25px;
  color: #222222;
  font-weight: 600;
  display: flex;
  align-items: center;
}

#heros .btn-watch-video i {
  color: #106eea;
  font-size: 32px;
  transition: 0.3s;
  line-height: 0;
  margin-right: 8px;
}

#heros .btn-watch-video:hover {
  color: #106eea;
}

#heros .btn-watch-video:hover i {
  color: #3b8af2;
}

@media (min-width: 1024px) {
  #heros {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #heros {
    height: 100vh;
  }
  #heros h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #heros h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
  #heros .btn-get-started, #hero .btn-watch-video {
    font-size: 13px;
  }
}

@media (max-height: 500px) {
  #heros {
    height: 120vh;
  }
}

.btn-get-started:hover {
  background: #247cf0;
}

/*--------------------------------------------------------------
# Grid Gallery
--------------------------------------------------------------*/
*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: inherit; 
}

.containers {
  height: 500px;
  width: 100%;
  position: relative;
  text-align: justify;
  color: white;
}

.containers img{
	height: 100%;
	width: 100%;
	object-fit: cover;
}

.centered-left{
  position: absolute;
  top: 20%;
  right: 60%;
  left: 30%
  transform: translate(-50%, -50%);
}
	
.centered-left h1{
    margin-bottom: 30px;
    margin-left: 100px;
    font-size: 60px;
    font-weight: 900;
}

.centered-left h3{
    margin-bottom: 20px;
    font-size: 20px;
    font-weight: 700;
	 color: #106eea;
}

.centered-left p{
    font-size: 15px;
    color: white;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
    margin-left: 100px;
}

.btn-get-started {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px;
  border-radius: 4px;
  transition: 0.5s;
  color: #fff;
  background: #106eea;
   margin-left: 100px;
}

</style>
<body>

<?php include("navbar.php");?>

  <!-- ======= Hero Section ======= -->
  <section id="heros" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Manta Group</h1>
      <h2>"Integration, innovation & inspiration towards excellence"</h2>
	  <!--
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
	  -->
	  <br>
	  
    </div>
  </section><!-- End Hero -->

  <main id="main">
 
<div class="containers" >
	  <img src="assets/img/Banner6.png" >
		<div class="centered-left" >
		<h1>Who We Are</h1>
		
		<p>Manta Services Sdn Bhd (1347613-P) is a private company that is fully bumiputera and opted to be the preferred provider in helicopter offshore operations and offshore emergency response solutions.</p>
		<a href="about-us.php" class="btn-get-started scrollto"> Read More</a>
		</div>
		
</div>
<div class="containers" >
	  <img src="assets/img/Banner7.png" >
		<div class="centered-left" >
		<h1>What We Do</h1>
		
		<p>We are the sole provider in Malaysia which offer the consultation and training services in Offshore Search and Rescue solution, and other services including Helicopter Emergency Medical Service, Search & Rescue Service and <a href="http://www.manta-horion.com/">Interactive Flat Panel.</a></p>
		<a href="solution.php" class="btn-get-started scrollto"> Read More</a>
		</div>
</div>

<div class="containers" >
	  <img src="assets/img/Banner8.png" >
	  <div class="centered-left" >
		<h1>Collaboration Partners</h1>
		
		<p>Our working partners nationwide include MKN, CAAM, MMEA, PETRONAS, PAC etc.</p>
		<a href="collaboration.php" class="btn-get-started scrollto"> Read More</a>
		</div>
</div>

<div class="containers" >
	  <img src="assets/img/Banner3.png" >
	  <div class="centered-left" >
		<h1>Achievements</h1>
		
		<p>Our great achievements are solely based on our vision and mission.</p>
		<a href="achievements.php" class="btn-get-started scrollto"> Read More</a>
		</div>
</div>
		
    <!-- ======= More on Manta Services Section ======= -->
    <section id="more" class="portfolio">
      <div class="container" >

        <div class="section-title">
          <h3>More on <span>Manta Services</span></h3>
        </div>
	
	
        <div class="row portfolio-container" >

          <div class="col-lg-4 col-md-6 portfolio-item filter-card ">
			<a href="latestnews.php">
            <img src="assets/img/event.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>News and Medias</h4></a>
			  <p>Photos and Videos</p>
              <a href="latestnews.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
			<a href="publications.php">
            <img src="assets/img/publications.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Publications</h4></a>
              <p>Past Projects and e-Catalogue</p>
              <a href="publications.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
		   <a href="contact.php">
            <img src="assets/img/address.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Contact Us</h4></a>
              <p>Address, Email and Contact number</p>
              <a href="contact.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		
		

        </div>

      </div>
      
    </section><!-- End More on Manta Services Section -->
    
  </main><!-- End #main -->

<?php include("footer.php");?>

</body>

</html>