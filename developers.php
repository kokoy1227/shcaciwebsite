<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jan 2021 08:06:44 GMT -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Web Developers - <?php echo $setting['site_name']; ?></title>
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


</head>

<body>

<div class="page-wrapper">
   

   <?php include "header.php"; ?>
    </header>
    <!-- End Main Header -->

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-28.jpg);">
        <div class="background-text">                
        </div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Web Developers</h1>
                    </div>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section style-three">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6 team-blcok">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/developers/Nadala.jpg" alt=""></div>
                        <div class="content">
                            <div class="designation">Project Manager</div>
                            <h4>John Robert T. Nadala</h4>
                            
                            <div class="hover-content">
                                <ul class="social-icon">
                                    <li><a href="https://www.facebook.com/johnrobertnadalla"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <h4 style="font-size: 12px; background-color: yellow; padding-top: 10px; padding-bottom: 10px; margin-top: -10px;">Bachelor of Science in Information Technology</h4>
                    </div>
                </div>
                <div class="col-md-8" style="width: 150%;">
                    <p style="text-align: justify; font-size: 19px; margin-top: 20px;">
                        John Robert T. Nadala is a dedicated professional with a strong background in information technology and digital marketing. Born and raised in Dasmariñas City, Cavite, John has consistently demonstrated his commitment to excellence and leadership throughout his academic and professional journey.
                        <br><br>
                        John earned his Bachelor of Science in Information Technology from the National College of Science and Technology, where he was actively involved in the NCST Computer Hardware Interfacing and Programming Society, serving as both Vice-President (External) and 3rd Year Representative. His dedication to his field is further evidenced by his various certifications, including the Google Project Management Professional Certificate, Microsoft Digital Literacy, and Google AI Essentials.
                        <br><br>
                        His career history includes roles as an ICT Teacher at Shepherd's Haven Christian Academy of Cavite, Mixer Operator at GJKids Company, and Globe Sale Agent at BJE Marketing. John has also worked as a Junior Project Manager at Techmate Uprising on a freelance basis, showcasing his versatility and ability to adapt to different professional environments.
                        <br><br>
                        In addition to his technical skills, John has held several leadership positions, such as Secretary of the Supreme Student Government, President of the EPAS Club, and P.I.O of the HUMSS Society. These roles have honed his management skills, including creativity, negotiation, critical thinking, and leadership.
                        <br><br>
                        John's commitment to continuous learning and professional development is evident in his pursuit of certifications and his proactive approach to gaining new skills. His goal is to develop aspects of his life by being prepared and exposed to various learnings and experiences to become the best version of himself.
                        <br><br>
                        With a solid foundation in IT, proven leadership abilities, and a drive for excellence, John Robert T. Nadala is well-equipped to make significant contributions in his future endeavors.
                    </p>
                </div>                   
            </div>
            <div class="row" style="margin-top: 100px;">
                <div class="col-md-8" style="width: 150%;">
                    <p style="text-align: justify; font-size: 19px; margin-top: 20px;">
                        Mark Daniel Collano Barranco is a dedicated and goal-oriented Information Technology student currently pursuing his Bachelor of Science in Information Technology at the National College of Science and Technology in Dasmariñas. Known for his strong academic performance, he has been an active representative of the NCST Computer Hardware Interfacing and Programming Society and has conducted a notable thesis on "Supplementary 3D Technology Network Game."
                        <br><br>
                        Mark's education journey includes graduating with honors from the Science, Technology, Engineering, and Mathematics program at Philippine Christian University in Cavite and attending Congressional Integrated High School.
                        <br><br>    
                        He has honed his skills through various certifications and workshops, such as Software Quality Assurance Engineering, Flutter Framework for Mobile Application Development, and Game Development and Interactive Media. Mark is proficient in web development, game development, network configurations, computer systems assembly, audio and camera operations, video editing, and live streaming.
                        <br><br>
                        With excellent communication skills and a strong sense of responsibility and leadership, Mark is enthusiastic about learning new technologies and is committed to achieving his professional goals. He is well-regarded for his trustworthiness, hardworking nature, and enthusiasm for both personal and professional growth.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 team-blcok">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/developers/Barranco.jpg" alt=""></div>
                        <div class="content">
                            <div class="designation">Full-stack Web Developer</div>
                            <h4>Mark Daniel C. Barranco</h4>
                            
                            <div class="hover-content">
                                <ul class="social-icon">
                                    <li><a href="https://www.facebook.com/mrcsbrrnc"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <h4 style="font-size: 12px; background-color: yellow; padding-top: 10px; padding-bottom: 10px; margin-top: -10px;">Bachelor of Science in Information Technology</h4>
                    </div>
                </div>                   
            </div>
        </div>
    </section>

    <!-- Newsletter 
    <section class="newsletter-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form class="ajax-sub-form" method="post">
                            <div class="form-group">
                                <i class="far fa-envelope-open"></i>
                                <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Subscribe</span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </section>-->

    <!--Main Footer-->
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

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jan 2021 08:06:49 GMT -->
</html>