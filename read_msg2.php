<?php
    include('session.php');
    include('db_conn.php');

if (isset($_GET['id'])){
$id = $_GET['id'];

$sql = "UPDATE messages SET status = '1' WHERE msg_id = $id'";
$result = $mysqli->query($sql);



};

?>
