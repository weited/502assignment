<?php


include("../db_conn.php");

if (isset($_POST['submit'])) {
    //extract values from the $_POST array
    $id = $_POST['id'];
 
    $userType = $_POST['userType'];

    //
    $sql = "UPDATE user SET usertype = '$userType' WHERE user_id = '$id'";
    $result = $mysqli->query($sql);
    
    // Redirect to index.php
    if ($result) {
        echo "<script type='text/javascript'>alert('Acess level has been changed!');window.location='users_list.php';</script>";
        //header("Location: users_list.php");
    } else {
        include 'errormessage.php';
    }
}

?>

 