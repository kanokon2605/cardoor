<?php 

    include_once 'dbconnect.php'; 

    echo '<pre>';
    print_r ($_POST);
    echo '</pre>';
    exit();

    if (isset($_POST['submit'])){
        $car_type = $_POST['car_type'];
     
        $query = "SELECT * FROM cartable WHERE car_type LIKE '%$car_type%'";
        
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
 
        if ($result){
            echo '<script> alert("Register Completed!!")</script>';
            header('Refresh:0; url = bill1.php');
        }else{
            echo '<script> alert("Someting went wrong!!")</script>';
            header("Refresh:0; url = bill.php");
        }
    }

?>