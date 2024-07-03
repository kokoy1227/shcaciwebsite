<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);

     //fetch team
    $team = mysqli_query($con,"SELECT * FROM teams");

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Faculty & Staff - <?php echo $setting['site_name']; ?></title>
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
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

<?php include "header.php"; ?>

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
                        <li><a href="symbol.php">SHCACI Symbol<i class="flaticon-up-arrow"></i></a></li>
                        <li class="active"><a href="team.php">Faculty and Staff<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="boardmembers.php">SHCACI Board Members<i class="flaticon-up-arrow"></i></a></li>
                    </ul> 
                </div>                    
            </div>
        </div>
    </section>
        

    <!-- Team Section -->
    <section class="team-section style-three">
        <div class="auto-container">
            <div class="row">
                <?php
                    while($row=mysqli_fetch_array($team)){
                ?>
                <div class="col-lg-4 col-md-6 team-blcok">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image"><img src="admin/images/team/<?php echo $row['img']; ?>" alt=""></div>
                        <div class="content">
                            <div class="designation"><?php echo $row['designation']; ?></div>
                            <h4><?php echo $row['title']; ?></h4>
                            <!--<div class="hover-content">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="designation">Principal, SO1</div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <?php }  ?>              
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