<?php
   include("connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us</title>
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
  position: relative;
}

.section-bg1 {
  background-color: #f6f9fe;
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
/*--------------------------------------------------------------
# About1
--------------------------------------------------------------*/
.about1-section{
    background: url(assets/img/gallery/office5.jpg) no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 10px 0;
}

.about2-section{
    background: url(assets/img/mantaservices/trainers.png) no-repeat right;
    background-size: 45%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 10px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}

.inner-container2{
    width: 55%;
    float: left;
    background-color: #fdfdfd;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.inner-container h3{
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 700;
	 color: #106eea;
}

.inner-container2 h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.inner-container2 h3{
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 700;
	 color: #106eea;
}

.inner-container2 .ul .li{
	font-size: 30px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.text{
    font-size: 30px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 50px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 20px;
    }
}

.btn-get-started:hover {
  background: #247cf0;
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
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonial {
  padding: 80px 0;
  background: url("assets/img/vision-bg.jpg") no-repeat;
  background-position: center center;
  background-size: cover;
  position: relative;
}

.testimonial::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7);
}

.testimonial .section-header {
  margin-bottom: 40px;
}

.testimonial .testimonial-item {
  text-align: center;
  color: #fff;
}

.testimonial .testimonial-item .testimonial-img {
  width: 100px;
  border-radius: 50%;
  border: 6px solid rgba(255, 255, 255, 0.15);
  margin: 0 auto;
}

.testimonial .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #fff;
}

.testimonial .testimonial-item h4 {
  font-size: 14px;
  color: #ddd;
  margin: 0 0 15px 0;
}

.testimonial .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
  color: rgba(255, 255, 255, 0.4);
  font-size: 26px;
}

.testimonial .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonial .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
 
}

.testimonial .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
  color: #eee;
}

.testimonial .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonial .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.5);
  opacity: 1;
}

.testimonial .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #106eea;
}

@media (min-width: 992px) {
  .testimonial .testimonial-item p {
    width: 80%;
  }
}

figure {
    transition:transform 0.5s ease;
}

figure:hover {
    -webkit-transform:scale(1.5); /* or some other value */
    transform:scale(1.5);
}
/*--------------------------------------------------------------
# Achievement
--------------------------------------------------------------*/
.containers {
  display: flex;
  height: 600px;
/*  background: magenta;*/
  
}

.inner-containers{
	width: 50%;
	float: right;
	padding: 50px;
/*	background: blue;*/
	margin: 2rem auto;
	margin-right: 100px;
}

.inner-containers h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.inner-containers h3{
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 700;
	 color: #106eea;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.inner-container1 {
  width: 50%; 
  margin: 2rem auto;
/*  background: green;*/
  margin-left: 100px;
  
}
</style>
<body>

<?php include("navbar.php");?>

	<!-- ======= About Section ======= -->

    <section id="about" class="section-bg">
	<div class="section-title">
		<h1><span>About Us</span></h1>
	</div>
	</section><!-- End About Section -->
	
	<!-- ======= What We Are sections ======= -->
   <div class="about1-section" data-aos="fade-right">
		 
        <div class="inner-container" >
            <h1>Who We Are</h1>
            <p class="text">
			Manta Services Sdn Bhd (MSSB) is a Private Company founded as of 22 Oct 2019 to be “THE PREFERRED PROVIDER IN HELICOPTER OFFSHORE OPERATIONS AND OFFSHORE EMERGENCY RESPONSE SOLUTIONS”. It is a fully Bumiputera company founded by Capt Syahfrilhaidi and En Mohd Afzaini. They had been in the industry for almost 30 years and actively involved in National Crisis Management, Offshore Security Protocol, Offshore Joint  Aeronautical Search and Rescue and Offshore Joint Maritime Search and Rescue since 2016. PETRONAS has acknowledged  a cost avoidance value of RM 6,000,000 per year through ‘FOCUS RECOGNITION’ program.
			</p>
			<p class="text">
			MSSB is the sole provider in Malaysia which offer the consultation and training services in Offshore Search and Rescue solution. MSSB main target market segments are Oil & Gas Operators (24 PAC’s), Oil & Gas Air Operator (3) and Oil & Gas Marine Operator (25).  
			
            </p>
        </div>
    </div><!-- End What We Are Section -->

<!-- =======  Certificates ======= -->
<section id="Certificates" class="" >
      <div class="container" data-aos="fade-up">
	  
			<div class="row">
			
			
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <figure class="1"><img src="assets/img/iso1.png" class="img-fluid" alt=""></figure>
          </div>
			
	
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <figure class="1"><img src="assets/img/iso2.png" class="img-fluid" alt=""></figure>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <figure class="1"><img src="assets/img/iso3.png" class="img-fluid" alt=""></figure>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <figure class="1"><img src="assets/img/ssm.png" class="img-fluid" alt=""></figure>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <figure class="1"><img src="assets/img/petronas1.png" class="img-fluid" alt=""></figure>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <figure class="1"><img src="assets/img/petronas2.png" class="img-fluid" alt=""></figure>
          </div>

        </div><!-- End Row 1 -->
			
			
		</div>
		
</section><!-- End ICS Section -->		

	<!-- ======= What We Do sections ======= -->
   <div class="about2-section" data-aos="fade-left">
		 
        <div class="inner-container2" >
            <h1>What We Do</h1>
			
			<h3>Consultancy Services</h3>			
				<ul class="text">
					<li>Helicopter Offshore Search Rescue solution Consultancy</li>
					<li>Emergency Response Consultancy</li>
					<li>Aviation / HSES Consultation</li>
				</ul>
			
			
			<h3>Training Services</h3>
				<ul class="text">
					<li>Helicopter Offshore Search and Rescue Training</li>
					<li>Emergency Response Training</li>
					<li>Aviation Training</li>
				</ul>	

			<h3>IFP Solution</h3>
				<ul class="text">
					<li>Distribution of Interactive Flat Panel</li>
					<li>IFP Installation Service</li>
				</ul>
				
			<h3>Other Services</h3>
				<ul class="text">
					<li>Emergency Operation Centre Services</li>
					<li>Event Management</li>							
				</ul>
			
        </div>
    </div><!-- End What We Do Section -->
	
	
	<!-- ======= Vision Mission Section ======= -->
	<section id="visionmission" class="testimonial">
		<div class="container" data-aos="zoom-in">
		
			 <div class="testimonial-item">
			  <div>
					<h2>Vision</h2>
					<br></br>
					
					<p>
						<i class="bx bxs-quote-alt-left quote-icon-left"></i>
						The preferred provider in helicopter offshore operations and offshore emergency response solutions
						<i class="bx bxs-quote-alt-right quote-icon-right"></i>
					</p>
			</div>
			
			<div>
				  <br></br>
               <h2>Mission</h2>
               <br></br>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
					Delivering quality consultancy and training services to our customer
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
			</div>
			
            </div> <!-- End testimonial item -->
            
		</div> 
           
         
    </section><!-- End Vision Mission Section --> 
	
	
	<!-- ======= Collaboration Partner Section ======= -->
    <section id="collaboration" class="clients">
      <div class="container" data-aos="fade-right">

        <div class="section-title">
		<br>
		<br>
		<br>
          <h3><span>Collaboration Partner</span></h3>
		  <br>
          <p>Who are we working with</p>
        </div>
		
		<!-- ========== Row 1 ========== -->
		
		<div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/petronas.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/MKN.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/maritim.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/CAAM.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/airport.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/CGSO.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Row 1 -->
		
		<!-- ========== Row 2 ========== -->
		
		<div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/petronas-carigali.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/enquest.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/SapuraKencana-Logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/Repsol-Logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/carigali-hess.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/vestigo.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Row 2 -->
		
		<!-- ========== Row 3 ========== -->
		
		<div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/cpoc.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/Petrofac-Logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/ExxonMobil-Logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/hess.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/Shell-Logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/kpoc.jpg" class="img-fluid" alt="">
          </div>

        </div><!-- End Row 3 -->
		
		<!-- ========== Row 4 ========== -->
		
		<div class="row justify-content-center ">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center ">
            <img src="assets/img/collab/pttep.png" class="img-fluid" alt="">
          </div>
		  
		  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/collab/lundin.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Row 4 -->
		<br>
		<br>
		<div class="d-flex justify-content-center">
        <a href="collaboration.php" class="btn-get-started scrollto">More</a>
      </div>
		<br>
      </div>
    </section><!-- End Collaboration Partner Section -->

<!-- ======= Achievement Section ======= -->
    <section id="achievement" class="achievement section-bg" data-aos="fade-left">
	 <div class="section-title" >
          <h3><span>Achievement</span></h3>
		  <br>
          <p>Our milestone achievement</p>
        </div>
		
      <div class="containers" >
		<br>
		<div class="inner-container1" >
		<br>
		<br>
		<ul>
			<li><h5>Search and Rescue Exercise (SAREX) Kijal 2016</h5></li>
			<li><h5>Search and Rescue Exercise (SAREX) Camar 01-18</h5></li>
			<li><h5>Kerteh Airport Emergency Plan Exercise 2018</h5></li>
			<li><h5>Security Exercise Manta 01-19</h5></li>
			<li><h5>Search and rescue exercise (SAREX) Camar 02-19</h5></li>
			<li><h5>Mass Rescue Operation Functional Exercise (Exercise Phoenix) 2019</h5></li>
			<li><h5>Offshore Joint Aeronautical Search and Rescue</h5></li>
			<li><h5>Offshore Joint Maritim Search and Rescue</h5></li>
			<li><h5>Offshore Joint Security Protocol</h5></li>
			<li><h5>Offshore Joint Crisis Management Protocol</h5></li>
			<li><h5>MRO Procedure</h5></li>
		</ul>
	    </div>
		<div class="inner-containers" >
			<img src="assets/img/petronas3.png" class="img-fluid" alt="">
		</div>
        

      </div>
    </section><!-- End Achievement Section -->

<?php include("footer.php");?>

</body>

</html>