<?php
$title = "Edit User Type";

include("admin_header.php");
include("../db_conn.php");

$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE user_id = '$id'";
$result = $mysqli->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);


?>


<div class="container">

    <div class="card">


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
                    <tr>


                        <form method="post" action="edit_userProcess.php">
                            <input type="hidden" name="id" value="<?php echo $row['user_id'] ?>" />

                            <div class="form-group">
                                <th scope="row"> <label for="usertype">User Acess Level</label>
                                </th>
                                <td>
                                    <select class="form-control" id="" name="userType">

                                        <option value="0" <?php if ($row['usertype'] == '0') echo "selected" ?>>User</option>
                                        <option value="1" <?php if ($row['usertype'] == '1') echo "selected" ?>>Host</option>

                                    </select>
                                </td>
                            </div>

                    <tr>
                        <td>
                            <a class="btn btn-primary" href="users_list.php" role="button">Back</a>
                        </td>
                        <td>
                            <button type="submit" name="submit" class="btn btn-success float-right">Save Changes</button>
                        </td>
                       
                    </tr>
                    </form>

                    </tr>

                </tbody>
            </table>
        </div>

    </div>


</div>


<?php
include("admin_footer.php");
?>