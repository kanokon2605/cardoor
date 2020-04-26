<?php

    $conn = mysqli_connect("localhost","root","","car");

    if(!$conn) {
        die("Failed to connec to database" . mysqli_error($conn));
    }
?>