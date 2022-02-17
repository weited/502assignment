   <?php
include('../db_conn.php');
$msg="";
if(isset($_POST['new-submit']) )
{
  $target="image/".basename($_FILES['newimage']['name']);
  $image=$_FILES['newimage']['name'];

  $newhostId = $_POST['New-hostid'];
  $newhousename = $_POST['New-housename'];
$newhousaddress = $_POST['New-houseaddress'];

$newhouscity = $_POST['New-housecity'];
$newhousemaxppl = $_POST['New-housemaxppl'];
$newhouseprice = $_POST['New-houseprice'];
$newhouserooms = $_POST['New-houserooms'];
$newhousebathrooms = $_POST['New-housebathrooms'];
$newhousecheckin = $_POST['New-housecheckin'];
$newhousecheckout = $_POST['New-housecheckout'];
$newhouseentire = $_POST['New-houseentire'];
$newhouseinternet = $_POST['New-houseinternet'];
$newhousegarage = $_POST['New-housegarage'];
$newhousesmoke = $_POST['New-housesmoke'];
$newhousepet = $_POST['New-housepet'];
$newhousedescription = $_POST['New-housedescription'];

$query="INSERT INTO house(host_id,houseName,houseAddress,houseCity,houseMaxppl,housePrice,houseRooms,houseCheckin,houseCheckout,houseBathrooms,houseEntire,houseInternet,houseGarage,houseSmoke,housePet,houseDescription,houseImage)VALUES('$newhouseId','$newhousename','$newhousaddress','$newhouscity','$newhousemaxppl','$newhouseprice','$newhouserooms','$newhousecheckin','$newhousecheckout','$newhousebathrooms','$newhouseentire','$newhouseinternet','$newhousegarage','$newhousesmoke','$newhousepet','$newhousedescription','$image')";
 
  
  

mysqli_query($mysqli,$query);

if(move_uploaded_file($_FILES['newimage']['name'],$target)){
  

}else { echo "<script type='text/javascript'> alert('You are successfully shared new house!');
  window.location='accommdations.php';</script>";


}

}
?>






