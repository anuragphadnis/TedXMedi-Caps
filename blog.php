<?php
  require_once("pdo.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Title, icon, description and keywords -->
  <title>Speakers | TedxMedi-CapsUniversity</title>
  <link rel="shortcut icon" href=" res/images/favicon.ico">
  <meta name="description" content="Speakers for TEDxJMI, x = independently organised TED event. Igniting Minds. This October, at Jamia Millia Islamia.">
  <meta name="keywords" content="TEDx, JMI, Jamia Millia Islamia, New Delhi, event, talks">

  <!-- Social media tags -->
  <!-- Open Graph -->
  <meta property="og:title" content="Speakers for TEDxJMI">
  <meta property="og:description" content="TEDxJMI - Igniting Minds. This October, at Jamia Millia Islamia.">
  <meta property="og:image" content="https://tedxjmi.com/res/images/logos/light-social.jpg">
  <meta property="og:url" content="https://tedxjmi.com/our-team">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@TEDx_JMI">
  <!-- Google+ -->
  <meta itemprop="name" content="Speakers for TEDxJMI">
  <meta itemprop="description" content="TEDxJMI - Igniting Minds. This October, at Jamia Millia Islamia.">
  <meta itemprop="image" content="https://tedxjmi.com/res/images/logos/light-social.jpg">

  <!-- Browser themes -->
  <meta name="theme-color" content="#000">

  <!-- Bootstrap -->
  <link rel="stylesheet" href=" res/css/bootstrap.min.css">

  <!-- Font Icons -->
  <link rel="stylesheet" href=" res/css/font-awesome.min.css">

  <!-- Plugins -->
  <link rel="stylesheet" href=" res/css/flickity.min.css">
  <link rel="stylesheet" href=" res/css/magnific-popup.css">

  <!-- Main styles -->
  <link rel="stylesheet" href=" res/css/main.css">
  <link rel="stylesheet" href=" res/css/style.css">

  <!-- Color skin -->
  <link rel="stylesheet" href=" res/css/color_red.css">
 <!--blog-->
  <link rel="stylesheet" href="res/css/blog.css">
  <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 8]>
  <script src=" res/js/modernizr.min.js"></script>
  <![endif]-->
</head>

<body id="page-top">
  <!-- Navigation Start -->
  <nav id="navigation" class="navbar navbar-fixed-top navbar-dark">
    <div class="container">
      <div class="row">
        <div class="navbar-header col-lg-3">

          <a class="navbar-brand font-family-alt letter-spacing-1 text-extra-large text-uppercase" href="index.html#page-top">
            <img class="logo-navbar-dark pc" src="res/images/logos/TedXMU_dark.png" alt="TEDxMU"/>
            <img class="logo-navbar-white pc"  src="res/images/logos/TedXMU_light.png" alt="TEDxMU"/>
            <img class="logo-navbar-dark mobile" src="res/images/logos/TedXMU_dark2.png" alt="TEDxMU"/>
            <img class="logo-navbar-white mobile"  src="res/images/logos/TedXMU_light2.png" alt="TEDxMU"/>
          </a>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <!-- //.navbar-header -->

        <div id="navbar" class="navbar-collapse collapse col-lg-9 pull-right">
          <ul class="nav navbar-nav font-family-alt letter-spacing-1 text-uppercase font-weight-700">
            <li><a href="index.html#about" class="line-height-unset">About</a></li>
            <li><a href="speakers.html" class="page-scroll">Speakers</a></li>
            <li><a href="team.html" class="line-height-unset">Our Team</a></li>
            <li><a href="#page-top" class="line-height-unset">Blogs</a></li>
            <li><a href="video.php" class="line-height-unset">Videos</a></li>
            <li><a href="sponsors.html" class="line-height-unset">Sponsors</a></li>
            <li><a href="contact.html" class="line-height-unset">Contact Us</a></li>

            <li class="bg-base-color">
              <a href="soon.html" class="line-height-unset width-100">
                Register
              </a>
            </li>
          </ul>
        </div>
        <!-- //.navbar-collapse -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </nav>
  <!-- //Navigation End -->

 <!--// blog start-->
 <section class="blog-section">
 <?php
 $query = $pdo->query("SELECT * FROM blog");
 $i=0;
 while($blogs = $query->fetch(PDO::FETCH_ASSOC))
 {
   if($i==0)
   {
     ?>
     <div class="blog-card">
        <div class="meta">
          <div class="photo" style="background-image: url(<?php echo 'uploads/'.$blogs['image'];?>)"></div>
          <ul class="details">
            <li class="author"><a href="#"><?php echo $blogs['author']; ?></a></li>
            <li class="date"><?php echo $blogs['publish_date']; ?></li>
          </ul>
        </div>
        <div class="description">
          <h1><?php echo $blogs['title']; ?></h1>
          <p> <?php echo $blogs['description'];?></p>
          <p class="read-more">
            <a href="<?php echo $blogs['url'];?>">Read More</a>
          </p>
        </div>
      </div>
      <?php
      $i=1;
   }
   else {
      ?>
      <div class="blog-card alt">
        <div class="meta">
          <div class="photo" style="background-image: url(<?php echo 'uploads/'.$blogs['image'];?>)"></div>
          <ul class="details">
            <li class="author"><a href="#"><?php echo $blogs['author']; ?></a></li>
            <li class="date"><?php echo $blogs['publish_date']; ?></li>
          </ul>
        </div>
        <div class="description">
          <h1><?php echo $blogs['title']; ?></h1>
          <p> <?php echo $blogs['description'];?></p>
          <p class="read-more">
            <a href="<?php echo $blogs['url'];?>">Read More</a>
          </p>
        </div>
      </div>

      <?php
      $i=0;
   }

 }
 ?>
</section>
  <!--blog end-->
  <!-- Section - Event banner start -->
  <section id="event-banner" class="bg-white pull-up">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 text-center">
          <i class="fa fa-clock-o display-block text-base-color title-extra-large-2"></i>
          <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">
            Date &amp; Time
          </span>
          <p class="margin-3 font-family-alt no-margin-bottom no-margin-rl title-small text-gray-dark-2">
            February 15, 2019<br>
            10 AM to 5 PM
          </p>
        </div>
        <!-- //.col-sm-4 -->

        <div class="col-sm-4 xs-margin-8 xs-no-margin-bottom xs-no-margin-rl text-center">
          <i class="fa fa-map-marker display-block text-base-color title-extra-large-2"></i>
          <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">
            Venue
          </span>
          <p class="margin-3 font-family-alt no-margin-bottom no-margin-rl title-small text-gray-dark-2">
            Medi-Caps University
          </p>
        </div>
        <!-- //.col-sm-4 -->

        <div id="banner-registration" class="col-sm-4 xs-margin-8 xs-no-margin-bottom xs-no-margin-rl text-center">
          <a href="/res/insider_guide.pdf" class="btn btn-outline-base-color sm-btn-medium btn-large no-margin-rl">
            <span>Download<br>insider guide</span>
          </a>
        </div>
        <!-- //.col-sm-4 -->
      </div>
      <!-- //.row -->
    </div>
  </section>
  <!-- //Section - Event banner end -->



  <!-- Section - Parallax banner start -->
  <section id="home-bg-parallax" class="height-50 no-padding overflow-hidden width-100">
    <!-- BG Parallax -->
    <div class="bg-parallax bg-overlay-black-5 width-100"></div>

    <div class="display-table height-100 position-absolute position-top position-left width-100">
      <div class="display-table-cell vertical-align-middle">
        <div class="container">
          <div class="row">
            <div class="countdown-timer">
              <div class="days">
                <span class="value">00</span>
                <span class="label">DAYS</span>
              </div>
              <div class="hours">
                <span class="value">00</span>
                <span class="label">HOURS</span>
              </div>
              <div class="minutes">
                <span class="value">00</span>
                <span class="label">MINS</span>
              </div>
              <div class="seconds">
                <span class="value">00</span>
                <span class="label">SEC</span>
              </div>
            </div>
          </div>
          <!-- //.row -->
        </div>
        <!-- //.container -->
      </div>
      <!-- //.display-table-cell -->
    </div>
    <!-- //.display-table -->
  </section>
  <!-- //Section - Parallax banner end -->



  <!-- Footer Start -->
  <footer class="footer bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="footer-logo xs-text-center">
            <img src="res/images/logos/TedXMU_light.png">
          </div>
          <!-- //.footer-logo -->
          <p class="disclaimer xs-text-center">
            This independent TEDx event is operated under license from TED.
          </p>
          <!-- //.disclaimer -->
        </div>
        <!-- //.col-sm-4 -->

        <div class="col-sm-8">
          <div class="footer-social text-right">
            <ul class="list-inline list-unstyled no-margin xs-text-center xs-title-small title-medium">
              <li><a href="https://www.facebook.com/TEDxMedicaps"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/tedxmedicapsuniversity/"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <p class="disclaimer xs-text-center">
              Website By:<br>Anurag Phadnis<br>Pratik Purohit<br>Aman Shah<br>
            </p>
          </div>
          <!-- //.footer-social -->
        </div>
        <!-- //.col-sm-8 -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </footer>
  <!-- //Footer End -->


  <!-- Scroll to top -->
  <a href="#page-top" class="page-scroll scroll-to-top"><i class="fa fa-angle-up"></i></a>


  <!-- jQuery -->
  <script src="res/js/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="res/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="res/js/pace.min.js"></script>
  <script src="res/js/debouncer.min.js"></script>
  <script src="res/js/jquery.easing.min.js"></script>
  <script src="res/js/jquery.inview.min.js"></script>
  <script src="res/js/jquery.matchHeight.js"></script>
  <script src="res/js/isotope.pkgd.min.js"></script>
  <script src="res/js/imagesloaded.pkgd.min.js"></script>
  <script src="res/js/flickity.pkgd.min.js"></script>
  <script src="res/js/jquery.magnific-popup.min.js"></script>
  <script src="res/js/jquery.validate.min.js"></script>

  <!-- BG Parallax JS -->
  <script src="res/js/TweenMax.min.js"></script>
  <script src="res/js/ScrollMagic.min.js"></script>
  <script src="res/js/animation.gsap.min.js"></script>

  <!-- Theme -->
  <script src="res/js/main.js"></script>

  <!-- Countdown -->
  <script src="res/js/jquery.countdown.min.js"></script>
  <script src="res/js/countdown.js"></script>

  </body>

  </html>
