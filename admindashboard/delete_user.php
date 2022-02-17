<?php


include("../db_conn.php");

if (isset($_GET['id'])) {
    //get ID from GET
    $id = $_GET['id'];



    // Dlete SQL
    $sql = "DELETE FROM user WHERE user_id = '$id'";
    $result = $mysqli->query($sql);



    if ($result) {
    echo "<script type='text/javascript'>
    alert('A participant is deleted!')
    ;window.location='users_list.php';</script>";
    //header("Location: users_list.php");
    }
    else {
        echo "<script type='text/javascript'>
    alert('Unable to delete! There are houses or bookings under this user.');
    window.location='users_list.php';</script>";

        //header("Location: users_list.php");

    };
    
    //echo "<script>alert('A participant is deleted!')";
    // Redirect to index.php

}


?>
