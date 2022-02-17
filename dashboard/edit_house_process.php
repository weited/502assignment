<?php
    include('session.php');
    include('../db_conn.php');
    

    if(isset($_POST['update'])){
        $Eid=mysqli_real_escape_string($mysqli,$_POST['edithouseid']);
        $Ename=mysqli_real_escape_string($mysqli,$_POST['editname']);
        $Eaddress= mysqli_real_escape_string($mysqli,$_POST['editaddress']);

        $Ecity=mysqli_real_escape_string($mysqli,$_POST['editcity']);
        $Emaxppl=mysqli_real_escape_string($mysqli,$_POST['editmaxppl']);
        $Eprice= mysqli_real_escape_string($mysqli,$_POST['editprice']);
        $Erooms=mysqli_real_escape_string($mysqli,$_POST['editrooms']);
        $Ebathrooms=mysqli_real_escape_string($mysqli,$_POST['editbathrooms']);
        $Echeckin= mysqli_real_escape_string($mysqli,$_POST['editcheckin']);
        $Echeckout=mysqli_real_escape_string($mysqli,$_POST['edithcheckout']);
        $Eentire=mysqli_real_escape_string($mysqli,$_POST['editentire']);
        $Einternet= mysqli_real_escape_string($mysqli,$_POST['editinternet']);
        $Egarage=mysqli_real_escape_string($mysqli,$_POST['editgarage']);
        $Esmoke=mysqli_real_escape_string($mysqli,$_POST['editsmoke']);
        $Epet= mysqli_real_escape_string($mysqli,$_POST['editpet']);
        $Edescription=mysqli_real_escape_string($mysqli,$_POST['editdescription']);



        mysqli_query($mysqli,"UPDATE house set
        houseName = '$Ename',
        houseAddress='$Eaddress',
        houseCity = '$Ecity',
        houseMaxppl = '$Emaxppl',
        housePrice = '$Eprice',
        houseRooms = '$Erooms',
        houseCheckin = '$Ebathrooms',
        houseCheckout = '$Echeckin',
        houseBathrooms = '$Echeckout',
        houseEntire = '$Eentire',
        houseInternet = '$Einternet',
        houseGarage = '$Egarage',
        houseSmoke = '$Esmoke',
        housePet = '$Epet',
        houseDescription = '$Edescription'
        where house_id=$Eid");



    if ($session_access == '1') {
        echo "<script type='text/javascript'>alert('Updated successfully');
        window.location = '../hostdashboard/accommdations.php';</script>";
    } else if ($session_access == '2') {
        echo "<script type='text/javascript'>alert('Updated successfully');
        window.location = '../admindashboard/accommdations.php';</script>";
    };

    }

?>