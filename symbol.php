<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>SHCACI Symbol - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
   
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/shcaci-logo.png" type="image/x-icon">
<link rel="icon" href="assets/images/shcaci-logo.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">
    
        <!-- Main Header -->
        <?php include "header.php"; ?>
        <!-- End Main Header -->
    
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-28.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                   <ul class="bread-crumb style-two">
                        <li><a href="about.php">About SHCACI<i class="flaticon-up-arrow"></i></a></li>
                        <li class="active"><a href="symbol.php">SHCACI Symbol<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="team.php">Faculty and Staff<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="boardmembers.php">SHCACI Board Members<i class="flaticon-up-arrow"></i></a></li>
                    </ul> 
                </div>                    
            </div>
        </div>
    </section>

    <!-- History section -->
    <section class="history-section">
        <div class="auto-container">
            <h3>The School Seal</h3>
            <div class="image" style="margin-left: 29%; margin-right: auto; "><img src="assets/images/shcaci-logo.png" alt=""></div>            
        </div>
        <div class="tab-area">
            <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                        <h4>The Shapes</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                        <h4>The Colors</h4>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="history-area row">
                        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": false, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "2" }, "992" :{ "items" : "3" } , "1200":{ "items" : "4" }, "1500":{ "items" : "5" }}}'>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">15 <sup>th</sup><span> Jun</span></div>
                                    <h4>Journey Started With a <br> Single Truck.</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">24 <sup>st</sup><span> Aug</span></div>
                                    <h4>Journey Started With a <br> Single Truck.</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">18 <sup>th</sup><span> Dec</span></div>
                                    <h4>Creating Powerful Logistics
                                        & Transport Network</h4>
                                    <div class="text">To take a trivial example, which of us
                                        ever undertakes laborious physical too
                                        some advantage.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">14 <sup>th</sup><span> Jan</span></div>
                                    <h4>Worldwide Operations With <br> 26 New Branches</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">21 <sup>st</sup><span> Mar</span></div>
                                    <h4>Introduce New Logo and <br>Brand Identity.</h4>
                                    <div class="text">Mistaken idea of denouncing pleasure and praising pain was born we will give  you a complete account.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">15 <sup>th</sup><span> Jun</span></div>
                                    <h4>Journey Started With a <br> Single Truck.</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">24 <sup>st</sup><span> Aug</span></div>
                                    <h4>Journey Started With a <br> Single Truck.</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">18 <sup>th</sup><span> Dec</span></div>
                                    <h4>Creating Powerful Logistics
                                        & Transport Network</h4>
                                    <div class="text">To take a trivial example, which of us
                                        ever undertakes laborious physical too
                                        some advantage.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">14 <sup>th</sup><span> Jan</span></div>
                                    <h4>Worldwide Operations With <br> 26 New Branches</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">21 <sup>st</sup><span> Mar</span></div>
                                    <h4>Introduce New Logo and <br>Brand Identity.</h4>
                                    <div class="text">Mistaken idea of denouncing pleasure and praising pain was born we will give  you a complete account.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="history-area row">
                        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": false, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "2" }, "992" :{ "items" : "3" } , "1200":{ "items" : "4" }, "1500":{ "items" : "5" }}}'>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">15 <sup>th</sup><span> Jun</span></div>
                                    <h4>Journey Started With a <br> Single Truck.</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">24 <sup>st</sup><span> Aug</span></div>
                                    <h4>Journey Started With a <br> Single Truck.</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">18 <sup>th</sup><span> Dec</span></div>
                                    <h4>Creating Powerful Logistics
                                        & Transport Network</h4>
                                    <div class="text">To take a trivial example, which of us
                                        ever undertakes laborious physical too
                                        some advantage.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">14 <sup>th</sup><span> Jan</span></div>
                                    <h4>Worldwide Operations With <br> 26 New Branches</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">21 <sup>st</sup><span> Mar</span></div>
                                    <h4>Introduce New Logo and <br>Brand Identity.</h4>
                                    <div class="text">Mistaken idea of denouncing pleasure and praising pain was born we will give  you a complete account.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">15 <sup>th</sup><span> Jun</span></div>
                                    <h4>Journey Started With a <br> Single Truck.</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">24 <sup>st</sup><span> Aug</span></div>
                                    <h4>Journey Started With a <br> Single Truck.</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">18 <sup>th</sup><span> Dec</span></div>
                                    <h4>Creating Powerful Logistics
                                        & Transport Network</h4>
                                    <div class="text">To take a trivial example, which of us
                                        ever undertakes laborious physical too
                                        some advantage.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">14 <sup>th</sup><span> Jan</span></div>
                                    <h4>Worldwide Operations With <br> 26 New Branches</h4>
                                    <div class="text">Indignation & dislike men who are so beguiled demoralized by the charms of pleasure of the moment.</div>
                                </div>
                            </div>
                            <div class="history-block col-lg-12">
                                <div class="inner-box">
                                    <div class="date">21 <sup>st</sup><span> Mar</span></div>
                                    <h4>Introduce New Logo and <br>Brand Identity.</h4>
                                    <div class="text">Mistaken idea of denouncing pleasure and praising pain was born we will give  you a complete account.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>

    <!--Main Footer-->
   <?php include "footer.php"; ?>
    <!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>


</html>