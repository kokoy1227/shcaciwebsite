<?php
    error_reporting(0);
    include "admin/conn.php";

    //fetch faq
    $faq = mysqli_query($con,"SELECT * FROM faqs ORDER BY id DESC");
    
      //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FAQ - <?php echo $setting['site_name']; ?></title>
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


        <!-- Main Header -->
        <?php include "header.php"; ?>
        <!--End Header Upper-->

        <!-- Page Title -->
        <section class="page-title" style="background-image: url(assets/images/background/bg-28.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="content-wrapper">
                        <div class="title">
                            <h1>Faq’s</h1>
                        </div>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li>Faq’s</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq Section -->
        <section class="faq-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Get Answers</div>
                    <h2>Things You Need to Know and <br>
                        We Know Your’s</h2>
                </div>
                <div class="tab-area">
                    <!-- Tab panes -->
                    <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel"
                            aria-labelledby="tab-one">
                            <ul class="accordion-box style-two mb-30">

                                <?php
                            $i=0;
                                while($row=mysqli_fetch_array($faq)){
                                    $i++;
                            ?>
                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div>
                                        <strong><?php echo $i; ?>.</strong> <?php echo $row['title']; ?>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text"><?php echo $row['descc']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php  } ?>
                                <!-- End Block -->
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