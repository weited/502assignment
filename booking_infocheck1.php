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

$query = "SELECT * FROM house where  house_id = $id";
$result = mysqli_query($mysqli, $query);
}
?>

<div class="container">
    <div class="card">


        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Location:</th>
                        <td><?php echo $session_location; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Check In:</th>
                        <td><?php echo $session_checkindate; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Check Out:</th>
                        <td><?php echo $session_checkoutdate; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Guest(s):</th>
                        <td><?php echo $session_geust; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Stay nights:</th>
                        <td><?php echo $days ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Price:</th>
                        <td></td>
                    </tr>
                    <tr>


                        <form method="post" action="edit_userProcess.php">
                            <input type="hidden" name="id" value="<?php echo $row['user_id'] ?>" />

                            <div class="form-group">
                                <th scope="row"> <label for="usertype">User Acess Level</label>
                                </th>
                                <td>

                                </td>
                            </div>

                    <tr>
                        <td>
                            <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
                        </td>
                        <td></td>
                    </tr>
                    </form>

                    </tr>

                </tbody>
            </table>
        </div>
        <div class="card-body">
            <a href="user_list.php" class="card-link">Update your details</a>
            <a href="#" class="card-link">Change your password</a>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>