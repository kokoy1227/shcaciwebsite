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
<title>About Us - <?php echo $setting['site_name']; ?></title>
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
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
  

  
    <!-- End Main Header -->
<?php include "header.php"; ?>
    <!-- Hidden Sidebar 

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>-->
                <!-- PDF Widget 
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>-->
                <!-- Contact Widget -->
           
                <!-- Link Btn 
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>-->
    
    <!--Search Popup
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.php">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>-->

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
                        <h1>About Us</h1>
                    </div>
                   <ul class="bread-crumb style-two">
                        <li class="active"><a href="about.php">About SHCACI<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="history.html">SHCACI Symbol<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="team.php">Faculty and Staff<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="boardmembers.html">SHCACI Board Members<i class="flaticon-up-arrow"></i></a></li>
                    </ul> 
                </div>                    
            </div>
        </div>
    </section>

    <!-- Who we are -->
    <section class="who-we-are-section">
        <div class="top-content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sec-title mb-30">
                            <div class="sub-title">SHCACI</div>
                            <h2>Provide a <br> Christian Quality Education <br> Since 2013</h2>
                        </div>
                        <div class="experience-year">
                            <div class="icon"><i class="flaticon-package-1"></i></div>
                            <div class="content">
                                <h3>11 <span>+ Years</span></h3>
                                <h5>Experience In Education</h5>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                        <div class="image mb-30"><img src="assets/images/faculty.JPG" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="overview">
            <div class="auto-container">
                <div class="wrapper-box">
                    <h2>Global Digital System Corporation has been operating in the USA now, for over 22 years and are part <br>  of a reliable, global integrated network.</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text">
                                <p>We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business..</p>
                                <p>Global Digital System Corporation has been the premiere agency to assist corporations with their global sales, resource, logistic, and import & export needs. Alongside our highly qualified workforce, we believe our track record and amassed relationships not only from our current clientele base, a growing network of over 3000 members, but also our experience as owned by the China, India and USA could be beneficial to any business with interest to expand.</p>
                            </div>
                            <div class="author-info wow fadeInUp" data-wow-duration="1500ms">
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image video-fancybox"><i class="flaticon-play-arrow"></i></a>
                                </div>
                                <div class="signature"><img src="assets/images/sign.PNG" alt=""></div>
                                <div>
                                    <div class="author-title">Abhishek Jain </div>
                                    <div class="designation">CEO & Founder of Global Digital System Corporation </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row m-10">-->
                                <!--Column
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="6.5">0</span><span>k</span>
                                            </div>
                                            <h4>Parcel <br> Delivered</h4>
                                            <h5>Total</h5>
                                        </div>
                                    </div>
                                </div>-->
                                <!--Column
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="3.4">0</span><span>k</span>
                                            </div>
                                            <h5>Air</h5>
                                            <div class="icon"><span class="flaticon-airplane"></span></div>
                                        </div>
                                    </div>
                                </div>-->
                                <!--Column
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"><span class="flaticon-cargo-ship-1"></span></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="1.7">0</span><span>k</span>
                                            </div>
                                            <h5>Ocean</h5>
                                        </div>
                                    </div>
                                </div>-->
                                <!--Column
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="1.4">0</span><span>k</span>
                                            </div>
                                            <h5>Road</h5>
                                            <div class="icon"><span class="flaticon-box-1"></span></div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <!--<div class="image mb-30"><img src="assets/images/faculty.jpg" style="width: 85%;" alt=""></div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Whychooseus section four -->
   <!-- <section class="whychooseus-section-four" style="background-image: url(assets/images/background/bg-23.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <div class="sub-title">Why Choose Us</div>
                <h2> Reasons Why to Choose Our <br> Freight Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-shield"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Trasparent Pricing</h4>
                     
                        <div class="count">01</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-delivery"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>On - Time Delivery</h4>
                        
                        <div class="count">02</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-box"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Real Time Tracking</h4>
                     
                        <div class="count">03</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-24-hours"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>24/7 Online Support</h4>
                       
                        <div class="count">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- History -->
    <section class="about-section" style="background-color: #f8f9fa; margin-bottom: 100px; margin-top: -100px;">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">SHCACI History</div>
                        <h2>Providing<br>Quality Education <br> Since 2013</h2>
                        <div class="text">At Shepherd's Haven Christian Academy of Cavite, Inc. (SHCACI), we have been dedicated to providing quality education since 2013. Our institution is committed to nurturing the intellectual, spiritual, and social development of our students. We offer a comprehensive curriculum that integrates academic rigor with Christian values, ensuring a well-rounded education. Our experienced and caring faculty work tirelessly to create a supportive and engaging learning environment tailored to each student's unique needs. Additionally, we foster a strong sense of community and encourage active family involvement in the educational process.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src="assets/images/resource/DSC1685.JPG" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Principal Message -->
    <section class="about-section" style="background-color: #f8f9fa; margin-bottom: 100px; margin-top: -100px;">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src="assets/images/president.JPG" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">SHCACI President</div>
                        <h2>Mr. Sandy L. Paguirigan</h2>
                        <div class="text">Greetings in the name of the Lord Jesus Christ!
<br><br>
Congratulations to the SHCACI Batch 2024 on this remarkable milestone. Today, as we celebrate with the theme, "Kabataang Pilipino para sa Matatag na Kinabukasan ng Pilipinas," we honor your hard work and the grace of God, along with the support of your parents and the dedication of the SHCACI faculty. You've become God-fearing, academically competent Filipinos ready to lead our nation.
<br><br>
Thank the Lord for guiding you with knowledge and wisdom. Remember, He is with you as you pursue your dreams with trust and faith in Him.
<br><br>
To the SHCACI faculty, your dedication has shaped these young minds both academically and spiritually. May you continue to find joy in your service.
<br><br>
To the parents, your support has been invaluable. Continue to guide your children with love as they enter a new chapter.
<br><br>
As you move forward, strive for excellence and let your faith and determination lead you to a bright future.
<br><br>
God bless us all!
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Principal Message -->
    <section class="about-section" style="background-color: #f8f9fa; margin-bottom: 100px; margin-top: -100px;">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">SHCACI Principal</div>
                        <h2>Ms. Almar C. Apostol</h2>
                        <div class="text">A blessed greeting in the mighty name of our Lord and Savior Jesus Christ!
<br><br>
God has been faithful and true to us all! I thank and praise Him for granting us the favor to complete this School Year 2023-2024.
<br><br>
Congratulations to all parents, guardians, and students for a year marked by God's favor. It is truly a miracle that we overcame the challenges with His personal touch on every family represented by our pupils. Your perseverance and resilience have brought us to the close of another successful academic year.
<br><br>
Thank you and well done to our SHCACI faculty and staff for dedicating this year to the Lord. Your prayers, passion, and perseverance have been recorded in His keeping. He remembers our services and purifies them for His glory. Let us continue to serve the Lord sincerely and with pure motives, confident in His blessings as we follow His will as agents of goodwill in SHCACI and the community.
<br><br>
Above all, glory to God in the Highest for His enablement, wisdom, love, provision, safekeeping, and grace that abound to us all. Without Him, our academic operations as a learning community would not be possible.
<br><br>
Once again, congratulations to everyone for a job well done.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src="assets/images/principal.JPG" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statement -->
    <section class="statement-section pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image"><img src="assets/images/resource/172105.png" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="content" style="height: 100%; padding-bottom: 0px; margin-bottom: -10px;">  
                        <div class="badge"><img src="assets/images/shcaci-logo.png" alt="" style="width: 50%; margin-left: -187px; margin-top: -30px;"></div>
                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Mission Statement</h2>
                                    </div>
                                    <div class="text"><ul>
                                        <li>In Pursuit Of Excellence In Cultivating The Fear Of The Lord In The Life Of The Children To Become Christ-Abiding Leaders With Balanced Learning, Global Competitiveness And Wisdom In Daily Living Geared In The Family, Church, School, And Country As Guarded By God’s Biblical Principles.</li>
                                    </ul></div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Vision Statement</h2>
                                    </div>
                                    <div class="text">To Be A Nurturing Christian School That Provides Quality Christian Education To Our Young Future Leaders.</div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>As A Filipino</h2>
                                    </div>
                                    <div class="text">Shepherd’s Haven Christian Academy Of Cavite (SHCACI), Inc. Instills In The Heart, Mind, And Soul Of The Child The Love And Fear Of The Lord, The Love Of Country, A Sense Of Social Responsibility Toward Human And Divine Accountability And Impartiality In Dealing With Others. To Encourage Thrusts Toward Global Competitiveness With In-Depth Commitment To Richly Uphold Filipino Culture And Heritage.</div>
                                </div>
                            </div>
                        <div class="tab-pane fadeInUp animated" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>As A Center for Learning</h2>
                                    </div>
                                    <div class="text">Shepherd’s Haven Christian Academy Of Cavite (SHCACI), Inc. Provides An Adequate, Balanced, And Guaranteed Good Quality Christian Education To Discover, Develop, And Dedicate The Learner’s Fullest Potentials For Maximum And Functional Application Of Intellectual Pursuits In The Service Of Mankind And For The Glory Of God. Providing Them Avenues To Actively Leash Out Their Potentials, Talents And Gifts Which Enables Them To Apply The Pillars Of The Child’s Life-Long Learning Experiences To Face Diverse Challenges With Great Assurance Of Success.</div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist" style="width: 150%;">
                            <li class="nav-item"    >
                                <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Mission</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Vision</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>As A Filipino</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>As A Center for Learning</h4>
                                </a>
                            </li>
                        </ul>                        
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













