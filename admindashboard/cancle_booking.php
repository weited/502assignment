<?php


include("../db_conn.php");

if (isset($_GET['id'])) {
    //get ID from GET
    $id = $_GET['id'];



    // Dlete SQL
    $sql = "UPDATE booking SET status = '3' WHERE booking_id = '$id'";
    $result = $mysqli->query($sql);



    if ($result) {
    echo
        "<script type='text/javascript'>
    alert('The booking is canclled!')
    window.location='booking_list.php';</script>";
    //header("Location: booking_list.php");
    }
    else {
        echo "<script type='text/javascript'>
    alert('Unable to delete! ');
    window.location='booking_list.php';</script>";

        //header("Location: users_list.php");

    };
    
    //echo "<script>alert('A participant is deleted!')";
    // Redirect to index.php

}

?>