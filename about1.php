<?php 
    session_start();

    include_once 'dbconnect.php';


?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>PD dacarrent</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
            <!--== Header Top Start ==-->
            <div id="header-top" class="d-none d-xl-block">
                <div class="container">
                    <div class="row">
                        <!--== Single HeaderTop Start ==-->
                        <div class="col-lg-3 text-left">
                            <i class="fa fa-map-marker"></i> 22 ซอย1 ถ.ประชายินดี ต.หาดใหญ่
                        </div>
                        <!--== Single HeaderTop End ==-->
    
                        <!--== Single HeaderTop Start ==-->
                        <div class="col-lg-3 text-center">
                            <i class="fa fa-mobile"></i> 080-7010880
                        </div>
                        <!--== Single HeaderTop End ==-->
    
                        <!--== Single HeaderTop Start ==-->
                        <div class="col-lg-3 text-center">
                            <i class="fa fa-clock-o"></i> Mon-Sun 07.00 - 20.00
                        </div>
                        <!--== Single HeaderTop End ==-->
                        <div class="col-lg-3 text-center">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['firstname'];?>
                        </div>
                        <!--== Social Icons End ==-->
                    </div>
                </div>
            </div>
            <!--== Header Top End ==-->
    
            <!--== Header Bottom Start ==-->
            <div id="header-bottom">
                <div class="container">
                    <div class="row">
                        <!--== Logo Start ==-->
                        <div class="col-lg-4">
                            <a href="index.php" class="logo">
                                <img src="assets/img/logo.png" alt="JSOFT">
                            </a>
                        </div>
                        <!--== Logo End ==-->
    
                        <!--== Main Menu Start ==-->
                        <div class="col-lg-8 d-none d-xl-block">
                            <nav class="mainmenu alignright">
                                <ul>
                                    <li class=""><a href="booking.php">Booking</a></li>
                                    <li class=""><a href="index1.php">Home</a>
                                    </li>
                                    <li class="active"><a href="about1.php">About</a></li>
                                    <!--==<li><a href="car-without-sidebar1.php">Car</a>==-->
                                    </li>
                                   
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--== Main Menu End ==-->
                    </div>
                </div>
            </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About US</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>บริการเช่ารถหาดใหญ่ ราคาถูก กับ PD dacarrent.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>บริการเช่ารถหาดใหญ่ ราคาถูก กับ PD dacarrent.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>เช่ารถหาดใหญ่กับ PD dacarrent ไม่ว่าคุณจะออกเดินทางทำธุระหรือท่องเที่ยวสามารถใช้บริการรถเช่าได้ที่ PD dacarrent เพราะเรามีบริการรถเช่าหลากหลายรุ่น หลากหลายยี่ห้อ ให้คุณได้เลือกเพื่อให้เข้ากับไลฟ์สไตล์ของคุณ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/home-2-about.png" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3></h3>
                            <p>หารถที่คุณต้องการ
                                ต้องการรถเล็กกะทัดรัดเพื่อใช้ทำธุระ หรือรถใหญ่เพื่อท่องเที่ยว ที่ไดร์ฟเมท เรามีรถนับพันคันให้คุณเลือก</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3></h3>
                            <p>ทำการจองรถ
                                ทำการจองรถแบบง่ายๆ ได้เลย</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3></h3>
                            <p>เติมน้ำมัน และคืนรถ แล้วมาใช้บริการกับเราใหม่
                                เติมน้ำมันคืนในสภาพเต็มถัง และคืนรถในเวลาที่คุณนัดหมายไว้ คุณสามารถให้คะแนนและเขียนรีวิว เมื่อคุณกลับมาใช้บริการของเราอีกครั้ง เรามีสิ่งดีๆ รอคุณอยู่</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Page Content End ==-->
    
    <!--== Our Facility Content Start ==-->
    <section id="our-facility" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Single Facility Start -->
                
                <!-- Single Facility Start -->  
            </div>
        </div>
    </section>
    <!--== Our Facility Content End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Testimonials Area Start ==-->
    
    <!--== Testimonials Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                            <div class="single-footer-widget">
                                <h2>About Us</h2>
                                <div class="widget-body">
                                    <img src="assets/img/logo.png" alt="JSOFT">
                                    <p>เช่ารถหาดใหญ่กับ PD dacarrent ไม่ว่าคุณจะออกเดินทางทำธุระหรือท่องเที่ยวสามารถใช้บริการรถเช่าได้ที่ PD dacarrent เพราะเรามีบริการรถเช่าหลากหลายรุ่น หลากหลายยี่ห้อ ให้คุณได้เลือกเพื่อให้เข้ากับไลฟ์สไตล์ของคุณ

                                    </p>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Widget End -->
    
                        <!-- Single Footer Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            
                        </div>
                        <!-- Single Footer Widget End -->
    
                        <!-- Single Footer Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-footer-widget">
                                <h2>Contact</h2>
                                <div class="widget-body">
                    
    
                                    <ul class="get-touch">
                                        <li><i class="fa fa-map-marker"></i>22 ซอย1 ถ.ประชายินดี ต.หาดใหญ่ 90110</li>
                                        <li><i class="fa fa-mobile"></i> 080-7010880</li>
                                        <li><i class="fa fa-envelope"></i> dacarrent.hatyai@gmail.com</li>
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>