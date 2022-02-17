<?php
$title = "User Login";
include("session.php");
include("../db_conn.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email = ($_POST['login_email']);
    $user_password = $_POST['login_password'];


    $salt = "utasbnb";
    $encrypted_password = crypt($user_password, $salt);

    $sql = "SELECT * FROM user WHERE email='$user_email' AND password='$encrypted_password' AND usertype != '0'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if (!$row) {
        echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
    } else {
        $_SESSION['session_manager_id'] = $row['user_id'];
        $_SESSION['session_manager'] = $row['firstname'];
        //$_SESSION['session_email'] = $row['email'];
        $_SESSION['session_access'] = $row['usertype'];

        if ($_SESSION['session_access'] == '1') {
            echo "<script type='text/javascript'>alert('Welcome, host!');
        window.location = '../hostdashboard/index.php';</script>";
        } else if ($_SESSION['session_access'] == '2') {
            echo "<script type='text/javascript'>alert('Welcome, System Manager!');
        window.location = '../admindashboard/index.php';</script>";
        };
    };
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="description" content="Accommodation Booking System">
    <meta name="keywords" content="Unitas PTY LTD">
    <meta name="Users" content="Client Host SyetemManager">

    <title><?php echo $title ?></title>

    <!--Boostrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dashboard.css">




</head>

<body>


    <div class="container">

        <div class="justify-content-center">



            <form class=login_form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <h2 class="text-center">Login</h2>
                <div class="login-form-group row">


                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Email:* </label>
                    <div class="col-md-6">
                        <input type="email" id="login_email" class="form-control" name="login_email" required autofocus>
                    </div>
                </div>

                <div class="login-form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password:*</label>
                    <div class="col-md-6">
                        <input type="password" id="password" class="form-control" name="login_password" required>
                    </div>
                </div>

                <div class=" loginbtn col-sm-6 offset-md-4">
                    <button type="submit" name="submit" value="Sign in" class="btn btn-primary btn-block">
                        Login
                    </button>
                </div>

            </form>

        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>






</body>

</html>