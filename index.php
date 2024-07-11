<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);


    // fetch testimonials
    $testi = mysqli_query($con,"SELECT * FROM testimonials");

    //fetch blog
    $blog = mysqli_query($con,"SELECT * FROM blog ORDER BY id ASC LIMIT 6");


     //fetch activities
    $activities = mysqli_query($con,"SELECT * FROM activities ORDER BY id DESC LIMIT 3");

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping activities most suited for their business.">
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
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->



</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <!--<div class="preloader"><div class="preloader-close">Preloader Close</div></div>-->
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

   <?php include "header.php"; ?>

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">SHCACI</div>
                <div class="text-2">SHCACI</div>
            </div>                
        </div>
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/1.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>SHCACI</h4>
                                <h1>"Nurturing Hearts, Empowering Minds"</h1>
                                <div class="text">At SHCACI, we focus on nurturing students' hearts with Christian values while empowering their minds through rigorous academics and critical thinking skills.</div>
                                <div class="link-box">
                                    <a href="about.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/2.2.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>SHCACI</h4>
                                <h1>"Building Futures, Guided by Faith"</h1>
                                <div class="text">SHCACI is dedicated to building bright futures for students, guided by a strong foundation in faith that prepares them to excel academically and morally in an ever-changing world.</div>
                                <div class="link-box">
                                    <a href="about.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>                               
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/3.3.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>SHCACI</h4>
                                <h1>"Excellence in Education, Rooted in Christian Values"</h1>
                                <div class="text">We strive for excellence in education at SHCACI, grounded in Christian values that shape our students into responsible, compassionate individuals ready to make a positive impact in society.</div>
                                <div class="link-box">
                                    <a href="about.php" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-nav style-two">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i>Prev</span></div>
            <div class="banner-slider-control banner-slider-button-next"><span>Next<i class="far fa-angle-right"></i></span> </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- activities Section -->
    <section class="service-section style-two " style="margin-top: 100px;">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">School Activities</div>
                <h2>Unite, Inspire, Achieve</h2>
            </div>
   
        </div>
    </section>
    
    
    
    <!-- boostrap -->
    <style>
.zoom {
    
 
}

.zoom:hover {
  transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>    
    
      <div class="container pb-5" style="margin-bottom: 50px;">
          <div class="row ">
              <?php
                        while($row=mysqli_fetch_array($activities)){
                    ?>
              <div class="col-md-4 zoom">
                   
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" style="height:270px;" src="admin/images/activities/<?php echo $row['img']; ?>" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><b><a href="single-activities.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></b></h5>
                            </div>
                            <div class="card-footer">
                             
                               <div class="link"><a href="single-activities.php?id=<?php echo $row['id']; ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>    
              </div>
              <?php  } ?>
          </div>
      </div>
    
    <!-- About Section -->
    <section class="about-section" style="background-image: url(assets/images/background/bg-1.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">SHCACI</div>
                        <h2>Providing<br> Quality Education <br> Since 2013</h2>
                        <div class="text" style="text-align: justify;">Shepherd's Haven Christian Academy of Cavite, Inc. is a church school ministry that began its journey in 2013. The academy prides itself on having a dedicated team of eight faculty and staff members, who work together to create a nurturing and effective learning environment. As a micro-school, it offers small class sizes, which allow for more personalized and focused attention to each student. Through God's grace, the academy has managed to operate legally and sustain its mission over the years. Our teachers, known for their kindheartedness and unwavering dedication, are deeply committed to the school's mission and vision. They play a pivotal role in fostering a loving and supportive educational atmosphere. Despite the numerous challenges, including the global pandemic, God's provision has enabled the school to continue its operations uninterrupted. Each year, we witness His faithfulness in sustaining us, ensuring that we can keep providing quality Christian education to our students.</div>
                        <a href="about.php" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src="assets/images/resource/DSC168512.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Whychooseus Section -->
    <section class="Whychooseus-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Why Choose Us</div>
                <h1>Shepherd's Haven Christian Academy of Cavite, Inc. (SHCACI),</h1><br><h4>we are committed to providing a nurturing and faith-based educational environment where students can thrive. Here are key reasons to choose us:<h4/>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">01</span><i class="fab fa-connectdevelop"></i></div>
                        <div class="content">
                            <h4>Holistic Education:</h4>
                            <h6>We emphasize not only academic excellence but also character development, ensuring students grow intellectually, spiritually, and socially.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">02</span><i class="fa fa-book"></i></div> 
                        <div class="content">
                            <h4>Faith-Based Learning:</h4>
                            <h6>Our curriculum integrates Christian values, helping students develop a strong moral foundation and a deeper understanding of their faith.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">03</span><i class="fa fa-users"></i></div>
                        <div class="content">
                            <h4>Qualified and Caring Faculty:</h4>
                            <h6>Our experienced teachers are dedicated to fostering a supportive and engaging learning atmosphere tailored to each student's needs.</h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">04</span><i class="fas fa-pray"></i></div> 
                        <div class="content">
                           <h4>Community and Family Engagement:</h4>
                           <h6>We encourage active involvement of families in the educational process, promoting a strong sense of community and partnership.</h6>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work-process Section -->
    <section class="work-process-section">
        <div class="bg" style="background-image: url(assets/images/background/DSC_57151.jpg);"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title text-center">How We Work</div>
                <h2>We Aim to Contribute Well to <br> Your Child</h2>
            </div>
            <div class="row">
            <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">01</div>
                        <div class="icon"><span class="fa fa-shield-cross"></span></div>
                        <h4>Christ-Centered Education <br> & Holistic Development</h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDwon" data-wow-duration="1500ms">
                        <div class="count">02</div>
                        <div class="icon"><span class="fa fa-medal"></span></div>
                        <h4>Excellence in Academics <br> & Supportive Community </h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">03</div>
                        <div class="icon"><span class="fa fa-books"></span></div>
                        <h4>Ethical Leadership <br> & Collaborative Learning:</h4>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="count">04</div>
                        <div class="icon"><span class="fa fa-chart-line"></span></div>
                        <h4>Continuous Improvement <br> & Passion for Service </h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Covered -->
    <section class="industries-covered" style="background-image: url(assets/images/background/bgschool.png);">
        <div class="background-text" data-parallax='{"x": 100}'>Shepherd's Haven Christian Academy of Cavite, Inc.</div>
        <div class="outer-box side-container">
            <div class="outer-container">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url(assets/images/resource/4207.jpg); height: 100%;">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="fa fa-ribbon"></span></div>
                                <h4>10th Foundation Day Celebrations</h4>
                                <div class="text">Foundation Day commemorates the establishment of an organization, institution, or community. Celebrated annually with ceremonies, speeches, and festivities, it recognizes the founding date, history, achievements, and progress made since inception.</div>
                                <!--<div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url(assets/images/resource/DSC1194.JPG); height: 100%;">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="fa fa-medal"></span></div>
                                <h4>Graduation Day</h4>
                                <div class="text">Graduation Day marks the completion of a phase in education, such as high school or college. Students receive diplomas or degrees, often with speeches, caps and gowns, and celebrations. It symbolizes transitioning to the next stage of life, highlighting achievements and new opportunities.</div>
                                <!--<div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url(assets/images/resource/DCS11351.jpg);">
                            </div> 
                            <div class="content">
                                <div class="icon"><span class="fa fa-trophy-alt"></span></div>
                                <h4>GenThink Winners</h4>
                                <div class="text"> The GenThink Academic Quiz Competition is an educational event designed <br> to challenge students on a wide range of academic subjects.. </div>
                                <!--<div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">School Fees</div>
                <h4>Please be advised of the Schedule of Fees for S.Y. 2024-2025.</h4>
                <h6>To know more about our payment options, kindly visit our Accounting Office, or call (046) 238-50.</h6>
            </div>
            <div class="row m-0">
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Nursery 1</div></div>
                        <div class="price">₱ 1,203.75</div>
                        <div class="time">Monthly Payment (TF only) <br> (Aug.24'-Mar.-25) 8 months</div>
                        <div class="price">₱ 2,450.00</div>
                        <div class="time">Periodical Payment (TF only) <br> (Sept. Nov.'24' Jan. & Mar. '25) </div>
                        <ul class="content">
                            <li>Registration </li>
                            <li>School Management System</li>
                            <li>Upon Enrollment</li>
                            <li>Books</li>
                            <li>Tuition Fee (with 10% discount)</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Enroll Now! </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block style-two" style="margin-bottom: 90px;">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(assets/images/resource/pricingbg.png);">
                        <div class="category-wrapper"><div class="category">Kindergarten</div></div>
                        <div class="price">₱ 1,225.00</div>
                        <div class="time">Monthly Payment (TF only) <br> (Aug.24'-Mar.-25) 8 months</div>
                        <div class="price">₱ 2,500.00</div>
                        <div class="time">Periodical Payment (TF only) <br> (Sept. Nov.'24' Jan. & Mar. '25) </div>
                        <ul class="content">
                            <li>Registration </li>
                            <li>School Management System</li>
                            <li>Upon Enrollment</li>
                            <li>Books</li>
                            <li>Tuition Fee (with 10% discount)</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Enroll Now!</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Nursery 2</div></div>
                        <div class="price">₱ 1,203.75</div>
                        <div class="time">Monthly Payment (TF only) <br> (Aug.24'-Mar.-25) 8 months</div>
                        <div class="price">₱ 2,450.00</div>
                        <div class="time">Periodical Payment (TF only) <br> (Sept. Nov.'24' Jan. & Mar. '25) </div>
                        <ul class="content">
                            <li>Registration </li>
                            <li>School Management System</li>
                            <li>Upon Enrollment</li>
                            <li>Books</li>
                            <li>Tuition Fee (with 10% discount)</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Enroll Now! </span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="category-wrapper"><div class="category">Grade 1-2</div></div>
                        <div class="price">₱ 1,324.00</div>
                        <div class="time">Monthly Payment (TF only) <br> (Aug.24'-Mar.-25) 8 months</div>
                        <div class="price">₱ 2,700.00</div>
                        <div class="time">Periodical Payment (TF only) <br> (Sept. Nov.'24' Jan. & Mar. '25) </div>
                        <ul class="content">
                            <li>Registration </li>
                            <li>School Management System</li>
                            <li>Upon Enrollment</li>
                            <li>Books</li>
                            <li>Tuition Fee (with 10% discount)</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Enroll Now!</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block style-two">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(assets/images/resource/handupbg.png);">
                        <div class="category-wrapper"><div class="category">Grade 3</div></div>
                        <div class="price">₱ 1,444.50</div>
                        <div class="time">Monthly Payment (TF only) <br> (Aug.24'-Mar.-25) 8 months</div>
                        <div class="price">₱ 2,940.00</div>
                        <div class="time">Periodical Payment (TF only) <br> (Sept. Nov.'24' Jan. & Mar. '25) </div>
                        <ul class="content">
                            <li>Registration </li>
                            <li>School Management System</li>
                            <li>Upon Enrollment</li>
                            <li>Books</li>
                            <li>Tuition Fee (with 10% discount)</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Enroll Now! </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Grade 4-6</div></div>
                        <div class="price">₱ 1,444.50</div>
                        <div class="time">Monthly Payment (TF only) <br> (Aug.24'-Mar.-25) 8 months</div>
                        <div class="price">₱ 2,940.00</div>
                        <div class="time">Periodical Payment (TF only) <br> (Sept. Nov.'24' Jan. & Mar. '25) </div>
                        <ul class="content">
                            <li>Registration </li>
                            <li>School Management System</li>
                            <li>Upon Enrollment</li>
                            <li>Books</li>
                            <li>Tuition Fee (with 10% discount)</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Enroll Now! </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- Pricing Section 
    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
            </div>
            
        </div>
    </section> -->

    <!-- Facts Section -->
    <section class="facts-section">
        <div class="auto-container">
            <div class="wrapper-box" style="background-image: url(assets/images/resource/1101.png);">
                <div class="shape">
                    <div class="shape-one" style="width: 110px;"><img src="assets/images/icons/teacher-1.png" alt=""></div>
                    <div class="shape-two" style="width: 110px;"><img src="assets/images/icons/teacher-2.png" alt=""></div>
                    <div class="shape-three" style="width: 110px;"><img src="assets/images/icons/teacher-3.png" alt=""></div>
                    <div class="shape-four"><img src="assets/images/icons/icon5.png" alt=""></div>
                    <div class="shape-five"><img src="assets/images/icons/blocks-1.png" alt=""></div>
                </div>
                <div class="sec-title text-center light">
                    <div class="sub-title text-center">Interesting Facts</div>
                    <h2>The Numbers Speak for <br> themselves</h2>
                </div>
                <div class="outer-box">
                    <div class="row">
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/2.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="1120">0</span>
                                    </div>
                                    <div class="text">Happy Students</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/1.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="8">0</span>
                                    </div>
                                    <div class="text">Dedicated Teachers</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="468">0</span>
                                    </div>
                                    <div class="text">Satisfied Parents</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/5.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="11">0</span>
                                    </div>
                                    <div class="text">Years in Education</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/4.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="112">0</span>
                                    </div>
                                    <div class="text">Average Enrollees</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Testimonials</div>
                <h2>1000+ Happy Customers Said</h2>
            </div>
            <div class="theme_carousel owl-theme owl-carousel">
            <?php
                while($row=mysqli_fetch_array($testi)){
            ?>
                <div class="testimonial-block"> 
                    <div class="inner-box">
                        <div class="text"><?php echo $row['descrip']; ?>
                        </div>
                        <div class="author-thumb">
                            <img src="admin/images/testimonial/<?php echo $row['img']; ?>" alt="">
                            <div class="quote"><span class="flaticon-right-quote"></span>
                            </div>
                        </div>
                        <h4><?php echo $row['title']; ?></h4>
                        <div class="designation"><?php echo $row['designation']; ?></div>
                        <div class="rating">
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                        </div>
                    </div>
                </div>
          <?php } ?>
                <!-- End -->
            </div>
        </div>
    </section>



  <!-- Servcies section two -->
        <section class="service-section-two style-two mx-30">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">ACCREDITATIONS</div>
                    <h2>Accredited Excellence, Certified Trust.</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/gentriashall.jpg" alt="">
                                <div class="icon"><img src="assets/images/resource/cdgtaps-2.png" alt=""></div>
                            </div>
                            <div class="content">
                                <h4>City Division Of Gen. Trias Association Of Private Schools (CDGTAPS)</h4>
                                <div class="text">The City Division Of General Trias Association Of Private Schools (CDGTAPS) Aims To Enhance The Quality Of Education In Private Schools Within General Trias By Fostering Collaboration, Sharing Best Practices, And Advocating For The Needs And Interests Of Its Member Institutions.</div>
                                <!--<div class="link">
                                <a href="#" class="readmore-link"><span><i class="flaticon-up-arrow"></i>Read More</span></a>
                            </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="assets/images/resource/seameo.png" alt="">
                                <div class="icon"><img src="assets/images/resource/seameologo.png" alt=""></div>
                            </div>
                            <div class="content">
                                <h4>The Southeast Asian Ministers Of Education Organization (SEAMEO)</h4>
                                <div class="text">SEAMEO's Mission Is To Enhance Regional Understanding, Cooperation And Unity Of Purpose Among Member Countries For A Better Quality Of Life. The Organisation's Highest Policy-Making Body Is The SEAMEO Council, Which Comprises The 11 Southeast Asian Education Ministers.</div>
                                <!--<div class="link">
                                <a href="#" class="readmore-link"><span><i class="flaticon-up-arrow"></i>Read More</span></a>
                            </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- Blog Section -->
    <section class="service-section style-two ">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">News and Updates</div>
                <h2>Keeping Our Community Informed</h2>
            </div>
   
        </div>
    </section>
    
      <div class="container pb-4" style="margin-bottom: 50px;">
          <div class="row ">
              <?php
                        while($row=mysqli_fetch_array($blog)){
                    ?>
              <div class="col-md-4 zoom">
                    <div class="card-deck" style="margin-bottom: 20px;">
                        <div class="card">
                            <img class="card-img-top" style="height:270px;" src="admin/images/blog/<?php echo $row['img']; ?>" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><b><a href="blog-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></b></h5>
                              <p class="card-text" ></p>
                            </div>
                            <div class="card-footer">
                             
                               <div class="link"><a href="blog-details.php?id=<?php echo $row['id']; ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>    
              </div>
              <?php  } ?>
          </div>
      </div>

   
    <!-- Map Section -->
    <section class="map-section">
        <div class="contact-map">
            <?php echo $setting['map'];  ?>
        </div>
    </section> 
    

    <!-- Contact Info section two -->
    <section class="contact-info-section-two">
        <div class="auto-container">
            <div class="nav-tabs-wrapper">
                <div class="nav nav-tabs tab-btn-style-two">
                    <div class="theme_carousel owl-theme owl-carousel">
                    </div>
                </div>
            </div>
            
            <div class="tab-content" style="height: 333px;">
            
                <div class="tab-pane fadeInUp animated active" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span><?php echo $setting['address']; ?></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:<?php echo $setting['phone']; ?>"><?php echo $setting['phone']; ?></a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a style="" href="mail:<?php echo $setting['email']; ?>"><?php echo $setting['email']; ?></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 6.00pm</div>
                                                
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title">
                                <div class="sub-title">Location</div>
                                <h2>Come and visit us!</h2>
                            </div>
                                <a href="https://forms.gle/w9mvQQqsFnnrW5dt6" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Enroll Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include "footer.php"; ?>

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

