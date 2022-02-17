<?php

$title = 'Edit house';

include('../db_conn.php');

//fetch the record to be update

if (isset($_GET['edit'])) {
    $id =  $_GET['edit'];


    $rec = mysqli_query($mysqli, "SELECT * FROM house where house_id= $id");
    $record = mysqli_fetch_array($rec);

    $edithouseid = $record['house_id'];
    $editname = $record['houseName'];
    $editaddress = $record['houseAddress'];

    $editcity = $record['houseCity'];
    $editmaxppl = $record['houseMaxppl'];
    $editprice = $record['housePrice'];
    $editrooms = $record['houseRooms'];
    $editbathrooms = $record['houseBathrooms'];
    $editcheckin = $record['houseCheckin'];
    $edithcheckout = $record['houseCheckout'];
    $editentire = $record['houseEntire'];
    $editinternet = $record['houseInternet'];
    $editgarage = $record['houseGarage'];
    $editsmoke = $record['houseSmoke'];
    $editpet = $record['housePet'];
    $editdescription = $record['houseDescription'];
    $editname = $record['houseName'];
    $editaddress = $record['houseAddress'];
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/fe49115f62.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


    <!--harry add-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Edit page</title>
</head>

<body>
    <div>

        <form class="editform" method="post" action="edit_house_process.php">
            <h2>Edit Information</h2>
            <input type="hidden" name="edithouseid" value="<?php echo $edithouseid; ?>">



            <div class="input-group-edit">
                <label>House Name</label>
                <input type="text" name="editname" value="<?php echo $editname; ?>">
            </div>
            <div class="input-group-edit">
                <label>House Address</label>
                <input type="text" name="editaddress" value="<?php echo $editaddress; ?>">
            </div>
            <div class="input-group-edit">
                <label>City</label>
                <input type="text" name="editcity" value="<?php echo $editcity; ?>">
            </div>
            <div class="input-group-edit">
                <label>Maximum guest</label>
                <input type="text" name="editmaxppl" value="<?php echo $editmaxppl; ?>">
            </div>
            <div class="input-group-edit">
                <label>houseprice per day ($)</label>
                <input type="text" name="editprice" value="<?php echo $editprice; ?>">
            </div>
            <div class="input-group-edit">
                <label>Number of rooms</label>
                <input type="text" name="editrooms" value="<?php echo $editrooms; ?>">
            </div>
            <div class="input-group-edit">
                <label>Number of bathrooms</label>
                <input type="text" name="editbathrooms" value="<?php echo $editbathrooms; ?>">
            </div>
            <div class="input-group-edit">
                <label>Checking in</label>
                <input type="date" name="editcheckin" max="" id="fromDate" value="<?php echo $editcheckin; ?>">
            </div>
            <div class="input-group-edit">
                <label>Checking out</label>
                <input type="date" name="edithcheckout" min="" id="toDate" value="<?php echo $edithcheckout; ?>">
            </div>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript">
                var fromDate;
                $('#fromDate').on('change', function() {
                    fromdate = $(this).val();
                    $('#toDate').prop('min', function() {
                        return fromdate;
                    })
                });
                var toDate;
                $('#toDate').on('change', function() {
                    todate = $(this).val();
                    $('#fromDate').prop('max', function() {
                        return todate;
                    })
                });
            </script>





            <div class="input-group-edit">
                <label>Entire house</label>
                <input type="text" name="editentire" value="<?php echo $editentire; ?>">
            </div>
            <div class="input-group-edit">
                <label>Internet</label>
                <input type="text" name="editinternet" value="<?php echo $editinternet; ?>">
            </div>
            <div class="input-group-edit">
                <label>Garage</label>
                <input type="text" name="editgarage" value="<?php echo $editgarage; ?>">
            </div>
            <div class="input-group-edit">
                <label>Smoking</label>
                <input type="text" name="editsmoke" value="<?php echo $editsmoke; ?>">
            </div>
            <div class="input-group-edit">
                <label>Pet</label>
                <input type="text" name="editpet" value="<?php echo $editpet; ?>">
            </div>
            <div class="input-group-edit">
                <label>Brief description of the house</label>
                <input type="text" name="editdescription" value="<?php echo $editdescription; ?>">
            </div>







            <div class="input-group">

                <Button type="submit" name="update" class="editbtn">Update</button>


            </div>

        </form>
    </div>





    <!-- Optional JavaScript -->
    <script src="../script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>

</html>