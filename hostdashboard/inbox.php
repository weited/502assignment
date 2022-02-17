<?php
include('host_header.php');
include('../db_conn.php');


?>

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
                $result = $mysqli->query("SELECT * FROM messages INNER JOIN user ON messages.send_from = user.user_id");
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $i++ ?></th>
                        <td><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></td>

                        <td><?php echo $row['time'] ?></td>
                        <td><?php echo $row['msg'] ?></td>
                        <td><a class="btn btn-primary" href="#">View</a> </td>

                    </tr>
                <?php }; ?>

            </tbody>
        </table>


    </div>







</div>

<?php
include("host_footer.php");
?>