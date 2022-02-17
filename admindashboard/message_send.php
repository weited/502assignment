<?php
include('../db_conn.php');


if (isset($_POST['submit'])) {
    $send_from = $_POST['sendfrom_id'];
    $send_to = $_POST['sendto_id'];
    $msg = $_POST['message'];
    date_default_timezone_set("Australia/Sydney");
    $time = date("Y-m-d h:i:s");
    
    $sql = "INSERT INTO messages (`msg`, `send_from`, `send_to`, `time`) VALUES ('$msg', '$send_from', '$send_to', '$time')";
    $result = $mysqli->query($sql);

    echo "<script type='text/javascript'>alert('Your message is send!');window.location='users_list.php';</script>";
    
    
}
