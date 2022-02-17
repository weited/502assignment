<?php
include("../dashboard/session.php");



if ($session_access !== "2") {
    echo "<script type='text/javascript'>alert('You need to login!!');
    window.location='../dashboard/login.php';</script>";
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/fe49115f62.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Hoster Dashboard</title>
</head>

<body>

    <nav class="navbar navbar-dark fixed-top bg-dark">
        <a class="navbar-brand col-sm-3 col-md-2" href="#">UniTas BnB</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu"><span class="navbar-toggler-icon"></span></button>


        <ul class="navbar-nav px-3">

            <li class="nav-item">
                <a class="nav-link" href="../dashboard/logout.php">Sign Out</a>
            </li>
        </ul>
    </nav>




    <div class="container-fluid">
        <div class="row page">


            <nav id="sidebarMenu" class="sidebar col-md-3 d-md-block fixed-top collapse">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                Dashboard <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users_list.php">
                                Users
                            </a>
                        </li>

                        <!-- failed
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Users
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Clients</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Hosters</a>
                        </div>
                    </li>
                    <li>
                        <a class data-toggle="collapes" href="#collapseUser">Users</a>
                        <div class="in collapse show" id="collapseUser"></div>
                    </li>
                    -->
                        <li class="nav-item">
                            <a class="nav-link" href="accommdations.php">
                                Accommadation
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="booking_list.php">
                                Bookings
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="review_list.php">
                                Review
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inbox.php">
                                Inbox
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <main class="col-9 offset-3 page_inner">

              