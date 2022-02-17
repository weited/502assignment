<?php


include("../db_conn.php");

if (isset($_GET['id'])) {
    //get ID from GET
    $id = $_GET['id'];



    // Dlete SQL
    $sql = "UPDATE booking SET status = '1' WHERE booking_id = '$id'";
    $result = $mysqli->query($sql);

    echo
    "<script type='text/javascript'>
    alert('The booking is accepted!')
    window.location='bookings.php';</script>";

}    