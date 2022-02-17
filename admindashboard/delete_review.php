<?php


include("../db_conn.php");

if (isset($_GET['id'])) {
    //get ID from GET
    $id = $_GET['id'];



    // Dlete SQL
    $sql = "DELETE FROM reviews WHERE review_id = '$id'";
    $result = $mysqli->query($sql);



    if ($result) {
    echo "<script type='text/javascript'>
    alert('The review is deleted!')
    ;window.location='review_list.php';</script>";
    //header("Location: users_list.php");
    }
    

  
}
