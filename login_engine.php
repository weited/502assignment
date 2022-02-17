<?php
include ('db_conn.php');
include ('session.php');

if(isset($_POST)){
$user_email = trim($_POST['login_email']);
$user_password = trim($_POST['login_password']);

$salt = "utasbnb";
$encrypted_password = crypt($user_password, $salt);


$sql ="SELECT * FROM user WHERE email='$user_email' AND password='$user_password'";
$result = $mysqli->query($sql);
    //convert the result to array (the key of the array will be the column names of the table)
$row=$result->fetch_array(MYSQLI_ASSOC);
echo $row;
    //if($row['email'] != $user_email ){
    if (!$row) {
        echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
 } else {
  // if($row['password']==$user_password) {

  //   $_SESSION['session_id'] = $row['user_id'];
  //   $_SESSION['session_user']=$row['firstname'];
  //   $_SESSION['session_email']=$row['email'];
     //$_SESSION['session_access']=$row['type'];

     echo "ok";
   } 
   //else {
  //   echo "Invalid password! Please try again.";
  // }
 //}
//}
   }
?>