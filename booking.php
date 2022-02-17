<?php
    // connect db
    


    include("header.php");
    include("db_conn.php");

    if ($session_userid == "") {
    echo "<script type='text/javascript'>alert('You need to login!!');
    window.location='login.php';</script>";
    }

    $book = $mysqli->query("INSERT INTO booking (`house_id`, `host_id`, `user_id`, ``, `password`, `address`, `suburb`, `state`, `postcode`, `abn`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$$encrypted_password', '$address', '$suburb', '$state', '$postcode','$abn')");
    $row=$booking->fetch_array(MYSQLI_ASSOC);
    


?>