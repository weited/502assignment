<?php
include('header.php');

?>




<!--Filter Butten-->

<section class="all-accom">

    <div class="Title">
        <h1>Welcome To Tasmania</h1>
        <div class="filter-button">

            <a href="#" class="btn btn-outline-info  active" role="button" aria-pressed="true">type of the place</a>
            <a href="#" class="btn btn-outline-info  active" role="button" aria-pressed="true">Price</a>
            <a href="#" class="btn btn-outline-info  active" role="button" aria-pressed="true">Room&Bed</a>
            <a href="#" class="btn btn-outline-info  active" role="button" aria-pressed="true">More Filter</a>
            <a href="https://www.google.com.au/maps/@-25.335448,135.745076,4z" class="btn btn-outline-info map-butten active" role="button" aria-pressed="true">Map</a>
        </div>


    </div>





    <!--Accommodation 1 Content-->
    <div class="content clearfix">

        <div class="main-content">
            <h3 class="all explore-all-accommodation">Explore All Accommodation</h3>

            <div class="house-list">

                <img src="img/accommodation1.jpg" alt="accommodation 1" class="accommodation-image">
                <div class="post-review">

                    <div class="accomationlist">
                        <h2>Modern City-Fringe House in New Town
                            <?php
                            echo $row['name'];
                            ?></h2>
                        <i class="far fa-calendar">Available Now</i>
                        <p class="preview-text">Entire apartment hosted by
                            <?php echo $row['host_name']; ?> </p>
                        <p class="preview-text"><i class="fas fa-male"> 2-6 guests</i> <i class="fas fa-bed"> 3 bedrooms</i> <i class="fas fa-bath"> 2 baths</i></p>

                        <p class="preview-text">.Free parcking .Kitchen .Wifi .Heating</p>

                        <button type="button" class="Rare find">
                            <i class="fas fa-envelope"></i>
                            Rare find
                        </button>
                        <div class="price">
                            <p class="Price-preweek">$350AUD/ daily price</p>

                        </div>



                        <i class="fas fa-star"><span>House rate</span> 4.6</i>
                        <i class="fas fa-star"><span>Host rate</span> 4.3</i>
                    </div>


                    <!-- Button trigger modal -->
                    <button type="button" class="btn read-more" id="read-more" data-toggle="modal" data-target="#exampleModal">
                        Read More
                    </button>
                    <button onclick="plzLogin()" type="button" class="btn bookingbtn btn-danger">
                        Booking Now!
                    </button>
                    <!-- Modal content-->
                    <div class="modal fade information" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <p class="address-one">1/6 Opal Drive, Blackmans Bay, Tas 7052</p>

                                    <div class="More-information">
                                        <h5>House policy</h5>
                                        <p class="home-policy">Check-in: After 2:00 pm</p>
                                        <p class="home-policy">Checkout: 10:00 am</p>
                                        <p class="home-policy">No pets</p>
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
    </div>






    <!--Accommodation 2 Content-->

    <div class="content clearfix">

        <div class="main-content">


            <div class="house-list">
                <img src="img/accommodation2.jpg" alt="accommodation 1" class="accommodation-image">
                <div class="post-review">
                    <h2>Entire house hosted by Matt</h2>
                    <i class="far fa-calendar">Available Now</i>
                    <p class="preview-text">Entire apartment hosted by Leslie</p>
                    <p class="preview-text"><i class="fas fa-male"> 2-5 guests</i> <i class="fas fa-bed"> 2 bedrooms</i> <i class="fas fa-bath"> 1 baths</i></p>

                    <p class="preview-text">.Free parcking .Kitchen .Wifi .Heating</p>

                    <button type="button" class="Rare find">
                        <i class="fas fa-envelope"></i>
                        Rare find
                    </button>
                    <div class="price">
                        <p class="Price-preweek">$330AUD/ daily price</p>

                    </div>


                    <i class="fas fa-star"><span>House rate</span> 4.4</i>
                    <i class="fas fa-star"><span>Host rate</span> 4.6</i>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn read-more" data-toggle="modal" data-target="#exampleModal">
                        Read More
                    </button>
                    <button onclick="plzLogin()" type="button" class="btn bookingbtn btn-danger">
                        Booking Now!
                    </button>
                    <!-- Information Modal content-->
                    <div class="modal fade information" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">More Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="address">
                                        <h5>Address</h5>
                                        <p class="Address-two">Binalong Bay, Tasmania, Australia</p>

                                    </div>


                                    <div class="More-information">
                                        <h5>House policy</h5>
                                        <p class="home-policy">Check-in: After 2:00 pm</p>
                                        <p class="home-policy">Checkout: 10:00 am</p>
                                        <p class="home-policy">No pets</p>
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
    </div>

    <!--Accommodation 3 Content-->

    <div class="content clearfix">

        <div class="main-content">


            <div class="house-list">
                <img src="img/accommodation3.jpg" alt="accommodation 1" class="accommodation-image">
                <div class="post-review">
                    <h2>The Lair</h2>
                    <i class="far fa-calendar">Available Now</i>
                    <p class="preview-text">Entire apartment hosted by Leslie</p>
                    <p class="preview-text"><i class="fas fa-male"> 2-4 guests</i> <i class="fas fa-bed"> 2 bedrooms</i> <i class="fas fa-bath"> 1 baths</i></p>

                    <p class="preview-text">.Free parcking .Kitchen .Wifi .Heating</p>

                    <button type="button" class="Rare find">
                        <i class="fas fa-envelope"></i>
                        Rare find
                    </button>
                    <div class="price">
                        <p class="Price-preweek">$350AUD/ daily price</p>

                    </div>


                    <i class="fas fa-star"><span>House rate</span> 4.7</i>
                    <i class="fas fa-star"><span>Host rate</span> 4.8</i>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn read-more" data-toggle="modal" data-target="#exampleModal">
                        Read More
                    </button>
                    <button onclick="plzLogin()" type="button" class="btn bookingbtn btn-danger">
                        Booking Now!
                    </button>
                    <!-- Modal content-->
                    <div class="modal fade information" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <p class="address">Bruny Island, Tasmania, Australia</p>

                                    <div class="More-information">
                                        <h5>House policy</h5>
                                        <p class="home-policy">Check-in: After 2:00 pm</p>
                                        <p class="home-policy">Checkout: 10:00 am</p>
                                        <p class="home-policy">No pets</p>
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
    </div>

    <!--Accommodation 4 Content-->

    <div class="content clearfix">

        <div class="main-content">


            <div class="house-list">
                <img src="img/accommodation4.jpg" alt="accommodation 1" class="accommodation-image">
                <div class="post-review">
                    <h2>Stylish home with spa close to the heart of Hobart</h2>
                    <i class="far fa-calendar">Available Now</i>
                    <p class="preview-text">Entire apartment hosted by Leslie</p>
                    <p class="preview-text"><i class="fas fa-male"> 2-8 guests</i> <i class="fas fa-bed"> 3 bedrooms</i> <i class="fas fa-bath"> 2 baths</i></p>

                    <p class="preview-text">.Free parcking .Kitchen .Wifi .Heating</p>

                    <button type="button" class="Rare find">
                        <i class="fas fa-envelope"></i>
                        Rare find
                    </button>
                    <div class="price">
                        <p class="Price-preweek">$420AUD/ daily price</p>

                    </div>


                    <i class="fas fa-star"><span>House rate</span> 4.5</i>
                    <i class="fas fa-star"><span>Host rate</span> 4.3</i>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn read-more" data-toggle="modal" data-target="#exampleModal">
                        Read More
                    </button>
                    <button onclick="plzLogin()" type="button" class="btn bookingbtn btn-danger">
                        Booking Now!
                    </button>
                    <!-- Modal content-->
                    <div class="modal fade information" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <p class="address">Hobart, Tasmania, Australia</p>

                                    <div class="More-information">
                                        <h5>House policy</h5>
                                        <p class="home-policy">Check-in: After 2:00 pm</p>
                                        <p class="home-policy">Checkout: 10:00 am</p>
                                        <p class="home-policy">No pets</p>
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
    </div>

    <!--Accommodation 5 Content-->

    <div class="content clearfix">

        <div class="main-content">


            <div class="house-list">
                <img src="img/accommodation5.jpg" alt="accommodation 1" class="accommodation-image">
                <div class="post-review">
                    <h2>Waterview on Seaview</h2>
                    <i class="far fa-calendar">Available Now</i>
                    <p class="preview-text">Entire apartment hosted by Leslie</p>
                    <p class="preview-text"><i class="fas fa-male"> 2-8 guests</i> <i class="fas fa-bed"> 4 bedrooms</i> <i class="fas fa-bath"> 2 baths</i></p>

                    <p class="preview-text">.Free parcking .Kitchen .Wifi .Heating</p>

                    <button type="button" class="Rare find">
                        <i class="fas fa-envelope"></i>
                        Rare find
                    </button>
                    <div class="price">
                        <p class="Price-preweek">$450AUD/ daily price</p>

                    </div>


                    <i class="fas fa-star"><span>House rate</span> 4.3</i>
                    <i class="fas fa-star"><span>Host rate</span> 4.5</i>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn read-more" data-toggle="modal" data-target="#exampleModal">
                        Read More
                    </button>
                    <button onclick="plzLogin()" type="button" class="btn bookingbtn btn-danger">
                        Booking Now!
                    </button>
                    <!-- Modal content-->
                    <div class="modal fade information" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <p class="address">Adventure Bay, Tasmania, Australia</p>

                                    <div class="More-information">
                                        <h5>House policy</h5>
                                        <p class="home-policy">Check-in: After 2:00 pm</p>
                                        <p class="home-policy">Checkout: 10:00 am</p>
                                        <p class="home-policy">No pets</p>
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
    </div>

    <!--Accommodation 6 Content-->

    <div class="content clearfix">

        <div class="main-content">


            <div class="house-list">
                <img src="img/accommodation6.jpg" alt="accommodation 1" class="accommodation-image">
                <div class="post-review">
                    <h2>Coal Valley Studio - Bush Haven near Richmond</h2>
                    <i class="far fa-calendar">Available Now</i>
                    <p class="preview-text">Entire apartment hosted by Leslie</p>
                    <p class="preview-text"><i class="fas fa-male"> 2-4 guests</i> <i class="fas fa-bed"> 2 bedrooms</i> <i class="fas fa-bath"> 1 baths</i></p>

                    <p class="preview-text">.Free parcking .Kitchen .Wifi .Heating</p>

                    <button type="button" class="Rare find">
                        <i class="fas fa-envelope"></i>
                        Rare find
                    </button>
                    <div class="price">
                        <p class="Price-preweek">$290AUD/ daily price</p>

                    </div>


                    <i class="fas fa-star"><span>House rate</span> 4.2</i>
                    <i class="fas fa-star"><span>Host rate</span> 4.4</i>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn read-more" data-toggle="modal" data-target="#exampleModal">
                        Read More
                    </button>
                    <button onclick="plzLogin()" type="button" class="btn bookingbtn btn-danger">
                        Booking Now!
                    </button>
                    <!-- Modal content-->
                    <div class="modal fade information" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <p class="address">Dulcot, Tasmania, Australia</p>

                                    <div class="More-information">
                                        <h5>House policy</h5>
                                        <p class="home-policy">Check-in: After 2:00 pm</p>
                                        <p class="home-policy">Checkout: 10:00 am</p>
                                        <p class="home-policy">No pets</p>
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
    </div>

    <!--Accommodation 7 Content-->

    <div class="content clearfix">

        <div class="main-content">


            <div class="house-list">
                <img src="img/accommodation7.jpg" alt="accommodation 1" class="accommodation-image">
                <div class="post-review">
                    <h2>Swans Nest</h2>
                    <i class="far fa-calendar">Available Now</i>
                    <p class="preview-text">Entire apartment hosted by Leslie</p>
                    <p class="preview-text"><i class="fas fa-male"> 2-8 guests</i> <i class="fas fa-bed"> 3 bedrooms</i> <i class="fas fa-bath"> 1 baths</i></p>

                    <p class="preview-text">.Free parcking .Kitchen .Wifi .Heating</p>

                    <button type="button" class="Rare find">
                        <i class="fas fa-envelope"></i>
                        Rare find
                    </button>
                    <div class="price">
                        <p class="Price-preweek">$430AUD/ daily price</p>

                    </div>


                    <i class="fas fa-star"><span>House rate</span> 4.7</i>
                    <i class="fas fa-star"><span>Host rate</span> 4.8</i>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn read-more" data-toggle="modal" data-target="#exampleModal">
                        Read More
                    </button>
                    <button onclick="plzLogin()" type="button" class="btn bookingbtn btn-danger">
                        Booking Now!
                    </button>
                    <!-- Modal content-->
                    <div class="modal fade information" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <p class="address"> Connellys Marsh, Tasmania, Australia</p>

                                    <div class="More-information">
                                        <h5>House policy</h5>
                                        <p class="home-policy">Check-in: After 2:00 pm</p>
                                        <p class="home-policy">Checkout: 10:00 am</p>
                                        <p class="home-policy">No pets</p>
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
    </div>



</section>

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
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2C" placeholder="Apartment, studio, or floor">
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

<script>
    function plzLogin() {
        alert("Please Login or Register!")
    }
</script>

<?php
include('footer.php');

?>