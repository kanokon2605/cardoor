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
    <!--=== Vegas Min CSS ===-->
    <link href="assets/css/plugins/vegas.min.css" rel="stylesheet">
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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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
                    <!-- <div class="col-lg-3 text-center">
                        <i class="fa fa-user"></i>
                        <?php echo $_SESSION['firstname'];?>
                    </div> -->
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
                                <!-- <li class="active"><a href="booking.php?id=<?php echo $_SESSION['id']; ?>">Booking</a></li> -->
                                <li class=""><a href="index.php">Home</a>
                                </li>
                                <li><a href="about1.php">About</a></li>
                                <!--==<li class=""><a href="car-without-sidebar1.php">Car</a> ==-->
                                
                                </li>
                                
                                <li><a href="login.php">LOGIN</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== SlideshowBg Area Start ==-->
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>BOOK A CAR TODAY!</h1>
                                <p></p>
                                <div class="book-ur-car">

                                    <form action="index3.php" method="post">
                                        <div class="pick-location bookinput-item">
                                            <select class="custom-select" name="">
                                              <option selected>Pick Location</option>
                                              <option value="1">Central festival</option>
                                              <option value="2">Airport Hat-Yai</option>
                                              <option value="3">Big C Extra</option>
                                            </select>
                                        </div>
                        
                                        <div class="pick-date bookinput-item">
                                            <input id="startDate2" placeholder="Pick Date" />
                                        </div>
                                        <div class="pick-location bookinput-itemm">
                                            <select class="custom-select">
                                              <option selected>Time</option>
                                              <option value="1">07:00</option>
                                              <option value="2">08:00</option>
                                              <option value="3">09:00</option>
                                              <option value="3">10:00</option>
                                              <option value="3">11:00</option>
                                              <option value="3">12:00</option>
                                              <option value="3">13:00</option>
                                              <option value="3">14:00</option>
                                              <option value="3">15:00</option>
                                              <option value="3">16:00</option>
                                              <option value="3">17:00</option>
                                              <option value="3">18:00</option>
                                              <option value="3">19:00</option>
                                              <option value="3">20:00</option>
                                            </select>
                                        </div>

                                        <div class="retern-date bookinput-item">
                                            <input id="endDate2" placeholder="Return Date" />
                                        </div>
                                        <div class="pick-location bookinput-itemm">
                                            <select class="custom-select time-select">
                                              <option selected>Time</option>
                                              <option value="1">07:00</option>
                                              <option value="2">08:00</option>
                                              <option value="3">09:00</option>
                                              <option value="3">10:00</option>
                                              <option value="3">11:00</option>
                                              <option value="3">12:00</option>
                                              <option value="3">13:00</option>
                                              <option value="3">14:00</option>
                                              <option value="3">15:00</option>
                                              <option value="3">16:00</option>
                                              <option value="3">17:00</option>
                                              <option value="3">18:00</option>
                                              <option value="3">19:00</option>
                                              <option value="3">20:00</option>
                                            </select>
                                        </div>
                                        
                                        <div class="car-choose bookinput-item">
                                            <select class="custom-select" name="car_type">
                                              <option >Choose Car type</option>
                                              <option value="Small Size">Small Size</option>
                                              <option value="Mid Size">Mid Size</option>
                                             
                                            </select>
                                        </div>
                                    
                                        <button type="submit" name="submit"><B></B>
                                                <a href="index.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true"><b>Search</b></a>                       
                                        
                                                </button></div>
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!--== SlideshowBg Area End ==-->

    <!--== About Us Area Start ==-->
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
                        <div class="about-feature-item ">
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
    <!--== About Us Area End ==-->

						
					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Choose your Car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>บริการเช่ารถหาดใหญ่ ราคาถูก กับ PD dacarrent.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Choose Filtering Menu Start -->
                                <div class="home2-car-filter">
                                    <a href="#" data-filter="*" class="active">all</a>
                                    <!-- <a href="#" data-filter=".con">Mid Size</a>
                                    <a href="#" data-filter=".hat">Small Size</a> -->
                                </div>
                                <!-- Choose Filtering Menu End -->
                            </div>

                            <div class="col-lg-9">
                                <!-- Choose Cars Content-wrap -->
                                <div class="row popular-car-gird">

                                <?php 
                                if(isset($_GET['id'])){
                                    $car_type = $_GET['car_type'];
                                    $query = "SELECT * FROM cartable WHERE car_type =" .$id;
                                }else{
                                    $query = "SELECT * FROM cartable WHERE car_status = 'ว่าง' ORDER BY car_id ASC";}

                                    // echo $query;
                                    // exit;

                                    if ($result = mysqli_query($conn, $query)) {
                                        while($row = mysqli_fetch_array($result)) {

                                    // echo '<pre>';
                                    // print_r ($row);
                                    // echo '</pre>';
                                    // exit();

                                ?>

                                    <!-- Single Popular Car Start -->
                                    <div class="col-lg-6 col-md-6 con suv mpv">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/<?php echo $row['car_img']; ?>">
                                                    <img src="assets/img/car/<?php echo $row['car_img']; ?>">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#"><?php echo $row['car_name']; ?></a>
                                                    <span class="price"><i class="fa fa-tag"></i><?php echo $row['car_price']; ?></span>
                                                </h3> <br>

                                                <h8>
                                                <i class=""style="font-size:20px"></i>
                                                        <?php echo $row['car_type']; ?>
                                                        <br>
                                                        <i class="fa fa-users"style="font-size:20px"></i>
                                                        <?php echo $row['car_com']; ?>
                                                    <br>
                                                    <i class="fa fa-tachometer"style="font-size:23px"></i>
                                            <?php echo $row['car_com1']; ?></h8> <br>
                                            <i class="fas fa-gas-pump"style="font-size:23px"></i>
                                            <?php echo $row['car_com2']; ?>
                                            <br><a href="login.php?car_regis=<?php echo $row['car_regis']; ?>&id=<?php echo $row['car_id']; ?>" class="rent-btn">Book It</a>
                                    
                                            </div>
                                        </div>
                                    </div>

                                        <?php }
                                    }?>
                                    <!-- Single Popular Car End -->

                                   
                                </div>
                                <!-- Choose Cars Content-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->
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
                                <p>เช่ารถหาดใหญ่กับ PD dacarrent ไม่ว่าคุณจะออกเดินทางทำธุระหรือท่องเที่ยวสามารถใช้บริการรถเช่าได้ที่ PD dacarrent เพราะเรามีบริการรถเช่าหลากหลายรุ่น หลากหลายยี่ห้อ ให้คุณได้เลือกเพื่อให้เข้ากับไลฟ์สไตล์ของคุณ</p>

                                

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