index.php line6

<div class="banner">
    <div class="banner-overlayer">
        <!--searching Form-->

        <!--no real action.  submit to show the accomodation list-->
        <form action="accommodation.php">
            <div class="form searching-bar">
                <div class="form-group row  check-availability justify-content-center">
                    <div class="check-selection">
                        <label class="location">Location</label>
                        <input type="location" class="form-control" id="Client-name" placeholder="Where are you going?" title="Where are you going?" required>
                    </div>

                    <div class="check-selection">
                        <label for="check in date">Checking in</label>
                        <input type="date" class="form-control" id="checkin-date" placeholder="Date/Month/Year" required>
                    </div>
                    <div class="check-selection">
                        <label for="check out date">Checking out</label>
                        <input type="date" class="form-control" id="checkout-date" placeholder="Date/Month/Year" required>
                    </div>
                    <div class="check-selection">
                        <label for="Number of Adults select">Adults</label>
                        <input type="number" class="form-control" id="nbAdult" value="" min="0" max="10" required>

                    </div>
                    <div class="check-selection">
                        <label for="Number of Children select">Children</label>
                        <input type="number" class="form-control" id="nbChild" value="" min="0" max="10">
                    </div>

                </div>
                <div class="form-group row checking-bar justify-content-center">



                    <button type="submit" class="btn btn-danger btn-lg active col-md-auto">Check Availability</button>
                </div>


            </div>
        </form>



    </div>


</div>

-->

profile.php 96

INNER JOIN user ON booking.house_id =


booking_list


$bkUser = $mysqli->query("SELECT * FROM user");
$bkUser_arr = array();
while ($row = $bkUser->fetch_array(MYSQLI_ASSOC)) {
$bkUser_arr[$row['user_id']] = $row;