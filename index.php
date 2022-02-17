<?php
$title = "Unitas PTY LTD";
include('header.php');

?>




<div class="banner">
    <div class="banner-overlayer">
        <!--searching Form-->

        <!--no real action.  submit to show the accomodation list-->
        <form action="search_result.php" method="post">
            <div class="form searching-bar">
                <div class="form-group row  check-availability justify-content-center">
                    <div class="check-selection">
                        <label class="location">Location</label>
                        <input type="location" name="searchlocation" class="form-control" placeholder="Where are you going?" title="Where are you going?" required>
                    </div>

                    <div class="check-selection">
                        <label for="check in date">Checking in</label>
                        <input type="date" class="form-control" name="searchcheckin" max="" id="fromDate" placeholder="Date/Month/Year" required>
                    </div>
                    <div class="check-selection">
                        <label for="check out date">Checking out</label>
                        <input type="date" class="form-control" name="searchcheckout" min="" id="toDate" placeholder="Date/Month/Year" required>
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


                    <div class="check-selection">
                        <label for="Number of Adults select">Adults</label>
                        <input type="number" class="form-control" name="nbofpeople" value="" min="0" max="10" required>

                    </div>
                    <div class="check-selection">
                        <label for="Number of Children select">Children</label>
                        <input type="number" class="form-control" id="nbChild" value="" min="0" max="10">
                    </div>

                </div>


                <div class="form-group row checking-bar justify-content-center">
                    <button type="submit" name="submit-search" class="btn btn-danger btn-lg active col-md-auto">Check Availability</button>
                </div>


            </div>
        </form>



    </div>


</div>



<!--introduction-->

<div class="introduction">
    <div class="container introduction-text">
        <div class="row justify-content-md-center ">
            <h1 class="logo-one">
                Welcome To
                <small class="text-muted logo-two">UniTas</small>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center logo-three">
            <h5>The best experience ever</h5>

        </div>
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <p><i>If you’re looking for holiday accommodation with more space, privacy or freedom, UniTas is perfect for you. Connecting holiday-goers with over 2 million properties, UniTas offers everything from quaint cottages and cabins to apartments and rental homes all over the world.

                </i></p>
        </div>
    </div>

    <!--introduction paragraph-->

    <div class="intro-paragraph">
        <div class="container-fluid intro-parapic">
            <div class="row">

                <div class="col-md-6">
                    <img src="img/new support 4.jpg" class="img-fluid intro-pic" alt="man's boot">
                </div>
                <div class="col-md-6 intro-text">
                    <img src="img/new support 3.jpg" class="img-fluid intro-pic" alt="alone man">
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="row justify-content-md-center intro-text-body">
        <h3 class="intro-text-title">Start Your journey</h3>
        <h5 class="intro-text-content">With more flexibility than a hotel, holiday rentals offer the freedom to personalise your experience and ensure everyone is comfortable and happy. You can discover the holiday accommodation that feels like it's made just for your needs, be it on a beach trip, city break, alpine retreat or anything in between. </h5>

    </div>
</div>

</div>


<!--recommendation-->

<div class="recommendation">
    <div class="row row-cols-1 row-cols-md-2 ">
        <div class="col mb-4">
            <div class="Start your journey h-100">
                <img src="img/card pic6.jpg" class="card-img-top recommend-pic" lt="Entire home">
                <div class="card-body recommend-body">
                    <h5 class="card-title recommend-title ">Entire home</h5>
                    <p class="card-text recommend-text">Has it been awhile since you’ve spoiled yourself? Staying on budget doesn’t mean you can’t make your vacation fancy. Pamper yourself in glitz and glam when you book your luxury travel in Bali, Fiji, Tokyo, Singapore, Gold Coast and more.
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="Journey h-100">
                <img src="img/card pic2.jpg" class="card-img-top recommend-pic" alt="Cabins and Cottages">
                <div class="Journey-body recommend-body">
                    <h5 class="Journey-title recommend-title">Family</h5>
                    <p class="Journey-text recommend-text">Bring the whole family on a sweet, affordable holiday. One with beaches, room service, views. Beautiful hues. Yes, you can have it all. But enough talk, time to show you the deals! Just make sure you book your hotel soon to save on a family holiday in one of these family-friendly destinations.
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="Journey h-100">
                <img src="img/card pic3.jpg" class="card-img-top recommend-pic" alt="Unique Stays">
                <div class="Journey-body recommend-body">
                    <h5 class="Journey-title  recommend-title">Unique Stays</h5>
                    <p class="Journey-text recommend-text">All right answers. Beach. Snow. Wildlife. Skyscrapers. The sights and sounds are all so different, but one thing’s the same: book here and get the best deal on your hotel.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="Journey h-100">
                <img src="img/card pic 5.jpg" class="card-img-top recommend-pic" alt="Pet Welcome">
                <div class="Journey-body recommend-body ">
                    <h5 class="Journey-title recommend-title">Pet Welcome</h5>
                    <p class="Journey-text recommend-text">To be purr-fectly honest, we all want our pets to have the holiday they deserve and that’s why a hotel that rolls out the red carpet for Fido is in order. From cozy pet beds to gourmet menus, these hotels are paws-itively woof worthy.
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>


<!-- host register  dont need

<section class="register-modal">
    <div class="modal fade" id="registerClient" data-backdrop="static" data-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <div class="modal-title">
                        <h3>Create Account</h3>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>




                <div class="modal-body">

                    <form action="#registerclient">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fstName">First Name</label>
                                <input type="text" class="form-control" id="fstNameC" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastNameC" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="emailC" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobNumber">Mobile Number</label>
                                <input type="text" class="form-control" id="mobNumberC" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="passwordC" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%])[A-Za-z\d@$!%]{6,12}$" title="Must contain at least 1 lower case letter, 1 uppercase letter, 1 number and one of following special characters !@#$%" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" id="repasswordC" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddressC" placeholder="1234 Main St">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputSuburb">Suburb</label>
                                <input type="text" class="form-control" id="inputSuburbC">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State/Territory</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option value="ACT">Australian Capital Territory</option>
                                    <option value="NSW">New South Wales</option>
                                    <option value="NT ">Northern Territory</option>
                                    <option value="QLD">Queensland</option>
                                    <option value="SA ">South Australia</option>
                                    <option value="TAS">Tasmania</option>
                                    <option value="VIC">Victoria</option>
                                    <option value="WA ">Western Australia</option>

                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="postCode">PostCode</label>
                                <input type="text" class="form-control" id="postCodeC">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheckC">
                                <label class="form-check-label" for="gridCheck">
                                    I agree to the terms and condition
                                </label>
                            </div>
                        </div>
                        <div class="form-row">

                            <button type="submit" class="btn btn-danger">Sign Up</button>
                        </div>


                </div>


                </form>
            </div>
        </div>
    </div>

    

    <div class="modal fade" id="registerHost" data-backdrop="static" data-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <div class="modal-title">
                        <h3>Create Account for Hosting</h3>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>


                

                <div class="modal-body">

                    <form action="#registerHost">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fstName">First Name</label>
                                <input type="text" class="form-control" id="fstNameH" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastNameH" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="emailH" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobNumber">Mobile Number</label>
                                <input type="text" class="form-control" id="mobNumberH" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="passwordH" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%])[A-Za-z\d@$!%]{6,12}$" title="Must contain at least 1 lower case letter, 1 uppercase letter, 1 number and one of following special characters !@#$%" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" id="repasswordH" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddressH" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2H" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputSuburb">Suburb</label>
                                <input type="text" class="form-control" id="inputSuburbH">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State/Territory</label>
                                <select id="inputStateH" class="form-control">
                                    <option selected>Choose...</option>
                                    <option value="ACT">Australian Capital Territory</option>
                                    <option value="NSW">New South Wales</option>
                                    <option value="NT ">Northern Territory</option>
                                    <option value="QLD">Queensland</option>
                                    <option value="SA ">South Australia</option>
                                    <option value="TAS">Tasmania</option>
                                    <option value="VIC">Victoria</option>
                                    <option value="WA ">Western Australia</option>

                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="postCode">PostCode</label>
                                <input type="text" class="form-control" id="postCodeH">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="abnNumber">ABN Number</label>
                                <input type="text" class="form-control" id="abnNumber" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheckH">
                                <label class="form-check-label" for="gridCheck">
                                    I agree to the terms and condition
                                </label>
                            </div>
                        </div>
                        <div class="form-row">

                            <button type="submit" class="btn btn-danger">Sign Up</button>
                        </div>


                </div>


                </form>
            </div>
        </div>
    </div>

    

</section>

-->




<?php
include('footer.php');

?>