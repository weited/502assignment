<?php
// connect db



include("header.php");
include("db_conn.php");

if ($session_userid == "") {
   echo "<script type='text/javascript'>alert('You need to login!!');
   window.location='login.php';</script>";
}

if(isset($_GET['id'])){
$id = $_GET['id'];


$session_location = $_SESSION['session_location'];
$session_checkindate = $_SESSION['session_checkindate'];
$session_checkoutdate = $_SESSION['session_checkoutdate'];
$session_geust = $_SESSION['session_guest'];

$indate = strtotime($session_checkindate);
$oudate = strtotime($session_checkoutdate);
$day_diff = $oudate - $indate;

$days = floor($day_diff / (60 * 60 * 24));

$query = "SELECT * FROM house where house_id = $id";
$result = mysqli_query($mysqli, $query);
$row = $result->fetch_array(MYSQLI_ASSOC);
}
?>

 
<form class="bookingform" method="post" action="booking_process.php">
    <h2>Booking Requirment</h2>

    <input type="hidden" name="bookinghouseid" value="<?php echo $row['house_id']; ?>">
    <input type="hidden" name="bookinguserid" value="<?php echo $session_userid; ?>">

    <div class="input-group-booking">
             <label>Location:</label>
             <input type="text" name="bookinglocation" value="<?php echo $session_location; ?>">
    </div>

    <div class="input-group-booking">
             <label>Check In:</label>
             <input type="text" name="bookingcheckindate" value="<?php echo $session_checkindate; ?>">
    </div>

    <div class="input-group-booking">
             <label>Check Out:</label>
             <input type="text" name="bookingcheckoutdate" value="<?php echo $session_checkoutdate; ?>">
    </div>

    <div class="input-group-booking">
             <label>Guest(s):</label>
             <input type="text" name="bookingguest" value="<?php echo $session_geust; ?>">
    </div>

    <div class="input-group-booking">
             <label>Stay nights:</label>
             <input type="text" name="bookingdays" value="<?php echo $days ?>">
    </div>

    <div class="input-group-booking">
             <label>Price:</label>
             <input type="text" name="bookingprice" value="<?php echo $row['housePrice']*$days ?>">
    </div>

    <div class="input-group">     
        <button type="submit" name="bookingsubmit" class="bookingbtn">Confirm Booking</button>       
    </div>  

</form>




<?php
include("footer.php");
?>