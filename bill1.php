<?php 
    session_start();

    include_once 'dbconnect.php';
    $date1 = date("Ymd_His");
$numrand = (mt_rand());

// echo '<pre>';
      // print_r ($_POST);
      // echo '</pre>';
      // exit();
    if (isset($_POST['submit'])){
        $ref_id = $_SESSION['id'];
        // $ref_id = $_POST['ref_id'];
        $pay_name = $_POST['pay_name'];
        $summm = $_POST['summm'];
        $date_ = $_POST['date_'];
        $date_1 = $_POST['date_1'];
        $loca = $_POST['loca'];
        $ext = pathinfo(basename($_FILES['img']['name']), PATHINFO_EXTENSION);    
        $new_image_name = 'img_'.uniqid().".".$ext;
        $image_path = "slip/";
        $upload_path = $image_path.$new_image_name;
        //uploading
        $success = move_uploaded_file($_FILES['img']['tmp_name'],$upload_path);
        if ($success==FALSE) {
            echo "ไม่สามารถ upload รูปภาพได้";
            exit();
    }
    $img = $new_image_name;
     
            $query = "INSERT INTO payment ( ref_id,pay_name, img)
                        VALUE( '" . $ref_id . "','" . $pay_name . "', '" . $img . "')";
            
            $result = mysqli_query($conn, $query);

            if ($result){
                echo '<script> alert("Register Completed!!")</script>';
                header('Refresh:0; url = invoice.php?sum=' .$summm. '&date=' .$date_.'&date1=' .$date_1.'&location=' .$loca);
            }else{
                echo '<script> alert("Someting went wrong!!")</script>';
                header("Refresh:0; url = bill1.php");
              }
            }
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
   
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    
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
                        <i class="fa fa-clock-o"></i>
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
                <b>การชำระเงิน<b></b></b></h4>
                <b><b>
                </b></b>
            </div><b><b>
              </b></b>
          </div><b><b>
            </b></b>
        </div><b><b>
          </b></b>
      </div><b></b>
      <div class="container">
        <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-4'>
              <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
              <form action="bill1.php" method="POST" enctype="multipart/form-data" accept-charset="UTF-8"  class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" ><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
                <div class='form-row'>
                  <div class='col-xs-12 form-group required'>
                  <label class='control-label'  > รวมราคา :
                  <?php echo $_GET['sum']; ?> บาท</label>
                  <br>
                    <label class='control-label'  >ชื่อผู้โอน</label>
                    <input name="pay_name" class='form-control' size='40' type='text'>
                    <input type="hidden" value="<?php echo $_GET['sum']; ?>" name="summm">
                    <input type="hidden" value="<?php echo $_GET['date']; ?>" name="date_">
                    <input type="hidden" value="<?php echo $_GET['date1']; ?>" name="date_1">
                    <input type="hidden" value="<?php echo $_GET['location']; ?>" name="loca">
                  </div>
                </div>
                <div class='form-row'>
                  <div class='col-xs-12 form-group  required'>
                    <label class='control-label'>โอนเข้า</label><br>
                   
                    <img src="assets/img/ธนาคาร.png" alt="JSOFT">&nbsp;&nbsp; ไทยพาณิชย์ สาขามหาวิทยาลัยสงขลานครินทร์ ชื่อบัญชี นางสาวมณีรัตน์ ศรีมุ่ย <br> หมายเลขบัญชี 565-480971-7
                    
                  </div>
                </div>
                <div class='form-row'>
                  <div class='col-xs-4 form-group cvc required'>
                    <label class='control-label'> หลักฐานการโอนเงิน</label>
                   
                </div>
                
                <div class='form-row'>
                  <div class='col-md-12 form-group'>
                  <input type="file" name="img" />
           
            </div>
           
            <br>

            <div class="-center">
                          <button  type="submit" name="submit"id="submit"  class="btn btn-secondary btn-lg center"> ยืนยัน</button>
            <a href="bill.php" class="btn btn-secondary btn-lg center" role="button" aria-pressed="true">ยกเลิก</a></div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </body>
    <br>
    <br>
    <!--== Login Page Content End ==-->

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