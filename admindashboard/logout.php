<?php
include("../session.php");
//destroy the sessions saved before.
session_unset();
session_destroy();
//automatically go back to signin form
header('Location: ../dashboard_login.php');
exit();
?>