<?php
   include("connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manta Gallery</title>
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
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  
}

#customers tr:nth-child(even){
	background-color: #f2f2f2;
	 
	}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 15px;
  text-align: center;
  background-color: #98AFC7;
  color: white;
}
</style>
</head>
<body>

<?php include("navbar.php");?>
<!-- ======= Manta Gallery Section ======= -->

	
   <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <h3>Check our <span>Events</span></h3>
         
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-2021">2021</li>
              <li data-filter=".filter-2020">2020</li>
              <li data-filter=".filter-2019">2019</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>2021</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="eventdetails.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		
          <div class="col-lg-4 col-md-6 portfolio-item filter-2019">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>2019</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="eventdetails.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>-->

          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/gallery/iftar1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Iftar </h4>
              <p>2021</p>
              <a href="assets/img/gallery/iftar1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              <a href="event-iftar.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2020">
            <img src="assets/img/gallery/office1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Office Opening</h4>
              <p>2020</p>
              <a href="assets/img/gallery/office1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
              <a href="event-officeopening.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
	<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-2019">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>2019</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="eventdetails.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
	-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/gallery/ics3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Incident Command System ICS</h4>
              <p>2021</p>
              <a href="assets/img/gallery/ics3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
              <a href="event-ics.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
	<!--
          <div class="col-lg-4 col-md-6 portfolio-item filter-2020">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>2020</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="eventdetails.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2020">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>2020</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="eventdetails.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2019">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>2019</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="eventdetails.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>-->

      </div>
    </section><!-- End Portfolio Section -->


<?php include("footer.php");?>  
  
</body>

</html>