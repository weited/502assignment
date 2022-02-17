<?php


include("../db_conn.php");

if (isset($_POST['reject'])) {
    //get ID from GET
    $booking_id = $_POST['booking_id'];
    $reject_note = $_POST['reject_note'];


    // Dlete SQL
    $sql = "UPDATE booking SET status = '4', note = '$reject_note' WHERE booking_id = '$booking_id'";
    $result = $mysqli->query($sql);

    echo
    "<script type='text/javascript'>
    alert('The booking is rejected!')
    window.location='bookings.php';</script>";
} else {
    echo
    "<script type='text/javascript'>
    alert('Error!')
    window.location='bookings.php';</script>";
}
