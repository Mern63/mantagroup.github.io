<?php
   include("connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Solutions</title>
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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
# Sections General
--------------------------------------------------------------*/
section {
  padding: 20px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f6f9fe;
  background: url("assets/img/line10.png") center ;
  background-size: cover;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h1 {
  margin: 15px 0 15px 0;
  font-size: 50px;
  font-weight: 700;
}

.section-title h1 span {
  color: #106eea;
}

.section-title h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 700;
  padding: 8px 20px;
  margin: 0;
  background: #e7f1fd;
  color: #106eea;
  display: inline-block;
  text-transform: uppercase;
  border-radius: 50px;
}

.section-title h3 {
  margin: 15px 0 0 0;
  font-size: 32px;
  font-weight: 700;
}

.section-title h3 span {
  color: #106eea;
}

.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 600;
}

@media (min-width: 1024px) {
  .section-title p {
    width: 50%;
  }
}

.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}

.paragraph{
    font-size: 15px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
    margin-top: 40px;
  
}

.container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}
</style>

<body>

<?php include("navbar.php");?>

 <!-- ======= Header Section ======= -->

    <section id="solutions" class="section-bg">
	<div class="section-title">
		<h1><span>Solutions</span></h1>
	</div>
	</section><!-- End Header Section -->
	 
	<section id="solution">
      <div class="container" data-aos="fade-up">
	  
	  <h1>What We Do</h1>
	  
	  <p class="paragraph">We are the sole provider in Helicopter Offshore Search and Rescue solution consultancy and training services. There are 8 solutions that we offered. The solutions are <a href="#auditing">auditing</a>, <a href="#consultancy">consultancy</a>, <a href="#document_management">document management</a>, <a href="#event_management">event management</a>, <a href="#IFP">interactive flat panel</a>, <a href="#safety_management">safety management</a>, <a href="#safety&security">safety and security</a>, and <a href="#specialized_training">specialized training</a>. We are also the only distributor of Interactive Flat Panel by Horion brand in Malaysia.</p>

<div class="w3-content" style="max-width:1200px">
  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/audit.png" style="width:100%;cursor:no-drop;" onclick="currentDiv(1)" id="auditing">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/consultancy.png" style="width:100%;cursor:pointer" onclick="currentDiv(2)" id="consultancy">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/document.png" style="width:100%;cursor:no-drop;" onclick="currentDiv(3)" id="document_management">
    </div>
  </div>
  
  <img class="mySlides" src="" style="width:100%;display:none">
  <img class="mySlides" src="assets/img/S1.png" style="width:100%">
  <img class="mySlides" src="" style="width:100%;display:none" >
  
  <div class="w3-row-padding w3-section">
	<div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/event.png" style="width:100%;cursor:pointer" onclick="currentDiv(4)" id="event_management">
    </div>
	<div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/IFP-1.png" style="width:100%;cursor:pointer" onclick="currentDiv(5)" id="IFP">
    </div>
	<div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/safety.png" style="width:100%;cursor:no-drop;" onclick="currentDiv(6)" id="safety_management">
    </div>
  </div>
  
  <img class="mySlides" src="assets/img/s3.png" style="width:100%;display:none">
  <img class="mySlides" src="assets/img/S4.png" style="width:100%;display:none">
  <img class="mySlides" src="" style="width:100%;display:none">
  
  <div class="w3-row-padding w3-section">
	<div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/security.png" style="width:100%;cursor:pointer" onclick="currentDiv(7)" id="safety&security">
    </div>
	<div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/training.png" style="width:100%;cursor:pointer" onclick="currentDiv(8)" id="specialized_training">
    </div>
  </div>
  
  <img class="mySlides" src="assets/img/S5.png" style="width:100%;display:none">
  <img class="mySlides" src="assets/img/S2.png" style="width:100%;display:none">

  
</div>

<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

	  </div>
	 </section> 

<?php include("footer.php");?>	 

</body>

</html>