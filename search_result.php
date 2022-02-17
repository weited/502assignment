<?php
include('header.php');
include('db_conn.php');


if (isset($_POST['submit-search'])) {
    $numberpeople = $_POST['nbofpeople'];
    $location = $_POST['searchlocation'];
    $checkindate = $_POST['searchcheckin'];
    $checkoutdate = $_POST['searchcheckout'];

    $indate = strtotime($checkindate);
    $oudate = strtotime($checkoutdate);
    $day_diff = $oudate - $indate;


    $_SESSION['session_location'] = $location;
    $_SESSION['session_guest'] = $numberpeople;
    $_SESSION['session_checkindate'] = $checkindate;
    $_SESSION['session_checkoutdate'] = $checkoutdate;



    $query = "SELECT * FROM house where  houseCheckin < '$checkindate' and houseCheckout>'$checkoutdate' and houseCity='$location' and houseMaxppl > '$numberpeople'";
    $result = mysqli_query($mysqli, $query);
    $queryresult = mysqli_num_rows($result);
}


?>









<!--Filter Butten-->
<div class="Title">
    <h1>Welcome To Australia</h1>

    <h3 class="all explore-all-accommodation"> <?php echo "There are " . $queryresult . " results!"; ?></h3>
</div>

<!--Accommodation 1 Content-->
<div class="content clearfix">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="main-content">

            <div class="house-list">

                <div>
                    <?php echo "<img src='img/" . $row['houseImage'] . "' alt='accommodation 1' class='accommodation-image'>" ?>
                </div>
                <div class="post-review">
                    <h2>
                        <?php echo $row['houseName']; ?></h2>

                    <i class="far fa-calendar">Available Now</i>
                    <p class="preview-text"><?php echo "Address " . $row['houseAddress'] . "<br>"; ?> </p>
                    <p class="preview-text"><i class="fas fa-male"> <?php echo "Max people: " . $row['houseMaxppl'] . " guests   "; ?></i>
                        <i class="fas fa-bed"><?php echo $row['houseRooms'] . " bedrooms"; ?></i>
                        <i class="fas fa-bath"><?php echo $row['houseBathrooms'] . " baths"; ?></i>
                    </p>
                    <p class="preview-text"><?php echo $row['houseEntire'] . ". " . $row['houseInternet'] . ". " . $row['houseGarage'] . ". " . $row['housePet'] . ". " . $row['houseSmoke'] . ". "; ?></p>
                    <p class="preview-description"><?php echo "Description: " . $row['houseDescription'] ?></p>

                    <div class="price">
                        <p class="Price-preweek"><?php echo "$" . $row['housePrice'] . "AUD/ Daily price" ?></p>

                    </div>


                    <i class="fas fa-star"><span><b>House rate: <?php echo $row['houseRate']; ?></b></span></i>


                    <!-- Button trigger modal -->
                    <button type="button" class="btn read-more" id="read-more" data-toggle="modal" data-target="#readmoremodal">
                        Read More
                    </button>
                    <a class="btn btn-danger bookingbtn" href="booking_infocheck.php?id=<?php echo $row['house_id']; ?>">
                        Booking Now!</a>

                    <!-- Modal content-->
                    <div class=" modal fade information" id="readmoremodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">More Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Address</h5>
                                    <p class="address-one"><?php echo $row['houseAddress']; ?></p>

                                    <div class="More-information">
                                        <h5>House policy</h5>
                                        <p class="home-policy">Check-in: After 2:00 pm</p>
                                        <p class="home-policy">Checkout: 10:00 am</p>
                                        <p class="home-policy"><?php echo $row['housePet']; ?></p>
                                        <p class="home-policy"> No parties or events</p>

                                    </div>
                                    <div class="More-information">
                                        <h5>Amenities</h5>
                                        <h6 class="amenities"> Parking and facilities</h6>
                                        <p class="amenities"> Free parking on premises</p>
                                        <h6 class="amenities"> Kitchen and dining</h6>
                                        <p class="amenities"> Hot water kettle, Microwave, Refrigerator, Dishwasher, Dishes and cutlery, Cooking basic, Oven, Wine glasses Dining, table, Freezer, Toaster</p>
                                        <h6 class="amenities"> Bathroom</h6>
                                        <p class="amenities"> Hot water, Body soap, Shampoo, Hair dryer</p>
                                        <h6 class="amenities"> Bedroom and laundry</h6>
                                        <p class="amenities"> Bed linen, Washing machine, Dryer, Essentials, Towels, bed sheets, soap and toilet, paper, Hangers, Iron</p>
                                        <h6 class="amenities">Entertainment</h6>
                                        <p class="amenities"> TV</p>
                                        <h6 class="amenities"> Air conditioning</h6>
                                        <p class="amenities"> Heating</p>
                                        <h6 class="amenities">Home safety</h6>
                                        <p class="amenities"> Smoke alarm, Fire extinguisher</p>
                                        <h6 class="amenities">Internet and office</h6>
                                        <p class="amenities"> Wi-Fi</p>
                                        <h6 class="amenities">Location features</h6>
                                        <p class="amenities"> Beachfront, Private entrance</p>
                                        <h6 class="amenities">Outdoor</h6>
                                        <p class="amenities"> Outdoor furniture, BBQ grill, Patio or balcony</p>
                                        <h6 class="amenities">Services</h6>
                                        <p class="amenities"> Long-term stays allowed</p>
                                    </div>
                                    <div class="More-information">
                                        <h5>Location</h5>
                                        <p class="home-Location">Serenity @ Scamander is located 19kms to St. Helens, 58kms to Bicheno, 85kms to Derby and 96kms to Freycinet NP.</p>
                                        <p class="home-Location">Take a scenic drive out to the Bay of Fires and drop into the stunning little beachside town of Binalong Bay all within 30 minutes drive.</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php };
    ?>
</div>






<?php
include('footer.php');
?>