<?php
$title = "Edit User Type";

include("admin_header.php");
include("../db_conn.php");

if (isset($_GET['id'])) {
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE user_id = '$id'";
$result = $mysqli->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
} else {
    echo "<script type='text/javascript'>
    alert('error!')
    window.location='users_list.php';</script>";
}

?>


<div class="container">

    <div class="card">


        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Send to:</th>
                        <td><?php echo $row['firstname'] . "  " . $row['lastname']; ?></td>
                    </tr>



                    <form method="post" action="message_send.php">
                        <input type="hidden" name="sendto_id" value="<?php echo $row['user_id'] ?>" />
                        <input type="hidden" name="sendfrom_id" value="<?php echo $session_userid ?>" />



                        <div class="form-group">
                            <tr>
                                <th scope="row"> <label for="exampleFormControlTextarea1">Message</label>
                                </th>
                                <td>
                                    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </td>

                            </tr>

                        </div>





                        <tr>

                            <td>
                                <a class="btn btn-primary" href="users_list.php" role="button">Back</a>
                            </td>
                            <td>
                                <button type="submit" id="submit" name="submit" class="btn btn-success float-right">Send</button>
                            </td>

                        </tr>
                    </form>


                </tbody>
            </table>
        </div>

    </div>


</div>


<?php
include("admin_footer.php");
?>