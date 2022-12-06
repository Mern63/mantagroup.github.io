<?php
   include("connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Who we are</title>
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

/*--------------------------------------------------------------
# Bod
--------------------------------------------------------------*/
.bod .bod-item {
  box-sizing: content-box;
  min-height: 320px;
}

.bod .bod-item .bod-img {
  width: 90px;
  border-radius: 50%;
  margin: 40px 0 0 10px;
  position: relative;
  z-index: 2;
  border: 6px solid #fff;
}

.bod .bod-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 45px;
  color: #111;
}

.bod .bod-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0 0 0 45px;
}

.bod .bod-item .quote-icon-left, .bod .bod-item .quote-icon-right {
  color: #d8dee1;
  font-size: 26px;
}

.bod.bod-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.bod .bod-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.bod .bod-item p {
  font-style: italic;
  margin: 0 15px 0 15px;
  padding: 20px 20px 60px 20px;
  background: #f4f6f7;
  position: relative;
  border-radius: 6px;
  position: relative;
  z-index: 1;
}

.bod .owl-nav, .bod .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.bod .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.bod .owl-dot.active {
  background-color: #009cea !important;
}

@media (max-width: 767px) {
  .bod {
    margin: 30px 10px;
  }
}


.card-horizontal {
    display: flex;
    flex: 1 1 auto;
}
</style>
<body>

<?php include("navbar.php");?>

<!-- ======= Manta Section ======= -->
  
    <section id="solutions" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3><span>Who We Are</span></h3> 
        </div>

        <div class="row justify-content-center">
		
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
				<img src="assets/img/mantaservices/klcc.png" class="img-fluid" alt="">
				</div>
				<p>Manta Services Sdn. Bhd (MSSB) was founded on 22 October 2019, in Kuala Lumpur</p>
            </div>
           </div>
		  
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="assets/img/mantaservices/founders.png" class="img-fluid" alt=""></div>
				<p>Founders Capt Syahfrilhaidi and En. Mohd Afzaini bring 30+ years experience</p>
            </div>
          </div>		  
		  
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
			  <img src="assets/img/mantaservices/oilandgas.png" class="img-fluid" alt=""></div>
				<p>Involving in Oil & Gas Operators, Oil & Gas Air Operator and Oil & Gas Marine Operators</p>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon">				
				<img src="assets/img/mantaservices/helicopter.png" class="img-fluid" alt="">
				</div>
				<p>Sole provider in Helicopter Offshore, Search and Rescue, solution consultancy and training services</p>
            </div>
          </div>		  

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon">
				<img src="assets/img/mantaservices/emergency.png" class="img-fluid" alt="">
			  </div>
				<p>Unique service incl. Helicopter Emergency Medical Service, Search & Rescue Service and Interactive Flat Panel</p>
            </div>
          </div>
		  
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon">
				<img src="assets/img/mantaservices/petronas.png" class="img-fluid" alt="">
				<img src="assets/img/mantaservices/mkn.png" class="img-fluid" alt="">
			  </div>
				<p>Working partners nationwide incl. MKN,CAAM, MMEA,PETRONAS, PAC etc</p>
            </div>
          </div>
      </div>
    </section><!-- End who we are Section -->
	
	<!-- ======= What we do sections ======= -->
	
	 <section id="about" class="about">
		<div class="container" data-aos="fade-up">

		<div class="section-title">
           <h3><span>What We Do</span></h3>
        </div>
			
	<div class="container">
		<div class="row">
			<div class="col-6 mt-3" data-aos="fade-right">
				<div class="card shadow">
					<div class="card-horizontal">
						<div class="img-square-wrapper">
							<img src="assets/img/mantaservices/consultation.jpg" width= "200px" height= "200px" alt="Card image cap">
						</div>
						<div class="card-body">
							<h4 class="card-title">Consultancy Services</h4>
							<ul>
							<li>Helicopter Offshore Search<br>Rescue solution Consultancy</br></li>
							<li>Emergency Response Consultancy</li>
							<li>Aviation / HSES Consultation</li>
						
							</ul>
						</div>
					</div>  
				</div>
			</div>
			<div class="col-6 mt-3" data-aos="fade-left">
				<div class="card shadow">
					<div class="card-horizontal">
						<div class="img-square-wrapper">
							<img src="assets/img/mantaservices/trainers.png" width= "200px" height= "200px" alt="Card image cap">
						</div>
						<div class="card-body">
							<h4 class="card-title">Training Services</h4>
							<ul>
								<li>Helicopter Offshore Search and Rescue Training</li>
								<li>Emergency Response Training</li>
								<li>Aviation Training</li>
							</ul>						
						</div>
					</div>
				   
				</div>
			</div>
		</div>
	
		<div class="row">
			<div class="col-6 mt-3" data-aos="fade-right">
				<div class="card shadow">
					<div class="card-horizontal">
						<div class="img-square-wrapper">
							<img src="assets/img/mantaservices/ifp.jpg" width= "200px" height= "200px" alt="Card image cap">
						</div>
						<div class="card-body">
							<h4 class="card-title">IFP Solution</h4>
							
							<ul>
								<li>Distribution of Interactive Flat Panel</li>
								<li>IFP Installation Service</li>
									<br></br>
							</ul>
						</div>
					</div>
				   
				</div>
			</div>
			<div class="col-6 mt-3" data-aos="fade-left">
				<div class="card shadow">
					<div class="card-horizontal">
						<div class="img-square-wrapper">
							<img src="assets/img/mantaservices/eoc.jpg" width= "200px" height= "201px" alt="Card image cap">
						</div>
						<div class="card-body">
							<h4 class="card-title">Other Services</h4>
							<ul>
								<li>Emergency Operation Centre Services</li>
								<li>Event Management</li>
								
							</ul>
						</div>
					</div>
				   
				</div>
			</div>
		</div>
	</div>
	
    </div>
    </section>
	<!-- ======= End What we do Section ======= -->
	
	
	<!-- ======= Vision Mission Section ======= -->
    
		<section id="visionmission" class="testimonial">
		<div class="container" data-aos="zoom-in">

          <div class="swiper-wrapper">
            
			<div class="swiper-slide">
             
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
              </div>
            <!-- End testimonial item -->
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section --> 
     
	
	
	<!-- ======= Collaboration Partner Section ======= -->
    <section id="collaboration" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
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
		
      </div>
    </section><!-- End Collaboration Partner Section -->

<!-- ======= Achievement Section ======= -->
    <section id="achievement" class="achievement section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>Achievement</span></h3>
		  <br>
          <p>Our milestone achievement</p>
        </div>
		
		<br>
		<div class="container" >
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

        

      </div>
    </section><!-- End Achievement Section -->

<?php include("footer.php");?>

</body>

</html>