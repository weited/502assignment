<?php
    // session start
    include("session.php");
    // database
    include("db_conn.php");

    if (isset($_POST['signup'])) 
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirmpsw = $_POST['confirmpsw'];
        $address = $_POST['address'];
        $suburb = $_POST['suburb'];
        $state = $_POST['state'];
        $postcode = $_POST['postcode'];
        $abn = $_POST['abn'];

        $salt = "utasbnb";
        $encrypted_password = crypt($password,$salt);

        if (($_POST['password']) != ($_POST['confirmpsw'])) {
        echo "<script type='text/javascript'>alert('Oops! Password did not match! Please ry again.');window.location='index.php';</script>";
        } else {

        $sql = "SELECT COUNT(*) AS num FROM user WHERE email = '$email'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row['num']>0){
            echo "<script type='text/javascript'>alert('The Email is already exist, please try another one!');window.location='index.php';</script>";
        }else{

        $sql = "INSERT INTO user (`firstname`, `lastname`, `email`, `phone`, `password`, `address`, `suburb`, `state`, `postcode`, `abn`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$encrypted_password', '$address', '$suburb', '$state', '$postcode','$abn')";

        $mysqli->query($sql);


        
            echo "<script type='text/javascript'>alert('You are successfully registered!');window.location='index.php';</script>";
        
        }
        }
    
    }








    //验证用户已经存在
    /* 

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $mysqli->query($sql);

    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row['email'] = $email) {
        echo "<script>alert('User exist'); </script>";
    }else{
        $signup = "INSERT INTO user (`firstname`, `lastname`, `email`,  `phone`, `password`, `address`, `suburb`, `state`, `postcode`, `abn`) VALUES ('$firstname','$lastname','$email','$phone'$password','$address','$suburb',$state,$postcode,$abn)";

        $mysqli->query($signup);

        if($mysqli){
            echo "You are successfully registered!";
            header('Location: index.php');

        }
    }
    }
    */

?>