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
<title>Board Members - <?php echo $setting['site_name']; ?></title>
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

<style>
.boardmembers{
  margin-left: auto;
  margin-right: auto;
  position: relative;
  background-color: #f0ece5;
  padding-top: 150px;
  padding-bottom: 75px;
}

.boardmembers .members-container{
  position: relative;
  display: grid;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

.boardmembers .content h3{
  color: var(--primary-color);
  font-size: 35px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: .4rem;
  text-align: center;
}

.boardmembers .members-container .table{
  width: 60%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
}

.boardmembers .members-container .table th{
  text-align: left;
  color: var(--primary-color);
  font-size: 20px;
  text-transform: uppercase;
  height: 50px;
}

.boardmembers .members-container .table td{
  text-align: right;
  color: var(--black);
  font-size: 20px;
  text-transform: none;
  font-weight: 600;
  height: 50px;
}
</style>

<div class="page-wrapper">
    <!-- Preloader -->
   
    <!-- End Main Header -->
<?php include "header.php"; ?>
    
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
                        <li><a href="team.php">Faculty and Staff<i class="flaticon-up-arrow"></i></a></li>
                        <li class="active"><a href="boardmembers.php">SHCACI Board Members<i class="flaticon-up-arrow"></i></a></li>
                    </ul> 
                </div>                    
            </div>
        </div>
    </section>


    <section class="boardmembers" id="boardmembers" >
        <div class="content">
            <h3>Shepherd's Haven Christian<br>Academy of Cavite (SHCACI), Inc.</h3>
        </div>
        <div class="members-container">
            <table class="table">
                <tr>
                    <th>President:</th>
                    <td>Sandy L. Paguirigan</td>   
                </tr>
                <tr>
                    <th>Vice President: </th>
                    <td>Ms. Inesita L. Famoso</td>   
                </tr>
                <tr>
                    <th>Secretary:</th>
                    <td>Ms. Cristella Mar V. Pascual</td>   
                </tr>
                <tr>
                    <th>Treasurer:</th>
                    <td>Mrs. Flora T. Ballena</td>   
                </tr>
                <tr>
                    <th>Asst. Treasurer:</th>
                    <td>Mr. Rodulfo Z. Morada</td>   
                </tr>
                <tr>
                    <th>Auditor:</th>
                    <td>Mr. Jonathan A. Valles</td>   
                </tr>
                <tr>
                    <th>Asst. Auditor:</th>
                    <td>Engr. Renato D. Cayabyab</td>   
                </tr>
                <tr>
                    <th>Board Members:</th>
                    <td>Rev.Joselito D. Apostol</td>
                </tr>
                <tr><td></td>
                    <td>Mrs. Almar C. Apostol</td>
                </tr>
                <tr><td></td>    
                    <td>Engr. Vanessa S. Cayabyab</td>
                </tr>
                <tr><td></td>
                    <td>Mrs. Eminda B. Bernaldez</td>
                </tr>
                <tr><td></td>
                    <td>Mrs. Eminda B. Bernaldez</td>
                </tr>
                <tr><td></td>
                    <td>Mr. Ruel D. Marimon</td>
                </tr>
                <tr><td></td>
                    <td>Engr. Raylene A. Ajeno</td>
                </tr>
                <tr>
                    <th>School Physician:</th>
                    <td>Dr. Jemima D. Javier</td>   
                </tr>
                <tr>
                    <th>School Dentist:</th>
                    <td>Dr. Jonas John S. Apostol</td>   
                </tr>
            </table>
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