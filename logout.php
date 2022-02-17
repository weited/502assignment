<?php
include("session.php");
//destroy the sessions saved before.
//session_unset();

//session_destroy();
//automatically go back to signin form

unset($_SESSION['session_userid']);

header('Location: ./index.php');
exit();
?>