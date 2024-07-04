<?php

    error_reporting(0);
    include "admin/conn.php";

    //fet id
    $id = $_GET['id'];

    //fetch blogs 
    $service = mysqli_query($con,"SELECT * FROM services WHERE id=$id");
    $fetch = mysqli_fetch_array($service);


    //fetch recent post
    $recent = mysqli_query($con,"SELECT * FROM services ORDER BY id DESC");

      //fetch category

    $cat = mysqli_query($con,"SELECT * FROM category ORDER BY id DESC");
    
    
       //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $fetch['title']; ?> - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
\
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
   

    <!-- Main Header -->
<?php include "header.php"; ?>
    <!-- End Main Header -->

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-28.jpg);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                        <div class="title">
                            <h1>School Activities</h1>
                        </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="service.php">Activities</a></li>
                        <li><?php echo $fetch['title']; ?></li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="news-block-four blog-single-post">
                        <div class="inner-box">
                            <div class="image mb-5"><img src="admin/images/services/<?php echo $fetch['img'];  ?>" alt=""></div>
                            <div class="lower-content">
                                <div class="top-content">
                                    <h3><?php echo $fetch['title'];  ?></h3>
                                </div>    
                                <div class="text mb-5">
                                    <p><?php echo $fetch['descrip'];  ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!-- <div class="post-pagination">
                        <div class="prev-post">
                            <h5><i class="flaticon-right-arrow-6"></i> Prev Post</h5>
                            <div class="post" style="background-image: url(assets/images/resource/news-26.jpg);">
                                <div class="content">
                                    <div class="date"><i class="far fa-calendar"></i> 25 Jul 2020</div>
                                    <h4><a href="blog-details.php">Named a Finalist For Year 2019 Best Choice Award</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="all-blog"><a href="blog.php"><i class="flaticon-grid"></i></a></div>
                        <div class="next-post">
                            <h5> Next Post<i class="flaticon-right-arrow-6"></i></h5>
                            <div class="post" style="background-image: url(assets/images/resource/news-26.jpg);">
                                <div class="content">
                                    <div class="date"><i class="far fa-calendar"></i> 14 May 2020</div>
                                    <h4><a href="blog-details.php">Conditions for Applying C / O for <br>Transited Goods</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> -->
                  
                   <!-- <div class="author-box">
                        <div class="image"><img src="assets/images/resource/author-1.jpg" alt=""></div>
                        <h4>Paul Anderson</h4>
                        <div class="text">Denouncing pleasure and praising pain was born and I will give you a work complete all account of the system and expound.</div>
                        <h5><a href="#">Visit: http://my.blog.com</a></h5>
                    </div>
                    <div class="comments-area">
                        <div class="group-title"><h3>Comments</h3></div>
                        
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="assets/images/resource/author-12.jpg" alt=""></div>
                                <div class="comment-inner">
                                    <div class="comment-info">Steven Rich, <span class="date">February 28, 2020 [ 11.00am]</span></div>
                                    <div class="text">On the other hand, we denounce with righteous indignation  dislike men which toil and some great pleasure.</div>
                                    <a class="reply-comment-btn" href="#"><i class="flaticon-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div> -->

                </div>
                <!--<aside class="col-lg-4 sidebar">
                    <div class="blog-sidebar style-two">
                      
                        <div class="widget widget_categories">
                            <h4 class="widget_title">Services</h4>
                            <div class="widget-content">
                                <ul class="categories-list clearfix">

                                  <?php
                                    while($row=mysqli_fetch_array($recent)){
                                ?>
                                    <li><a href="single-service.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?> <i class="flaticon-right-arrow-6"></i> <span><?php echo $counti; ?></span></a></li>
                                 <?php  } ?>
                                </ul>
                            </div>
                        </div>-->
                  
                        <!-- Tag-cloud Widget 
                        <div class="widget tag-cloud-widget">
                            <h4 class="widget_title">Tag Cloud</h4>
                            <ul class="clearfix">
                                <li><a href="#">Cargo</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Ground</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Ocean</a></li>
                                <li><a href="#">Offers</a></li>
                                <li><a href="#">Safety</a></li>
                                <li><a href="#">Shipment</a></li>
                                <li><a href="#">Transportation</a></li>
                                <li><a href="#">Warehouse</a></li>
                            </ul>
                        </div>-->
                        <!-- Advertisement Widget 
                   
                    </div>
                </aside>-->
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