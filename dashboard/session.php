<?php
//starting session
session_start();

//if the session for username has not been set, initialise it
if(!isset($_SESSION['session_manager_id'])){
	$_SESSION['session_manager_id']="";
    $_SESSION['session_manager'] = "";
    //$_SESSION['session_email'] = "";
    //$_SESSION['session_usertype'] = "";
    $_SESSION['session_access'] = "";

}
//save username in the session 
$session_manager_id=$_SESSION['session_manager_id'];
$session_manager = $_SESSION['session_user'];
//$session_email = $_SESSION['session_email'];
//$session_usertype = $_SESSION['session_usertype'];
$session_access = $_SESSION['session_access'];
//header("location: index1.php");
?>