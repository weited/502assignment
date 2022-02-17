<?php
//starting session
session_start();

//if the session for username has not been set, initialise it
if(!isset($_SESSION['session_userid'])){
	$_SESSION['session_userid']="";
    $_SESSION['session_user'] = "";
    $_SESSION['session_email'] = "";
    $_SESSION['session_usertype'] = "";
}
//save username in the session 
$session_userid=$_SESSION['session_userid'];
$session_user = $_SESSION['session_user'];
$session_email = $_SESSION['session_email'];
$session_usertype = $_SESSION['session_usertype'];
//$session_access = $_SESSION['session_access'];
//header("location: index1.php");



?>