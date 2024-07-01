<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);

    $images = mysqli_query($con,"SELECT * FROM images ORDER BY id ASC LIMIT 9");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>School Gallery - <?php echo $setting['site_name']; ?></title>
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
                        <h1>School Gallery</h1>
                    </div>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Projects Section Three -->
    <section class="projects-section-three">
        <div class="auto-container">
            <!--Filter
            <div class="filters">
                <ul class="filter-tabs filter-btns">
                    <li class="filter active" data-role="button" data-filter=".all">View All </li>
                    <li class="filter" data-role="button" data-filter=".cat-1">Freight Forwarding</li>
                    <li class="filter" data-role="button" data-filter=".cat-2">Transport </li>
                    <li class="filter" data-role="button" data-filter=".cat-3">Materials</li>
                    <li class="filter" data-role="button" data-filter=".cat-4">Warehouse</li>
                    <li class="filter" data-role="button" data-filter=".cat-5">Management</li>
                </ul>
            </div>-->
                
            <!--Sortable Galery-->
            <div class="sortable-masonry">
                
                <div class="items-container row">
                    <!-- Project Block -->
                    <?php
                                    while($row=mysqli_fetch_array($images)){
                                ?>
                    <div class="col-xl-3 col-lg-6 project-block masonry-item all cat-1">
                        <div class="inner-box">
                            <div class="image">
                            <img src="https://techmateuprising.website/admin/uploads/<?php echo $row['file_name']; ?>" alt="">
                                <div class="overlay"><a href="https://techmateuprising.website/admin/uploads/<?php echo $row['file_name']; ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-full-size"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <?php }
                                ?>
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
