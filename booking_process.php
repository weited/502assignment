<?php
    include('db_conn.php');

if(isset($_POST['bookingsubmit'])){

$bookinguserid=mysqli_real_escape_string($mysqli,$_POST['bookinguserid']);
$bookinghouseid=mysqli_real_escape_string($mysqli,$_POST['bookinghouseid']);

$bookinglocation=mysqli_real_escape_string($mysqli,$_POST['bookinglocation']);
$bookingcheckindate= mysqli_real_escape_string($mysqli,$_POST['bookingcheckindate']);
$bookingcheckoutdate=mysqli_real_escape_string($mysqli,$_POST['bookingcheckoutdate']);
$bookingguest=mysqli_real_escape_string($mysqli,$_POST['bookingguest']);
$bookingdays= mysqli_real_escape_string($mysqli,$_POST['bookingdays']);
$bookingprice=mysqli_real_escape_string($mysqli,$_POST['bookingprice']);


$sql = "INSERT INTO booking (`house_id`,`user_id`,`checkin`,`checkout`,`price`) VALUES ('$bookinghouseid','$bookinguserid','$bookingcheckindate','$bookingcheckoutdate','$bookingprice')";
$mysqli->query($sql);




echo "<script type='text/javascript'>alert('booking successful');
    window.location='profile.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('booking error, please try again');
    window.location='index.php';</script>";
}

?>