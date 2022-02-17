<?php
$title = "User Login";
include("db_conn.php");
include("header.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_email = trim($_POST['login_email']);
  $user_password = $_POST['login_password'];
    

 $salt = "utasbnb";
 $encrypted_password = crypt($user_password, $salt);

    $sql = "SELECT * FROM user WHERE email='$user_email' AND password='$encrypted_password' AND usertype!='2'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if (!$row) {
       echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
    } else {
        $_SESSION['session_userid'] =$row['user_id'];
        $_SESSION['session_user'] = $row['firstname'];
        $_SESSION['session_email'] = $row['email'];
        $_SESSION['session_usertype'] = $row['usertype'];
        //$_SESSION['session_access'] = $row['access'];
        echo "<script type='text/javascript'>window.location.href='index.php'; </script>";
    }
}
?>
<div class="container">


    <h2 class="text-center">User Login</h2>


   

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <div class="form-group row">
            <label for="email_address" class="col-md-4 col-form-label text-md-right">Email:* </label>
            <div class="col-md-6">
                <input type="email" id="login_email" class="form-control" name="login_email" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password:*</label>
            <div class="col-md-6">
                <input type="password" id="password" class="form-control" name="login_password" required>
            </div>
        </div>

        <div class="col-sm-6 offset-md-4">
            <button type="submit" name="submit" value="Sign in" class="btn btn-primary btn-block">
                Login
            </button>
        </div>

    </form>



    
    

</div>

<?php
    include("footer.php");
?>