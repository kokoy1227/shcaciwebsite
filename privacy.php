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
<title>Privacy Policies - <?php echo $setting['site_name']; ?></title>
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

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
 

    <!-- Main Header -->
    <?php include "header.php"; ?>
        <!--End Header Upper-->


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
                        <h1>Our Privacy Policy</h1>
                    </div>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section class="faq-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                
                <h2 class="pb-3">Privacy Policy</h2>
                <h5 class="text-left"><b>What is Privacy Policies About?</b></h5>
               <p class="text-left">Welcome to TechMate Uprising (https://techmateuprising.website/) ("we," "us," "our"). We are committed to protecting your privacy and ensuring your personal information is handled in a safe and responsible manner. This Privacy Policy outlines how we collect, use, and protect your information.</p>
               <h5 class="text-left"><b>Information We Collect</b></h5>
               <h5 class="text-left">a. Personal Information:</h5>
                <p class="text-left">We may collect personal information that you provide directly to us, such as when you create an account, subscribe to our newsletter, participate in a survey, or contact us. This information may include:</p>
                <p class="text-left"><b>
                    • Name<br>
                    • Email address<br>
                    • Phone number<br>
                    • Mailing address<br>
                    • Payment information (if applicable)<br></b>
                </p>
                <h5 class="text-left">b. Non-Personal Information:</h5>
                <p class="text-left">We may collect non-personal information about your interaction with our website. This includes, but is not limited to:</p>
                <p class="text-left"><b>
                    • Browser type<br>
                    • IP address<br>
                    • Pages visited<br>
                    • Time spent on pages<br>
                    • Referring/exit pages<br></b>
                </p>
                <h5 class="text-left"><b>How We Use Your Information</b></h5>
                <p class="text-left">We use the information we collect for various purposes, including:</p>               
                <p class="text-left"><b>
                    • To provide and maintain our services<br>
                    • To process transactions<br>
                    • Phone number<br>
                    • To send periodic emails and updates<br>
                    • To improve our website and services<br>
                    • To respond to your inquiries and provide customer support<br>
                    • To monitor and analyze usage and trends<br></b>
                </p>
                <h5 class="text-left"><b>Cookies and Tracking Technologies</b></h5>
                <p class="text-left">We use cookies and similar tracking technologies to track activity on our website and hold certain information. Cookies are files with a small amount of data that may include an anonymous unique identifier. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our website.</p>               
                <h5 class="text-left"><b>Sharing Your Information</b></h5>
                <p class="text-left">We do not sell, trade, or otherwise transfer your personal information to outside parties except as described below:</p>               
                <p class="text-left"><b>
                    • To trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential.<br>
                    • To comply with legal obligations.<br>
                    • To protect and defend our rights or property.<br>
                    • In an emergency, to protect the personal safety of our users or the public.<br>
                    • To improve our website and services<br></b>
                </p>
                <h5 class="text-left"><b>Security</b></h5>
                <p class="text-left">We implement a variety of security measures to maintain the safety of your personal information. However, no method of transmission over the Internet, or method of electronic storage, is 100% secure, and we cannot guarantee its absolute security.</p>
                <h5 class="text-left"><b>Your Choices</b></h5>
                <p class="text-left">You have choices regarding the personal information you provide to us:</p>               
                <p class="text-left"><b>
                    • You can choose not to provide certain information, but this may limit your ability to use certain features of our website.<br>
                    • You can update or delete your account information by contacting us.<br>
                    • You can opt out of receiving promotional emails by following the unsubscribe instructions provided in the emails.<br></b>
                </p>
                <h5 class="text-left"><b>Third-Party Links</b></h5>
                <p class="text-left">Our website may contain links to other websites. We are not responsible for the privacy practices or the content of these other websites. We encourage you to read the privacy policies of any linked sites you visit.</p>
                <h5 class="text-left"><b>Children's Privacy</b></h5>
                <p class="text-left">Our website is not intended for use by individuals under the age of 13. We do not knowingly collect personal information from children under 13. If we become aware that we have inadvertently received personal information from a user under the age of 13, we will delete such information from our records.</p>
                <h5 class="text-left"><b>Changes to This Privacy Policy</b></h5>
                <p class="text-left">We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on our website with a new effective date. We encourage you to review this Privacy Policy periodically.</p>
                <h5 class="text-left"><b>Contact Us</b></h5>
                <p class="text-left">If you have any questions about this Privacy Policy, please contact us at:</p>               
                <p class="text-left"><b>
                    • Email: <?php echo $setting['email']; ?><br>
                    • Address: <?php echo $setting['address']; ?><br></b>
                </p>
                <p class="text-left">By using our website, you consent to our Privacy Policy.</p>
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













