<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php if(isset($meta['title'])) echo $meta['title']; ?></title>
  <meta content="<?php if(isset($meta['description'])) echo $meta['description']; ?>" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/techieworld.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center">
        <img src="assets/img/techie-logo.png" alt="Techie World">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo base_url('/'); ?>" title="Home">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>about-us" title="About">About</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>portfolio">Portfolio</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">SaaS Applications</a></li>
              <li><a href="#">Digtial Marketing</a></li>
              <li><a href="#">Branding</a></li>
              <li><a href="#">SEO Services</a></li>
              <li><a href="#">Social Media Marketing</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>contact-us">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Hire us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
