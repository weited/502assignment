<?php
include('host_header.php');
include('../db_conn.php');
?>








<div class="row content">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <b>Review list</b>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <!-- <caption></caption> -->
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">House</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Comment</th>
                                <th scope="col">From</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            $result = $mysqli->query("SELECT * FROM reviews INNER JOIN house ON reviews.house_id = house.house_id INNER JOIN user ON reviews.reviewer_id = user.user_id WHERE receiver_id = '$session_manager_id'");
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i++ ?></th>
                                    <td><?php echo $row['houseName'] ?></td>
                                    <td><?php echo $row['rating'] ?></td>
                                    <td><?php echo $row['comment'] ?></td>
                                    <td><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></td>
                                    

                                </tr>
                            <?php }; ?>

                        </tbody>
                    </table>


                </div>







            </div>

        </div>


    </div>







</div>

<!--register modal-->
<section class="register-modal">
    <div class="modal fade" id="register" data-backdrop="static" data-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <div class="modal-title">
                        <h3>Add New User</h3>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>




                <div class="modal-body">

                    <form action="../register.php" method="post">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="displayAbn">host or client?</label>
                                <select id="displayAbn" class="form-control">
                                    <option selected>Choose account type</option>
                                    <option value="client">Client</option>
                                    <option value="host">Host</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fstName">First Name</label>
                                <input type="text" class="form-control" id="fstNameC" name="fname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastNameC" name="lname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="emailC" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobNumber">Mobile Number</label>
                                <input type="text" class="form-control" id="mobNumberC" name="phone" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="passwordC" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%])[A-Za-z\d@$!%]{6,12}$" title="Must contain at least 1 lower case letter, 1 uppercase letter, 1 number and one of following special characters !@#$%" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" id="repasswordC" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddressC" name="address" placeholder="Address">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputSuburb">Suburb</label>
                                <input type="text" class="form-control" name="suburb" id="inputSuburbC">
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
                            <div class="form-group col-md-12" id="abnNumberDiv">
                                <label for="abnNumber">ABN Number</label>
                                <input type="text" class="form-control" id="abnNumber" name="abn">
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


    <!--change usertype Modal -->
    <div class="modal fade" id="changetype" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Your room number is: <span class="userType">console.log(userTypeLevel)</span>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <?php
    include("host_footer.php");
    ?>