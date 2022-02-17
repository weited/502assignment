<?php
include("header.php");
include("db_conn.php");

if ($session_userid == "") {
    echo "<script type='text/javascript'>alert('You need to login!!');
    window.location='login.php';</script>";
}


$sql = "SELECT * FROM user WHERE user_id='$session_userid'";
$result = $mysqli->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

?>





<div class="container">

    <h1> Welcome to UTASBNB, <?php echo $session_user ?></h1>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Info</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My booking</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Inbox</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!-- personal information -->
            <div class="card">

                <div class="card-body">
                    <b class="card-title">
                        Personal Information
                    </b>

                </div>
                <div class="card-body">

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Name:</th>
                                <td><?php echo $row['firstname'] . "  " . $row['lastname']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email:</th>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Mobile:</th>
                                <td><?php echo $row['phone']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Postal Address:</th>
                                <td><?php echo $row['address'] . ', ' . $row['state'] . ', ' . $row['postcode']; ?></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link" data-toggle="modal" data-target="#update_details">Update your details</a>
                    <a href="change_psw.php" class="card-link">Change your password</a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <!-- personal booking order -->
            <div class="card">

                <div class="card-body">
                    <b class="card-title">
                        My booking list
                    </b>

                </div>
                <div class="card-body">
                    <div class="table-respnsive">
                        <table class="table table-hover">

                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">HouseName</th>
                                    <th scope="col">Check In</th>
                                    <th scope="col">Check Out</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Note</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;

                                $booked = $mysqli->query("SELECT * FROM booking INNER JOIN house ON booking.house_id = house.house_id INNER JOIN user ON booking.user_id = user.user_id WHERE booking.user_id = '$session_userid'");
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
                                                echo "<button class='btn btn-outline-danger'>Rejected</button>";
                                            } ?></td>
                                        <td>
                                            <?php if ($row['status'] == '0') {
                                                echo "<a  class='btn btn-danger' href='cancle_booking.php?id=" . $row['booking_id'] . "'>Cancel</a>";
                                            } else if ($row['status'] == '1') {
                                                echo "<a class='btn btn-info btn-block' href='payment.php?id=" . $row['booking_id'] . "'>Pay  </a>";
                                            } else if ($row['status'] == '2') {
                                                echo "<a class='btn btn-primary' href='leave_review.php?id=" . $row['house_id'] . "'>Review</a>";
                                            }  ?>






                                        </td>
                                        <td><?php if (!empty($row['note'])) {
                                                echo "Rejected reason:" . $row['note'];
                                            } ?></td>

                                    </tr>
                                <?php };
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...
            <div class="card-body">
                <div class="table-responsive">
                    <table id="inboxlist" class="table table-bordered table-hover">
                        <!-- <caption></caption> -->
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Send From</th>
                                <th scope="col">Time</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            $result = $mysqli->query("SELECT * FROM messages INNER JOIN user ON messages.send_from = user.user_id WHERE messages.send_to = '$session_userid'");
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i++ ?></th>
                                    <td><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></td>

                                    <td><?php echo $row['time'] ?></td>
                                    <td><?php if ($row['status'] == '0') {
                                            echo '<b>Unread</b>';
                                        } else if ($row['status'] == '1') {
                                            echo 'Read';
                                        } ?></td>
                                    <td><a class="btn btn-primary" href="read_msg.php?id=<?php echo $row['msg_id']; ?>">Read</a> </td>

                                </tr>
                            <?php }; ?>

                        </tbody>
                    </table>


                </div>







            </div>
        </div>
    </div>




    <div class="register-modal">
        <div class="modal fade" id="update_details" data-backdrop="static" data-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <div class="modal-title">
                            <h3>Update Account Details</h3>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>




                    <div class="modal-body">
                        <?php
                        $sql = "SELECT * FROM user WHERE user_id='$session_userid'";
                        $result = $mysqli->query($sql);
                        $row = $result->fetch_array(MYSQLI_ASSOC);
                        ?>
                        <form action="regi.php" method="post">

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="fstName">First Name</label>
                                    <input type="text" class="form-control" id="fstName" name="fname" value="<?php echo $row['firstname']; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lname" value="<?php echo $row['lastname']; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                                </div>
                                <div class=" form-group col-md-6">
                                    <label for="mobNumber">Mobile Number</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" required>
                                </div>

                            </div>
                            <div class=" form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" name="address" value="<?php echo $row['address']; ?>">
                                </div>
                                <div class=" form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputSuburb">Suburb</label>
                                    <input type="text" class="form-control" name="suburb" id="inputSuburb">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State/Territory</label>
                                    <select id="inputState" name="state" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="ACT">Australian Capital Territory</option>
                                        <option value="NSW">New South Wales</option>
                                        <option value="NT ">Northern Territory</option>
                                        <option value="QLD">Queensland</option>
                                        <option value="SA ">South Australia</option>
                                        <option value="TAS">Tasmania</option>
                                        <option value="VIC">Victoria</option>
                                        <option value="WA ">Western Australia</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="postCode">PostCode</label>
                                    <input type="text" class="form-control" id="postCodeC" name="postcode">
                                </div>

                            </div>

                            <div class="form-row">

                                <button type="submit" name="signup" class="btn btn-danger">Sign Up</button>
                            </div>


                    </div>


                    </form>
                </div>
            </div>
        </div>



    </div>




</div>


<?php
include("footer.php");
?>