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
<title>Terms & Conditions - <?php echo $setting['site_name']; ?></title>
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
    <!-- Preloader -->
 

    <!-- Main Header -->
    <?php include "header.php"; ?>
        <!--End Header Upper-->


    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
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
                </div>
                <!-- Contact Widget -->
                <div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-cursor"></span></div>
                        <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-calling"></span></div>
                        <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61) 324 56 789 & 790</a></div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-mail"></span></div>
                        <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">supportyou@transida.com</a></div>
                    </div>
                </div>
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
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
    </div>

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
                        <h1>Terms & Conditions</h1>
                    </div>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section class="faq-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                
                <h2 class="pb-3">Terms & Conditions</h2>
                <p><b>Welcome to TechMate Uprising (https://techmateuprising.website/) ("we," "us," "our"). By accessing or using our website, you agree to comply with and be bound by the following Terms and Conditions. Please read these terms carefully before using our website.</b></p>
    <br><br><h5 class=" text-left"><b>1. Use of Our Website</b></h5>
               
                <p class="text-left">a. Access: You must be at least 18 years old and capable of entering into a legally binding agreement to use our website. If you are under 18, you may use the website only with involvement of a parent or guardian.</p>
                <p class="text-left">b. License: We grant you a limited, non-exclusive, non-transferable license to access and use our website for your personal use, subject to these Terms and Conditions.</p>
                <p class="text-left">c. Restrictions: You agree not to:<br>
                • Use our website for any illegal or unauthorized purpose.<br>
                • Attempt to access any part of the website that you are not authorized to access.<br>
                • Modify, adapt, or hack the website or modify another website to falsely imply that it is associated with our website.<br>
                • Transmit any viruses, worms, or any code of a destructive nature.<br> 
                </p>
                <h5 class=" text-left"><b>2. Intellectual Property</b></h5>
                <p class="text-left"><b>a. Ownership:</b> All content on our website, including text, graphics, logos, images, audio clips, and software, is the property of TechMate Uprising or its content suppliers and is protected by copyright, trademark, and other intellectual property laws. </p>
                <p class="text-left"><b>b. License:</b> You may not reproduce, distribute, modify, or create derivative works of any content from our website without our prior written consent.</p>
                <h5 class=" text-left"><b>3. User Content</b></h5>
                <p class="text-left"><b>a. Submission:</b> If you submit any content (such as comments or feedback) to us, you grant us a non-exclusive, royalty-free, perpetual, irrevocable, and fully sublicensable right to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, and display such content throughout the world in any media.</p>
                <p class="text-left"><b>b. Responsibility:</b> You are solely responsible for any content you submit to our website and the consequences of sharing or publishing such content.</p>
                <h5 class=" text-left"><b>4. Use of Content</b></h5>
                <p class="text-left"><b>a. Information Collection:</b> Our collection and use of your personal information are governed by our <a href="privacy.php">Privacy Policy</a>.</p>
                <h5 class=" text-left"><b>5. Limitation of Liability</b></h5>
                <p class="text-left"><b>a. Disclaimer:</b> To the fullest extent permitted by law, we disclaim all warranties, express or implied, regarding the website and your use thereof. We do not warrant that the website will be uninterrupted or error-free, that defects will be corrected, or that the website is free of viruses or other harmful components.</p>
                <p class="text-left"><b>b. Limitation of Liability:</b> In no event shall TechMate Uprising, its directors, officers, employees, or affiliates be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, arising out of or in connection with your access to or use of the website.</p>
                
                <h5 class=" text-left"><b>6. Indemnification</b></h5>
                <p class="text-left">You agree to indemnify and hold harmless TechMate Uprising, its affiliates, officers, directors, employees, and agents from and against any and all claims, liabilities, damages, losses, costs, expenses, or fees (including reasonable attorneys' fees) that arise from your use of our website, violation of these Terms and Conditions, or infringement of any intellectual property or other right of any person or entity.</p>
                <h5 class=" text-left"><b>7. Governing Law</b></h5>
                <p class="text-left">These Terms and Conditions shall be governed by and construed in accordance with the laws of [Your Jurisdiction], without regard to its conflict of law principles.</p>
                <h5 class=" text-left"><b>8. Changes to These Terms and Conditions</b></h5>
                <p class="text-left">We reserve the right to modify or replace these Terms and Conditions at any time. Any changes will be effective immediately upon posting the revised Terms and Conditions on our website. Your continued use of the website following the posting of changes constitutes your acceptance of such changes.</p>
            <h5 class=" text-left"><b>9. Contact Us</b></h5>
                <p class="text-left">If you have any questions about these Terms and Conditions, please contact us at:<br>
                • Email: <?php echo $setting['email']; ?><br>
                • Address: <?php echo $setting['address']; ?><br></b></p>
                <p class="text-left">By using our website, you agree to these Terms and Conditions.</p>
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













