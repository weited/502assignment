<?php


$name="";
$address="";
$id="";

$edit_state =false;

include('../db_conn.php');




//if(isset($_POST['save'])){

  //$name=$_POST['name'];
  //$address=$_POST['address'];

 
  //$query = "INSERT INTO info (name,address) values('$name','$address')";
  //mysqli_query($mysqli, $query);
 // header('location:modal.php');
    
//}

//update reccords

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
    
    
    
    
    echo "<script type='text/javascript'>alert('Updated successful');
window.location='accommdations.php';</script>";
   
    

}

//delect record

if (isset($_GET['del'])){
    $id = $_GET['del'];
    mysqli_query($mysqli,"DELETE from house Where house_id =$id ");
    
    echo "<script type='text/javascript'>alert('Deleted successful');
window.location='accommdations.php';</script>";
    

}




$result = mysqli_query($mysqli,"SELECT * FROM house WHERE host_id ='$session_manager_id' ");



//records show


?>