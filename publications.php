<?php
   include("connection.php");
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Publications</title>
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
# Publications
--------------------------------------------------------------*/
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

<body>

<?php include("navbar.php");?>

	<!-- ======= Header Section ======= -->

    <section id="publication" class="section-bg">
	<div class="section-title">
		<h1><span>Publications</span></h1>
	</div>
	</section><!-- End Header Section -->

<!-- ======= Publications Section ======= -->
    <section id="publications" class="publications">
      <div class="container" data-aos="fade-up">
	
	<h5>Publications</h5>
	<p class="text">PDF, Slides & Words</p>
	<br>
	

       <table id="customers">
  <tr>
    <th>File Name</th>
    <th>Download</th>
   
  </tr>
  
  <tr>
    <td>MSSB Completed Projects</td>
    <td><center>
		<a href="forms/MSSB Company Profile 2021 (May 2021).pdf" download="MSSB Completed Projects">
			<div class="icon"><i class="bx bxs-download "></i></div>
		</a>
		</center>
	</td>
  </tr>
  <!--
  <tr>
    <td>Berglunds snabbköp</td>
   <td><center>
		<a href="/images/logo.png" download>
			<div class="icon"><i class="bx bxs-download "></i></div>
		</a>
		</center>
	</td>
  </tr>
 -->
 
</table>

        

      </div>
    </section><!-- End Publications Section -->

<?php include("footer.php");?>

</body>

</html>