<?php
   include("connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  
  <title>News and Medias</title>
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
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.1.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
    <!-- CSS Gallery Style -->  
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
  background: url("assets/img/line10.png") ;
  background-position: center;
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
  display: flex;
  height: 600px;
/*  background: magenta;*/
  
}

.inner-containers{
	width: 50%;
	float: right;
	padding: 100px;
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

.gallery {
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-template-rows: repeat(8, 5vw);
  grid-gap: 1.5rem;
  margin: auto;
}

.gallery__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block; 
}

.gallery__item--1 {
  grid-column-start: 2;
  grid-column-end: 4;
  grid-row-start: 1;
  grid-row-end: 3;
}

.gallery__item--2 {
  grid-column-start: 4;
  grid-column-end: 6;
  grid-row-start: 1;
  grid-row-end: 3;
}

.gallery__item--3 {
  grid-column-start: 6;
  grid-column-end: 8;
  grid-row-start: 1;
  grid-row-end: 3;
}

.gallery__item--4 {
  grid-column-start: 2;
  grid-column-end: 4;
  grid-row-start: 3;
  grid-row-end: 5;
}

.gallery__item--5 {
  grid-column-start: 4;
  grid-column-end: 6;
  grid-row-start: 3;
  grid-row-end: 5;
}

.gallery__item--6 {
  grid-column-start: 6;
  grid-column-end: 8;
  grid-row-start: 3;
  grid-row-end: 5;
}

.gallery__item--7 {
  grid-column-start: 2;
  grid-column-end: 4;
  grid-row-start: 5;
  grid-row-end: 7;
}

.gallery__item--8 {
  grid-column-start: 4;
  grid-column-end: 6;
  grid-row-start: 5;
  grid-row-end: 7;
}

.gallery__item--9 {
  grid-column-start: 6;
  grid-column-end: 8;
  grid-row-start: 5;
  grid-row-end: 7;
}

figure {
    transition:transform 0.5s ease;
}

figure:hover {
    -webkit-transform:scale(1.5); /* or some other value */
    transform:scale(1.5);
}


	</style>
</head>

<body>

<?php include("navbar.php");?>
<!-- ======= Header Section ======= -->

    <section id="header-news" class="section-bg">
	<div class="section-title">
		<h1>News<span> and </span>Medias</h1>
	</div>
	</section><!-- End Header Section -->

<!-- =======  ICS ======= -->
<section id="ICS" >
      <div class="containers" data-aos="fade-right">
	  
			<div class="inner-container1" >
		
            <div class="gallery" >
			
                <figure class="gallery__item gallery__item--1">
					<a href="assets/img/gallery/ics.jpeg" class="glightbox">
                    <img src="assets/img/gallery/ics.jpeg" alt="Gallery image 1" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--2">
					<a href="assets/img/gallery/ics2.jpeg" class="glightbox">
                    <img src="assets/img/gallery/ics2.jpeg" alt="Gallery image 2" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--3">
					<a href="assets/img/gallery/ics3.jpeg" class="glightbox">
                    <img src="assets/img/gallery/ics3.jpeg" alt="Gallery image 3" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--4">
					<a href="assets/img/gallery/ics4.jpeg" class="glightbox">
                    <img src="assets/img/gallery/ics4.jpeg" alt="Gallery image 4" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--5">
					<a href="assets/img/gallery/ics5.jpeg" class="glightbox">
                    <img src="assets/img/gallery/ics5.jpeg" alt="Gallery image 5" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--6">
					<a href="assets/img/gallery/ics6.jpeg" class="glightbox">
                    <img src="assets/img/gallery/ics6.jpeg" alt="Gallery image 6" class="gallery__img">
					</a>
                </figure>
				
				  <figure class="gallery__item gallery__item--7">
					<a href="assets/img/gallery/ics7.jpeg" class="glightbox">
                    <img src="assets/img/gallery/ics7.jpeg" alt="Gallery image 7" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--8">
					<a href="assets/img/gallery/ics8.jpeg" class="glightbox">
                    <img src="assets/img/gallery/ics8.jpeg" alt="Gallery image 8" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--9">
					<a href="assets/img/gallery/ics.jpeg" class="glightbox">
                    <img src="assets/img/gallery/ics.jpeg" alt="Gallery image 9" class="gallery__img">
					</a>
                </figure>
				
            </div>
			</div>
			
			
			<div class="inner-containers" >
				<h1>Incident Command System</h1>
				<hr>
				<h6><strong>Date: </strong> 27 May 2021 </h6>
				<h6><strong>Venue: </strong> Menara Bangkok </h6>
				<br>
				<p class="text">
					An online training conducted by Capt Syahfrilhaidi (CEO) and En Mohd Afzaini (COO) on Incident Command System (ICS) Role Specific via Microsoft Teams. The training focused on P process in 5C; command, control, coordination, communication and conduct. There are about 30 participants participated in this training.
				</p> 
				
      <div class="d-flex">
        <a href="assets/img/events/ICS_Video_2021.mp4" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span> Watch Video</span></a>
      </div>
      </div>
	  </section>
	 
  
  
  </div>
			
		</div>
		
</section><!-- End ICS Section -->		

<!-- =======  Iftar ======= -->
<section id="iftar" class="section-bg1">
      <div class="containers" data-aos="fade-left">
	  
			<div class="inner-container1">
		
            <div class="gallery" >
                <figure class="gallery__item gallery__item--1">
					<a href="assets/img/gallery/iftar1.jpeg" class="glightbox">
                    <img src="assets/img/gallery/iftar1.jpeg" alt="Gallery image 1" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--2">
					<a href="assets/img/gallery/iftar1.jpeg" class="glightbox">
                    <img src="assets/img/gallery/iftar1.jpeg" alt="Gallery image 2" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--3">
					<a href="assets/img/gallery/iftar1.jpeg" class="glightbox">
                    <img src="assets/img/gallery/iftar1.jpeg" alt="Gallery image 3" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--4">
					<a href="assets/img/gallery/iftar1.jpeg" class="glightbox">
                    <img src="assets/img/gallery/iftar1.jpeg" alt="Gallery image 4" class="gallery__img">
					</a>
                </figure>
				
				  <figure class="gallery__item gallery__item--5">
					<a href="assets/img/gallery/iftar1.jpeg" class="glightbox">
                    <img src="assets/img/gallery/iftar1.jpeg" alt="Gallery image 5" class="gallery__img">
					</a>
                </figure>
				
				  <figure class="gallery__item gallery__item--6">
					<a href="assets/img/gallery/iftar1.jpeg" class="glightbox">
                    <img src="assets/img/gallery/iftar1.jpeg" alt="Gallery image 6" class="gallery__img">
					</a>
                </figure>
				
				  <figure class="gallery__item gallery__item--7">
					<a href="assets/img/gallery/iftar1.jpeg" class="glightbox">
                    <img src="assets/img/gallery/iftar1.jpeg" alt="Gallery image 7" class="gallery__img">
					</a>
                </figure>
				
				  <figure class="gallery__item gallery__item--8">
					<a href="assets/img/gallery/iftar1.jpeg" class="glightbox">
                    <img src="assets/img/gallery/iftar1.jpeg" alt="Gallery image 8" class="gallery__img">
					</a>
                </figure>
				
				  <figure class="gallery__item gallery__item--9">
					<a href="assets/img/gallery/iftar1.jpeg" class="glightbox">
                    <img src="assets/img/gallery/iftar1.jpeg" alt="Gallery image 9" class="gallery__img">
					</a>
                </figure>
				
            </div>
			</div>
			
			
			<div class="inner-containers" >
				<h1>Manta Services Iftar 2021</h1>
				<hr>
				<h6><strong>Date: </strong> 27 April 2021 </h6>
				<h6><strong>Venue: </strong> Atmosphere 360, KL Tower </h6>
				<br>
				<p class="text">
					An iftar was organized by Manta at Menara Kuala Lumpur 
					so that everyone may sit together, 
					make a memory, and gather Allah's blessings at the time of iftar. 
					May Allah accept our fasts and forgive all of our sins.
				</p>
				
			</div>
			
		</div>
</section><!-- End Iftar Section -->



<!-- =======  Office Opening ======= -->
<section id="office-opening" >
      <div class="containers" data-aos="fade-right">
	  
			<div class="inner-container1" >
		
            <div class="gallery" >
			
                <figure class="gallery__item gallery__item--1">
					<a href="assets/img/gallery/office1.jpg" class="glightbox">
                    <img src="assets/img/gallery/office1.jpg" alt="Gallery image 1" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--2">
					<a href="assets/img/gallery/office2.jpg" class="glightbox">
                    <img src="assets/img/gallery/office2.jpg" alt="Gallery image 2" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--3">
					<a href="assets/img/gallery/office3.jpg" class="glightbox">
                    <img src="assets/img/gallery/office3.jpg" alt="Gallery image 3" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--4">
					<a href="assets/img/gallery/office4.jpg" class="glightbox">
                    <img src="assets/img/gallery/office4.jpg" alt="Gallery image 4" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--5">
					<a href="assets/img/gallery/office5.jpg" class="glightbox">
                    <img src="assets/img/gallery/office5.jpg" alt="Gallery image 5" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--6">
					<a href="assets/img/gallery/office6.jpg" class="glightbox">
                    <img src="assets/img/gallery/office6.jpg" alt="Gallery image 6" class="gallery__img">
					</a>
                </figure>
				
				  <figure class="gallery__item gallery__item--7">
					<a href="assets/img/gallery/office1.jpg" class="glightbox">
                    <img src="assets/img/gallery/office1.jpg" alt="Gallery image 1" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--8">
					<a href="assets/img/gallery/office2.jpg" class="glightbox">
                    <img src="assets/img/gallery/office2.jpg" alt="Gallery image 2" class="gallery__img">
					</a>
                </figure>
				
                <figure class="gallery__item gallery__item--9">
					<a href="assets/img/gallery/office3.jpg" class="glightbox">
                    <img src="assets/img/gallery/office3.jpg" alt="Gallery image 3" class="gallery__img">
					</a>
                </figure>
				
            </div>
			</div>
			
			
			<div class="inner-containers" >
				<h1>Manta Services Office Opening</h1>
				<hr>
				<h6><strong>Date: </strong> 16 November 2020 </h6>
				<h6><strong>Venue: </strong> Menara Bangkok </h6>
				<br>
				<p class="text">
					Manta Services' first office at Menara Bangkok Bank. The office has 1 meeting room, 2 small office rooms, small pantry, 1 toilet and 1 prayer room. There are also small lounge for staff to relax. 
				</p>
			</div>
			
		</div>
</section><!-- End Office Open Section -->		

<?php include("footer.php");?>

</body>
</html>