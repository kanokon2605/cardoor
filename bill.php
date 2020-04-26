<?php 
    session_start();

    include_once 'dbconnect.php'; 
//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
$date1 = date("Ymd_His");
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน

// echo '<pre>';
// print_r ($_GET['id']);
// echo '</pre>';
// exit();

// $id = $_GET['id'];
$numrand = (mt_rand());
    if (isset($_POST['submit'])){


      // echo '<pre>';
      // print_r ($_POST);
      // echo '</pre>';
      // exit();
       
        $ref_id = $_SESSION['id'];
        $car_regis = $_POST['car_regis'];
        $id_carrr =$_POST['id_carrr'];
        $b_name = $_SESSION['firstname'];
        $b_location = $_POST['b_location'];
        $filter_date = $_POST['filter_date'];;
        $filter_date2 = $_POST['filter_date2'];
        // $sum1 = "test";
        $sum1 = $_POST['total_buy_date'];
        
      

            
            $query = "INSERT INTO c_bill (ref_id, car_regis, b_name, b_location, filter_date, filter_date2,sum1)
                        VALUE('" . $ref_id . "' , '" . $car_regis . "', '" . $b_name . "', '" . $b_location . "', '" . $filter_date . "', '" . $filter_date2 . "', '" . $sum1 . "')";
            
            $result = mysqli_query($conn, $query);

            $updatecar="UPDATE cartable SET car_status = 'ไม่ว่าง'WHERE car_id = $id_carrr";
            $resultcar = mysqli_query($conn, $updatecar);

            if ($result){
                echo '<script> alert("Register Completed!!")</script>';
                header('Refresh:0; url = bill1.php?sum='.$sum1. '&date=' . $filter_date.'&date1=' . $filter_date2.'&location=' . $b_location);
            }else{
                echo '<script> alert("Someting went wrong!!")</script>';
                header("Refresh:0; url = bill.php");
            }
        }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"  style="">
 


    <title> PD dacarrent</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="https://nakhonkoratcarrent.com/assets/image/favicon_package_v0.16/icon/favicon.png">
    <link rel="manifest" href="https://nakhonkoratcarrent.com/assets/image/favicon_package_v0.16/site.webmanifest">
    <link rel="mask-icon" href="https://nakhonkoratcarrent.com/assets/image/favicon_package_v0.16/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/fonts/elegant-font/html-css/style.css">

<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/css/layers.css">
<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/css/navigation.css">
<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/css/settings.css">
<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/css/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/lightbox2-master/lightbox2-master/src/css/lightbox.css">

<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/animsition/dist/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/css/util.css">
<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/css/main.css">
<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/css/color.css" id="color-css">

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
   
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"/>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

</head>
<style>
body, body, h1, h2, h3, h4, h5, h6, span, a {
    font-family: 'Prompt', sans-serif !important;
}
</style>
    
<link rel="stylesheet" type="text/css" href="https://nakhonkoratcarrent.com/assets/datetimepicker-master/jquery.datetimepicker.css"/>
<link href="https://nakhonkoratcarrent.com/assets/slide/css/slider-pro.min.css" rel="stylesheet">
<link href="https://nakhonkoratcarrent.com/assets/fullcalendar/fullcalendar.min.css" rel="stylesheet">

</head>
<body >
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
                        <i class="fa fa-clock-o"></i>
                        <?php echo $_SESSION['firstname'];?>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
       
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index1.php" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <!--<ul>
                                <li class=""><a href="index.html">Home</a>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="car-without-sidebar.html">Car</a>
                                </li>
                                
                                <li><a href="login.php">Login</a></li>
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

    <!--== Page Title Area Start ==-->
    <div class="py-5" >
      <div class="container">
        <div class="row">
          <div class="col-md-12"></div>
        </div>
      </div>
    </div>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"  style="">
      <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css" style="">
      <div class="py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-center">PD Dacarrent Hatyai</h3>
            </div>
          </div>
        </div>
      </div>
     
      
      <div class="py-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="text-center">
                <b>ข้อมูลการเช่า<b></b></b></h4>


    <header>
  <!-- Header desktop -->
  










<style>
.s-txt2 {
    font-family: Roboto-Regular;
    font-size: 13px;
    line-height: 1.618;
    color: #555555;
}
.table td, .table th {
    font-size: 13px;
    padding: .55rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
</style>

    <section class="bgwhite">
		  <div class="container">
			<div class="row">

				<div class="col-sm-10 col-md-8 col-lg-8 m-lr-auto p-b-50">
					<div class="p-r-20 p-r-0-md">
						<div class="bo2">
							<div class="wrap-pic-w bo2-b">
                

               
                <div id="Img_carousel" class="">
                <div class="p-l-38 p-r-38 p-t-30 p-b-18 p-lr-15-sm" >
                ชื่อ-นามสกุล :
                
                  <?php echo $_SESSION['firstname'];?>
                  </div>
                  <form  method="POST"  action="bill.php">
                  <div class="p-l-38 p-r-38 p-t-30 p-b-18 p-lr-15-sm">
                  <label for="exampleFormControlSelect1">สถานที่รับรถ :
    <select class="form-control" id="exampleFormControlSelect1" name="b_location" style="width:150px;display:inline-block;margin-left:10px;">
    <option disabled selected></option>
    <option value="Central festival">Central festival</option>
      <option value="Airport Hat-Yai">Airport Hat-Yai</option>
      <option value="Big C Extra">Big C Extra</option>
 
    </select></label>
                </div>
                <?php if(isset($_GET['id'])){
                  $id = $_GET['id'];
                                $query = "SELECT * FROM cartable WHERE car_id = " .$id ;

                                    // echo $query;
                                    // exit;

                                    $result = mysqli_query($conn, $query);
                                       $row1 = mysqli_fetch_array($result);

                                    // echo '<pre>';
                                    // print_r ($row);
                                    // echo '</pre>';
                                    // exit();
                }
                                ?>
                   <a class="car-hover" href="assets/img/car/<?php echo $row1['car_img']; ?>">
                                                    <img src="assets/img/car/<?php echo $row1['car_img']; ?>">
                                                </a>
                                                <div class="p-car-content">
                                                <h3>
                                                    <a href="#"><?php echo $row1['car_name']; ?></a>
                                                    <span class="price"><i class="fa fa-tag"></i><?php echo $row1['car_price']; ?></span>
                                                </h3> 

                                            </div>

                  
                                            


              <table class="table detail">
                <tbody>

                  <tr>
                    <td style="width: 120px;">รุ่นรถยนต์</td>
                    <td><?php echo $row1['car_name']; ?></td>
                  </tr>

                  <tr>
                    <td>size</td>
                    <td><?php echo $row1['car_type']; ?></td>
                  </tr>

                  <tr>
                    <td>ภายในรถ</td>
                    <td><?php echo $row1['car_com1']; ?></td>
                  </tr>

                  <tr>
                    <td>จำนวนผู้โดยสาร</td>
                    <td><?php echo $row1['car_com']; ?></td>
                  </tr>

          
                  <tr>
                    <td>รายละเอียด</td>
                    <td><?php echo $row1['car_com2']; ?></td>
                  </tr>

                </tbody>
              </table>


                </div>

							</div>

							
						</div>
					</div>
				</div>

      
								<!--  -->
							
									
									




				<div class="col-sm-10 col-md-4 col-lg-4 m-lr-auto p-b-50" style="border: 1px solid #f4f4f4; font-size: 12px; padding: 1.5em 1.7em 1.8em 1.7em;">
					<!-- Block 5 -->
					<div class="block-5">


						<div class="wrap-text-b5 " >
            <h3 href="#"><?php echo $row1['car_name']; ?></h3>
            <span class="price"><i class="fa fa-tag"></i><?php echo $row1['car_price']; ?></span>


              <!-- <p class="text-success">ฟรีค่าธรรมเนียมการเพิ่มผู้ขับขี่สำรอง</p>
              <p class="text-danger">*สามารถยกเลิกฟรีภายใน 24 ชั่วโมงก่อนถึงเวลาไปรับท่าน</p> -->





							<hr>

              
              <div class="row">

              
              <input type="hidden" name="_token" value="VcuwIPJ1pFZDNvIAzVZdm6NVaNUe34eGFn2pfnrG">
                <div class="col-sm-6" style="float: left;">
                  <div class="form-group ">
                      <label for="exampleInputEmail1"><b style="font-size:16px;">วันรับรถ</b></label>
                      <div class="input-group">

                        <input type="hidden" name="start_event" id="start_event" value=""/>

                      <input type="text" class="form-control date-pick" name="filter_date" id="filter-date" value="10/04/2020 21:48"/>
                      <input type="hidden" name="date_buy_date" id="date_buy" value="1"/>
                      <input type="hidden" name="total_buy_date" id="total_buy" value="800"/>

                      <input type="hidden" name="product_id_date" id="product_id" value="30"/>
                      <input type="hidden" name="car_regis" value="<?php echo $_GET['car_regis']; ?>"/>
                      <input type="hidden" name="id_carrr" value="<?php echo $_GET['id']; ?>"/>
                    </div>
                    </div>
                  </div>


                  <div class="col-sm-6" style="float: left;">
                    <div class="form-group ">
                        <label for="exampleInputEmail1"><b style="font-size:16px;">วันคืนรถ</b></label>
                        <div class="input-group">


                        <input type="hidden" name="end_event" id="end_event" value=""/>
                        <input type="text" class="form-control date-pick" name="filter_date2" id="filter-date2" value="10/04/2020 21:48"/>
                      </div>
                      </div>
                    </div>

                    <style>
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}
.accordion.accordion-primary .card-header {
    background-color: #0088cc !important;
}
.accordion .card-header {
    padding: 8px;
    border-radius: 3px !important;
    border-bottom: 0;
}
.card-title {
    color: #33353F;
    font-size: 20px;
    font-weight: 400;
    line-height: 20px;
    padding: 0;
    text-transform: none;
    margin: 0;
}
.accordion .card-title {
    font-size: 15px;
}
.accordion.accordion-primary .card-header a h4{
    color: #ffffff;
}
                    </style>

                  
<style>
.table td, .table th {
    font-size: 12px;
    padding: .55rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
.fc-toolbar h2 {
    font-size: 24px;
    margin: 0;
}
</style>

<br>
<p class="text-info" style="font-size:16px;">จำนวนเงินมัดจำ ที่ต้องจ่ายตอนรับรถ : <b class="text-danger">฿2,000</b></p>

<br>
                  <table class="table detail">
                    <tbody>

                      <tr>
                  <td><p class="text-right" >จำนวน <span id="day-set" ></span> วัน</p></td>

                  <!-- <td><p class="text-right" >฿<?php echo $row1['car_price']; ?></p></td> -->
                </tr>
                      <!-- <tr>
                  <td>ค่าส่งรถ</td>

                  <td><p class="text-right">฿0</p></td>
                </tr>
                      <tr>
                  <td>ค่ารับรถ</td>

                  <td><p class="text-right">฿0</p></td>
                </tr> -->
                    </tbody>
                  </table>



                  <table class="table detail total text-danger">
                    <tbody>
                      <tr>
                        <th style="font-size: 15px;">ราคารวม</th>
                        <th style="font-size: 15px;">
                          <p class="text-right" id="sum-muney" >
                          
                          </p>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                  <!-- code:NK0002
                  <p class="pull-right">(การชำระเป็นเงินสดเท่านั้น) </p>
                  <br /><br />
                  <p class="text-danger" style="font-size:14px;">**หากเลยเวลาส่งคืนรถ แต่ไม่เกิน 4 ชม. เราคิดเพิ่มอีก 400 บาท หากเกิน 4 ชม. เราจะคิดเพิ่มเป็นอีก 1 วัน</p> -->


<hr>
<p>
<button type="submit" name="submit"id="submit" class="btn-drive m-txt1 size5 bg-main hov-color-white bo-rad-7"style="width: 190%;" >
    <i class="fa fa-check" style="margin-right:10px;"></i>  จองออนไลน์
    </button>       

                        <br>

  </form>
   
  <a href="bill1.php" class="btn-drive m-txt1 size3 bg-main hov-color-white bo-rad-4" style="width: 190%;">
    <i class="" style="margin-right:10px;"></i>  ยกเลิก
  </a>       
					</div>



				</div>





			</div>
		</div>
	</section>
    
    <!--  -->
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
        <!-- Footer Bottom End -->
    </section>




   



    

    <!-- JavaScripts -->
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
    


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://nakhonkoratcarrent.com/assets/js/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://nakhonkoratcarrent.com/assets/slick/slick.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/js/slick-custom.js"></script>

<script src="https://nakhonkoratcarrent.com/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="https://nakhonkoratcarrent.com/assets/js/slide-custom.js"></script>




<script src="https://nakhonkoratcarrent.com/assets/lightbox2-master/lightbox2-master/src/js/lightbox.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>


<script src="https://nakhonkoratcarrent.com/assets/js/main.js"></script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://nakhonkoratcarrent.com/assets/fullcalendar/lib/moment.min.js"></script>
<script type="text/javascript" src="https://nakhonkoratcarrent.com/assets/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="https://nakhonkoratcarrent.com/assets/fullcalendar/locale/th.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

//swal("คิวรถเช่าคันนี้เต็ม", "ต้องขออภัย ท่านสามารถเช็คปฏิทินการจองล่วงหน้าได้");

</script>

<script>
$(document).ready(function () {

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: false,
        },
        events: {
            url: 'https://nakhonkoratcarrent.com/get_event_c/30',
            error: function() {

            }
        },
        eventLimit:true,
        lang: 'th'
    });
    });


    
    setTimeout(function(){

    var element_del = document.getElementById("collapse2PrimaryTwo");
  element_del.classList.remove("show");


}, 1500);


</script>
<script src="https://nakhonkoratcarrent.com/assets/datetimepicker-master/build/jquery.datetimepicker.full.js?v2"></script>
<script src="https://nakhonkoratcarrent.com/js/moment.js"></script>

<script>




    /*jslint browser:true*/
    /*global jQuery, document*/
    var sum_mon = <?php echo $row1['car_price']; ?>;
    jQuery(document).ready(function () {
        'use strict';

        jQuery('#filter-date, #search-from-date, #search-to-date').datetimepicker();
        jQuery('#filter-date2, #search-from-date, #search-to-date').datetimepicker();

        $("#day-set").html(1);
        $("#sum-muney").html('฿'+addCommas(sum_mon));

    });

    $(".date-pick").on('change', function() {
      var input = document.getElementById("filter-date").value;
      var res = input.split("/", 1);
      var input2 = document.getElementById("filter-date2").value;
      var res2 = input2.split("/", 1);

    //  console.log(moment(input, "DD/MM/YYYY HH:mm").format("YYYY-MM-DD HH:mm:ss"));
      document.getElementById('start_event').value = moment(input, "DD/MM/YYYY").format("YYYY-MM-DD");
      document.getElementById('end_event').value = moment(input2, "DD/MM/YYYY").format("YYYY-MM-DD");
    //  var time_get = timeDifference(input, input2);


    var timeDiff_d = moment.utc(moment(input2, "DD/MM/YYYY HH:mm").diff(moment(input, "DD/MM/YYYY HH:mm"))).format("D")
    var timeDiff_h = moment.utc(moment(input2, "DD/MM/YYYY HH:mm").diff(moment(input, "DD/MM/YYYY HH:mm"))).format("H")
      //console.log(res);
    //  console.log(timeDiff_d);
    //  console.log(timeDiff_h);
      over_time = 0;
      total = (res2 - res);

      if(timeDiff_d == 1){
        total = timeDiff_d;
      }else if(timeDiff_d > 1 && timeDiff_h == 0){
        total = timeDiff_d-1;
      }else if(timeDiff_d > 1 && timeDiff_h > 0 && timeDiff_h <= 4){
        total = timeDiff_d-1;
        over_time = timeDiff_h * 100;
      }else if(timeDiff_d > 1 && timeDiff_h > 4 && timeDiff_h < 8){
        total = timeDiff_d-1;
        over_time = (400);
      }else if(timeDiff_d > 1 && timeDiff_h >= 8){
        total = timeDiff_d-1;
        over_time = (800);
      }else{

      }

    // console.log(total);

      document.getElementById('day-set').value = total;
      $("#day-set").html(total);
    //  sum_mon = sum_mon * total ;


       document.getElementById('total_buy').value = (sum_mon * total)+over_time;
       document.getElementById('date_buy').value = total;
      $("#sum-muney").html('฿'+addCommas((sum_mon * total)+over_time));
    });







    function addCommas(nStr)
    {
    	nStr += '';
    	x = nStr.split('.');
    	x1 = x[0];
    	x2 = x.length > 1 ? '.' + x[1] : '';
    	var rgx = /(\d+)(\d{3})/;
    	while (rgx.test(x1)) {
    		x1 = x1.replace(rgx, '$1' + ',' + '$2');
    	}
    	return x1 + x2;
    }
</script>

<script type="text/javascript">
function jsDateDiff(strDate1,strDate2){
var theDate1 = Date.parse(strDate1)/1000;
var theDate2 = Date.parse(strDate2)/1000;
var diff=(theDate2-theDate1)/(60*60*24);
return diff;
}
</script>

<script src="https://nakhonkoratcarrent.com/assets/slide/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#Img_carousel' ).sliderPro({
			width: 960,
			height: 600,
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: false,
			smallSize: 500,
			startSlide: 0,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});
	});
</script>

<script language="JavaScript">

</script>



        </body>
</html>
