<?php
$title = "Reject booking";

include("host_header.php");
include("../db_conn.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE user_id = '$id'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);
} else {
    echo "<script type='text/javascript'>
    alert('error!')
    window.location='bookings.php';</script>";
}

?>


<div class="container">

    <div class="card">


        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                   



                    <form method="post" action="reject_booking_process.php">
                        <input type="hidden" name="booking_id" value="<?php echo $id; ?>" />
                        



                        <div class="form-group">
                            <tr>
                                <th scope="row"> <label for="exampleFormControlTextarea1">Reject reason:</label>
                                </th>
                                <td>
                                    <textarea name="reject_note" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </td>

                            </tr>

                        </div>





                        <tr>

                            <td>
                                <a class="btn btn-primary" href="bookings.php" role="button">Back</a>
                            </td>
                            <td>
                                <button type="submit" name="reject" class="btn btn-success float-right">Send</button>
                            </td>

                        </tr>
                    </form>


                </tbody>
            </table>
        </div>

    </div>


</div>


<?php
include("host_footer.php");
?>