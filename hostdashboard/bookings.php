<?php
include('host_header.php');
include('../db_conn.php');

?>




    <div class="page-titles">
        <h2>Booking orders</h2>
    </div>

    <div class="row content">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover booking-list">

                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>

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
                                $booked = $mysqli->query("SELECT * FROM booking INNER JOIN house ON booking.house_id = house.house_id INNER JOIN user ON house.host_id = user.user_id WHERE host_id = '$session_manager_id'");
                                while ($row = $booked->fetch_array(MYSQLI_ASSOC)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++ ?></th>

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
                                            <?php if ($row['status'] == '0') {
                                                echo "<button class='btn btn-primary btn-block'><a href='accept_booking.php?id=" . $row['booking_id'] . "'>Accept</a></button>";
                                                echo "<button class='btn btn-danger btn-block'><a href='reject_booking.php?id=" . $row['booking_id'] . "'>Reject</a></button>";
                                            } ?>


                                        </td>
                                        <td><?php if (!empty($row['note'])) {
                                                echo "Rejected reason: " . $row['note'];
                                            } ?></td>
                                    </tr>
                                <?php }; ?>
                            </tbody>
                        </table>



                    </div>







                </div>

            </div>


        </div>







    </div>

    <?php
    include('host_footer.php');

    ?>