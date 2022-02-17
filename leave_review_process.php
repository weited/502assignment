<?php
include("header.php");
include("db_conn.php");

if (isset($_POST['submit'])) {
    $reviewer_id = $session_userid;
    $receiver_id = $_POST['host_id'];
    $house_id = $_POST['house_id'];
    $rating = $_POST['rating'];
    $comment = $_POST['review'];
    

    $sql = "INSERT INTO reviews (`reviewer_id`, `receiver_id`, `house_id`, `rating`,`comment`) VALUES ('$reviewer_id', '$receiver_id', '$house_id', '$rating','$comment')";
    $result = $mysqli->query($sql);
   
    echo "<script type='text/javascript'>alert('Your review is send!');window.location='profile.php';</script>";
}

?>