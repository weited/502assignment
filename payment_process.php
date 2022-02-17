<?php


include("db_conn.php");

if (isset($_POST['payment-confirm'])) {
    //get ID from GET
    $booking_id = $_POST['booking_id'];



    // Dlete SQL
    $sql = "UPDATE booking SET status = '2' WHERE booking_id = '$booking_id'";
    $result = $mysqli->query($sql);

    echo
    "<script type='text/javascript'>
    alert('The booking is paid!')
    window.location='profile.php';</script>";
}


?>