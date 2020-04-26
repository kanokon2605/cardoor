<?php 
    session_start();

    include_once 'dbconnect.php'; 

?>


<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/invoice.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        
        <div class="invoice-box">
            <table  >
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="assets/img/car.png" alt="JSOFT"> 
                                    &nbsp Invoice <br>
                                    </td>
                                    </tr>
                                <td >
                                    วันที่เริ่มเช่า: <?php echo $_GET['date']; ?><br>
                                    วันที่ส่งคืน:  <?php echo $_GET['date1']; ?><br>
                                    สถานที่รับรถ: <?php echo $_GET['location']; ?>

                                </td>
                           
                        </table>
                    </td>
                </tr>
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    <?php echo $_SESSION['firstname'];?><br>
                                   
                                    <a href="#"  style="color:#666; text-decoration:none"><?php echo $_SESSION['email'];?></a>
                                    <br>
                                    <a href="#" style="color:#666; text-decoration:none">0897586542</a>                                
                                </td>
                                
                            </tr>
                        
                            
                        </table>
                        
                    </td>
                </tr>
                
                <tr class="heading">
                    <td>
                        Payment Method
                    </td>
                    <td>
                        Check #
                    </td>
                </tr>
                
                <!-- <tr class="heading">
                    <td>
                        Option
                    </td>
                    <td>
                        Details
                    </td>
                </tr> -->
                <!-- <tr class="item">
                    <td>
                        Hotel
                    </td>
                    <td>
                        Premium Plaza Hotel
                    </td>
                </tr>
                <tr class="item">
                    <td>
                        Room Type
                    </td>
                    <td>
                        Standard Family Room $81
                    </td>
                </tr> -->
                <tr class="item ">
                    <td>
                        Days 
                    </td>
                    <td>
                        2
                    </td>
                </tr>
                <!-- <tr class="item ">
                    <td>
                        Persons
                    </td>
                    <td>
                        3
                    </td>
                </tr> -->
                <tr class="item last">
                    <td>
                        Taxes
                    </td>
                    <td>
                        7%
                    </td>
                </tr>
                <tr class="total">
                    <td></td>
                    <td style="padding-top:50px;"> 
                        Total: <?php echo $_GET['sum']; ?> 
                    </td>
                </tr>
            </table>
        </div>
        <a href="javascript:window.print()" class="rent-btn">Print this invoice</a>
        <!-- <a href="javascript:window.print()" class="print-button">Print this invoice</a>  -->
    </body>
</html>