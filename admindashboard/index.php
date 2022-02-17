<?php

include('admin_header.php');
include('../db_conn.php');



$num_house = mysqli_num_rows($mysqli->query("SELECT * FROM house"));
$num_user = mysqli_num_rows($mysqli->query("SELECT * FROM user"));

$num_client = mysqli_num_rows($mysqli->query("SELECT user_id FROM user WHERE usertype = '0'"));

$num_host = mysqli_num_rows($mysqli->query("SELECT user_id FROM user WHERE usertype = '1'"));

$num_booking = mysqli_num_rows($mysqli->query("SELECT booking_id FROM booking"));

$num_newbooking = mysqli_num_rows($mysqli->query("SELECT booking_id FROM booking WHERE status = '0'"));
$num_review = mysqli_num_rows($mysqli->query("SELECT * FROM reviews"));

$rating = $mysqli->query("SELECT AVG(rating) FROM reviews")->fetch_array(MYSQLI_ASSOC);





?>
<style>
    a {
        color: inherit;
    }

    a:link {
        TEXT-DECORATION: none;

    }

    a:hover {
        TEXT-DECORATION: none;

    }
</style>
<div class="container-fluid">


    <div class="page-titles">
        <h2>Dashboard</h2>
    </div>

    <div class="row content">
        <div class="col-md-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <a href="accommdations.php">
                        <div class="card-title">
                            <i class="fas fa-home icon-big"></i>
                            <h3>Houses</h3>
                            <h3><?php echo $num_house; ?></h3></br>




                        </div>
                    </a>

                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger">
                <div class="card-body">


                    <div class="card-title">
                        <a href="booking_list.php">
                            <i class="fas fa-list-ol icon-big"></i>
                            <h3>Bookings</h3>
                            <h3><?php echo $num_booking; ?></h3>
                            <?php echo $num_newbooking; ?> New
                        </a>

                    </div>




                </div>

            </div>


        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning">
                <div class="card-body">


                    <div class="card-title">
                        <a href="users_list.php">
                            <i class="fas fa-users icon-big"></i>
                            <h3>Users</h3>
                            <h3><?php echo $num_user; ?></h3>
                            <?php echo $num_client . ' client ' . $num_host . ' host'; ?>

                        </a>
                    </div>




                </div>

            </div>


        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info">
                <div class="card-body">

                    <a href="review_list.php">
                        <div class="card-title">
                            <i class="fas fa-dollar-sign icon-big"></i>
                            <h3>Reviews</h3>
                            <h3><?php echo $num_review; ?></h3></br>



                        </div>
                    </a>



                </div>

            </div>


        </div>


    </div>


</div>

<?php
include('admin_footer.php');

?>