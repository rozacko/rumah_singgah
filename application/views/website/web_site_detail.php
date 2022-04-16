<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Rumah Singgah Amanah</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets2/assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/assets/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/assets/css/animate.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/assets/css/style.css">
   <style type="text/css">
        .thumbnail {
          position: relative;
          width: 300px;
          height: 300px;
          overflow: hidden;
        }
        .thumbnail img {
          position: absolute;
          left: 50%;
          top: 50%;
          height: 100%;
          width: auto;
          -webkit-transform: translate(-50%,-50%);
              -ms-transform: translate(-50%,-50%);
                  transform: translate(-50%,-50%);
        }
        .thumbnail img.portrait {
          width: 100%;
          height: auto;
        }
    </style>

</head>

<body>
    
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#" style="color:white;">
                                Rumah Singgah Amanah
                                <!-- <img src="<?php echo base_url() ?>assets2/assets/images/logo.png" alt="Logo"> -->
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="<?php echo base_url() ?>">BACK</a>
                                    </li>                                    
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
    </section>

    <!--====== NAVBAR PART ENDS ======-->

    <!--====== SAIDEBAR PART START ======-->
    <div class="overlay-right"></div>

    <!--====== SAIDEBAR PART ENDS ======-->
    
    <!--====== portfolio PART START ======-->

    <section id="portfolio" class="portfolio-area">
        <div class="container">            
            <div class="row">
               <?php 
                  foreach ($konten as $key => $value) { ?>
                    <div class="col-lg-4">
                              <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                 <div class="portfolio-image thumbnail">
                                     <img src="<?php echo $value['link']; ?>" alt="" width="300px" height="300px">
                                     <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                         <div class="portfolio-content">
                                             <div class="portfolio-icon">
                                                 <a class="image-popup" href="<?php echo $value['link']; ?>" ><i class="lni-zoom-in"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8">
                              <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                 <div class="portfolio-text">
                                    <h4 class="portfolio-title"><a href=""><?php echo $value['konten_judul']; ?></a></h4>
                                    <p class="text"><?php echo $value['konten_deskripsi']; ?></p>
                                 </div>
                              </div>
                           </div>
                <?php }?>  
            </div>
        </div> <!-- container -->
    </section>

    <!--====== portfolio PART ENDS ======-->
    
    <!--====== CONTACT TWO PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">            
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <h4 class="contact-title">Mari diskusi tentang lingkungan</h4>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde repellendus delectus facilis quia consequatur maxime perferendis! Sequi, modi consequatur.</p>
                        <ul class="contact-info">
                            <li><i class="lni-money-location"></i> Elizabeth St, Melbourne, Australia</li>
                            <li><i class="lni-phone-handset"></i> +333 789-321-654</li>
                            <li><i class="lni-envelope"></i> hello@ayroui.com</li>
                        </ul>
                    </div> <!-- contact two -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT TWO PART ENDS ======-->
    
    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">Created by Rumah Singgah Amanah @2022</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo text-center mt-10">
                            <a href="index.html"><img src="<?php echo base_url() ?>assets2/assets/images/logo-2.svg" alt="Logo"></a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5">
                        <ul class="social text-center text-lg-right mt-10">
                            <li><a href="https://facebook.com/uideckHQ"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="https://twitter.com/uideckHQ"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="https://instagram.com/uideckHQ"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul>
                    </div> -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER FOUR PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    <!--====== BACK TOP TOP PART ENDS ======-->  
    <!--====== PART START ======-->
    <!--====== PART ENDS ======-->
    <!--====== jquery js ======-->
    <script src="<?php echo base_url() ?>assets2/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url() ?>assets2/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo base_url() ?>assets2/assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="<?php echo base_url() ?>assets2/assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="<?php echo base_url() ?>assets2/assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url() ?>assets2/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="<?php echo base_url() ?>assets2/assets/js/scrolling-nav.js"></script>
    <script src="<?php echo base_url() ?>assets2/assets/js/jquery.easing.min.js"></script>

    <!--====== wow js ======-->
    <script src="<?php echo base_url() ?>assets2/assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="<?php echo base_url() ?>assets2/assets/js/main.js"></script>

</body>

</html>
