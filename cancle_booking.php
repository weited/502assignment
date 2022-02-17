<?php

include("session.php");
include("db_conn.php");
echo $session_usertype;

if (isset($_GET['id'])) {
    //get ID from GET
    $id = $_GET['id'];



    // Dlete SQL
    $sql = "UPDATE booking SET status = '3' WHERE booking_id = '$id'";
    $result = $mysqli->query($sql);

    if ($result) {
        if ($session_usertype == '0'
        ) {
            echo "<script type='text/javascript'>
        alert('The booking is canclled!')
        window.location = 'profile.php';
    </script>";
            //header("Location: booking_list.php");
        } else if (
            $session_usertype == '1'
        ) {
            echo "<script type='text/javascript'>
        alert('The booking is canclled!')
        window.location = '.php';
    </script>";
            //header("Location: booking_list.php");
        } else {
            echo "<script type='text/javascript'>
        alert('The booking is canclled!')
        window.location = './admindashboard/booking_list.php';
    </script>";
            //header("Location: booking_list.php");
        }
    } else {
        echo "<script type='text/javascript'>
        alert('Unable to delete! ');
        window.location = 'booking_list.php';
    </script>";

        //header("Location: users_list.php");

    };

 
    
    //echo "<script>alert('A participant is deleted!')";
    // Redirect to index.php

}
