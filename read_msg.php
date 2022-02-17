<?php
include("header.php");
include("db_conn.php");



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE messages SET status = '1' WHERE msg_id = '$id'";
    $result = $mysqli->query($sql);
};




?>



<div class="container">

    <h1> Welcome to UTASBNB, <?php echo $session_user ?></h1>

    <div class="card">
        <h2 class="text-center"></h2>



        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <?php
                    $result2 = $mysqli->query("SELECT * FROM messages INNER JOIN user ON messages.send_from = user.user_id WHERE msg_id = '$id'");
                    $row2 = $result2->fetch_array(MYSQLI_ASSOC);
                    ?>
                    <tr>
                        <th>Send From:</th>
                        <td><?php echo $row2['firstname'] . ' ' . $row2['lastname']; ?></td>
                    </tr>



                    <tr>
                        <th scope="row"> Message:
                        </th>
                        <td>
                            <?php echo $row2['msg']; ?>
                        </td>

                    </tr>










                </tbody>


            </table>
            <a class="btn btn-primary" href="profile.php" role="button">Back</a>


        </div>






    </div>




</div>

<?php
include("footer.php");
?>