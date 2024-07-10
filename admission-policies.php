<?php

    error_reporting(0);
    include "admin/conn.php";
    
     //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admission Policies - <?php echo $setting['site_name']; ?></title>
    <meta name="description"
        content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="assets/css/color.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

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
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>


        <!-- Main Header -->
        <?php include "header.php"; ?>
        <!-- End Main Header -->


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-28.jpg);">
        <div class="background-text">               
        </div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Admission Policies</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Admission</a></li>
                        <li>Admission Policies</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- service details -->
    <section class="service-details">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 content-side order-lg-2">
                    <div class="text-block-two">
                        <h3>Admission Policies</h3><br>
                        <div class="text">Having a well-established admissions process facilitates the smooth handling of all admissions-related transactions at the school. According to SHCACI's handbook, the admissions policies are outlined as follows:</div>
                    </div>                                        
                    <div class="text-block-three">
                        <h4>Quota System:</h4>
                        <div class="text">A quota determines the maximum number of pupils/students to be admitted for the academic year. Once the school reaches its maximum student capacity, it reserves the right to decline admission for that academic year.</div>      
                    </div>
                    <div class="text-block-three">
                        <h4>Admission Criteria:</h4>
                        <div class="text">Admission decisions are based on academic and/or moral standing, with the school retaining the discretion to accept or refuse admission.</div>      
                    </div>
                    <div class="text-block-three">
                        <h4>Reservation Fee:</h4>
                        <div class="text">A reservation fee is mandatory for both new and returning former pupils/students at Shepherd's Haven Christian Academy. Acceptance is on a first-come, first-served basis. Former pupils/students who meet the school's standards for academic performance, behavior, and attitude may re-enroll starting early February or as announced by the school.</div>      
                    </div>
                    <div class="text-block-three">
                        <h4>Enrollment Requirements:</h4>
                        <div class="text">Payment of prescribed fees during the enrollment period confirms a pupil/student's enrollment. The reservation fee secures a slot only and does not constitute partial or official enrollment. Full enrollment requires settlement of the enrollment fee.</div>      
                    </div>
                    <div class="text-block-three">
                        <h4>Enrollment Commitment:</h4>
                        <div class="text">Enrollment at the school signifies commitment for the entire academic year for pre-school, elementary, junior high, or senior high school courses.</div>      
                    </div>
                    <div class="text-block-three">
                        <h4>Payment Methods:</h4>
                        <div class="text">Tuition and other fees can be paid in cash or by dated check. However, payment by check is prohibited if it has been returned by the bank, with a penalty imposed for returned checks.</div>      
                    </div>
                    <div class="text-block-three">
                        <h4>Refund Claims:</h4>
                        <div class="text"></div>      
                    </div>
                    <div class="text-block-three">
                        <h4>Refund Charges:</h4>
                        <div class="text">A fee of one thousand pesos (P1,000.00) is applicable to officially enrolled individuals who withdraw during the enrollment period. Individuals withdrawing two weeks before classes commence may be charged half of the total term fees already paid. Those withdrawing within one week of the start of classes may be charged the full school fees. As stated in the fee schedule, certain fees such as registration (for new students/transferees), slot reservation, and school uniforms are non-refundable and non-transferable.</div>      
                    </div>
                    <div class="text-block-three">
                        <h4>Procedures for Refund Claims:</h4>
                        <div class="text">The parent/guardian/student/authorized representative must submit a refund request letter directly to the Accounting Office, stating the reason for the refund. For authorized representatives, a letter of authorization and valid IDs of both the person represented and the representative must be provided. Refund requests will be processed within up to two (2) weeks, considering the date of the request, fund availability, and volume of requests.</div>      
                        <div class="text">Requestors can follow up in person at our office or contact us via the Accounting Office’s landline number (046) 238-5067. Alternatively, the account officer will notify the requestor once the refund is ready for collection. Upon claiming the refund, the requestor must surrender both the official receipts and the enrollment slip to the account officer to invalidate the enrollment for that school year.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <aside class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="widget pdf-widget">
                            <h4 class="widget_title">Downloads</h4>
                            <div class="text">Provide reference materials for customers
                                logistics operations.</div>
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
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!--Main Footer-->
    <?php include "footer.php"; ?>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span>
        </div>

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













