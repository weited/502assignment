<?php
include("session.php");
//destroy the sessions saved before.
//session_unset();
//session_destroy();

unset($_SESSION['session_manager_id']);
//automatically go back to signin form


header('Location: login.php');
exit();
?>