<?php
include("header.php");
include("db_conn.php");

if ($session_userid == "") {
    echo "<script type='text/javascript'>alert('You need to login!!');
    window.location='login.php';</script>";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $newpassword = trim($_POST['newpassword']);
    $confirmpassword = trim($_POST['confirmpassword']);




    $salt = "utasbnb";
    $encrypted_password = crypt($newpassword, $salt);

    if ($newpassword == $confirmpassword) {

        $chg_psw = "UPDATE user SET password='$encrypted_password' WHERE user_id='5'";
        $result = $mysqli->query($chg_psw);
        if ($result) {

            echo "<script type='text/javascript'>alert('You have successfully changed your password.!');
    window.location='profile.php';</script>";
        }
    } else {

        echo '<div class="alert alert-danger">Password do not match. </div>';
    }
}




?>



<div class="container">

    <h1> Welcome to UTASBNB, <?php echo $session_user ?></h1>

    <div class="card">
        <h2 class="text-center">Change Password</h2>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

            <?php
            $result2 = $mysqli->query("SELECT * FROM user WHERE user_id='$session_userid'");
            $row = $result2->fetch_array(MYSQLI_ASSOC);
            ?>
            <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">Email: </label>
                <div class="col-md-6">
                    <input type="email" id="login_email" class="form-control" name="login_email" value="<?php echo $row['email'] ?>" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password:*</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" name="newpassword" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password:*</label>
                <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="confirmpassword" required>
                </div>
            </div>



            <div class="col-sm-6 offset-md-4">
                <button class="btn btn-link "><a href="profile.php">
                        Back</a>
                </button>
                <button type="submit" name="submit" value="Sign in" class="btn btn-primary float-right">
                    Save the change
                </button>

            </div>

        </form>
    </div>




</div>

<?php
include("footer.php");
?>