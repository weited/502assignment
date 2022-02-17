<?php

include('db_conn.php');
// payment method 
if (isset($_GET['id'])){
     $id = $_GET['id'];
    $result=mysqli_query($mysqli,"SELECT*from booking Where booking_id =$id ");
    $row = $result->fetch_array(MYSQLI_ASSOC);
  //echo "<script type='text/javascript'>alert('Deleted successful');
//window.location='accommdations.php';</script>";
}



?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/fe49115f62.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    
    <!--harry add-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Edit page</title>
  </head>
  <body>


  <form class="paymentmethod"method= "post" action="payment_process.php">
  
    <h2>Add Payment Method</h2>
          <input type="hidden" name="booking_id" value="<?php echo $id;?>">



          <div class="input-group-payment">
             <label>Card Number</label>
             <input  type="text" Name= "Payment-Card Number" class="form-control" placeholder="Type In Your Card Number">
          </div>
          <div class="input-group-payment">
           <label>Expires date</label>
             <input type="date" Name= "Payment-Date" class="form-control">
          </div>
          <div class="input-group-payment">
           <label>Security Code</label>
           <input  type="text" Name= "Payment-Security Code" class="form-control" placeholder="Security Code">
          </div>
          <div class="input-group-payment">
           <label>First Name</label>
             <input  type="text" Name= "Payment-First Name" class="form-control" placeholder="Type In Your First Name">
          </div>
          <div class="input-group-payment">
           <label>Last Name</label>
           <input  type="text" Name= "Payment-Last Name" class="form-control" placeholder="Type In Your Last Name">
          </div>
          <div class="input-group-payment">
           <label>Total Price</label>
           <p class="bookingtotal"><?php echo "$ ". $row['price']." AUD"?></p>


          <div class="input-group"> 
             <Button  type="submit" name="payment-confirm" class="paymentbtn">Payment Confirm</button>
          </div>
          
  </form>








</body>
</html>


