<?php
//mysql connection (hostname, username, password, dbname);
$mysqli = new mysqli('localhost', 'root', 'dwt3712703', 'utasbnb');



// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}


?>