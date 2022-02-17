<?php
    // session start
    include("session.php");
    // database
    include("db_conn.php");

    if (isset($_POST['update'])) 
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
     
        $address = $_POST['address'];
        $suburb = $_POST['suburb'];
        $state = $_POST['state'];
        $postcode = $_POST['postcode'];
    

       

        $sql = "SELECT COUNT(*) AS num FROM user WHERE email = '$email'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($row['num']>0){
            echo "<script type='text/javascript'>alert('The Email is already exist, please try another one!');window.location='profile.php';</script>";
        }else{

        $sql = "UPDATE user SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', address = '$address',suburb = '$suburb', state = '$state', postcode = '$postcode'";

        $mysqli->query($sql);


        
            echo "<script type='text/javascript'>alert('Your details have been updated!');window.location='profile.php';</script>";
        
        }


    
    }