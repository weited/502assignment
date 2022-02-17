<?php
include('../dashboard/session.php');
if ($session_access !== "1") {
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
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/dashboard.css">


    <title>Hoster Dashboard</title>
</head>

<body>

    <nav class="navbar navbar-dark fixed-top bg-dark">
        <a class="navbar-brand col-sm-3 col-md-2" href="#">UniTas BnB</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu"><span class="navbar-toggler-icon"></span></button>
        <ul class="navbar-nav px-3">

            <?php if ($session_manager_id !== "") { ?>
                <li class="nav-item">
                    <a onclick="return confirm('Are you sure you want to logout?');" class="nav-link" href="../dashboard/logout.php">Sign Out</a>
                </li>
            <?php } ?>
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
                            <a class="nav-link" href="accommdations.php">
                                Shared Houses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bookings.php">
                                Bookings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="review_list.php">
                                Reviews
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
                <div class="container">
                    