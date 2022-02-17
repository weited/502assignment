<?php
$title = "Bookings";
include('admin_header.php');

// connect db
include('../db_conn.php');



$bkUser = $mysqli->query("SELECT * FROM user");
$bkUser_arr = array();
while ($row = $bkUser->fetch_array(MYSQLI_ASSOC)) {
    $bkUser_arr[$row['user_id']] = $row;
}





?>



<div class="container-fluid">


    <div class="page-titles">
        <h2><?php echo $title ?></h2>
    </div>

    <div class="row content">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table">
                        <table class="table table-sm table-hover booking-list">
                            
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">GestName</th>
                                    <th scope="col">House Name</th>
                                    <th scope="col">Check In</th>
                                    <th scope="col">Check Out</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Note</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                $booked = $mysqli->query("SELECT * FROM booking INNER JOIN user ON booking.user_id = user.user_id INNER JOIN house ON booking.house_id = house.house_id");
                                while ($row = $booked->fetch_array(MYSQLI_ASSOC)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++ ?></th>
                                        <td><?php echo $row['firstname'] . " " . $row['lastname'] ?></td>
                                        <td><?php echo $row['houseName'] ?></td>
                                        <td><?php echo $row['checkin'] ?></td>
                                        <td><?php echo $row['checkout'] ?></td>
                                        <td><?php if ($row['status'] == '0') {
                                                echo 'Pending';
                                            } else if ($row['status'] == '1') {
                                                echo 'Waiting for  payment';
                                            } else if ($row['status'] == '2') {
                                                echo 'Paid';
                                            } else if ($row['status'] == '3') {
                                                echo 'Cancelled';
                                            } else {
                                                echo "<button class='btn btn-outline-danger btn-sm'>Rejected</button>";
                                            } ?></td>
                                        <td>
                                            <a onclick="return confirm('Are you sure you want to cancel this booking?');" href=" ../cancle_booking.php?id=<?php echo $row['booking_id'] ?>" class="btn btn-danger btn-sm <?php if ($row['status'] == '3') {echo 'disabled'; } ?> ">Cancel</a>


                                        </td>
                                        <td><?php if (!empty($row['note'])) {
                                                echo "Rejected reason: " . $row['note'];
                                            } ?></td>
                                    </tr>
                                <?php };?>
                            </tbody>
                        </table>


                    </div>


                </div>

            </div>


        </div>







    </div>


    <?php
    include('admin_footer.php');

    ?>