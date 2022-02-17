<?php
include('session.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="description" content="Accommodation Booking System">
    <meta name="keywords" content="Unitas PTY LTD">
    <meta name="Users" content="Client Host SyetemManager">

    <title><?php echo $title ?></title>

    <!--Boostrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">




</head>

<body>


    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="img/logo2.png" width="35" height="35" class="d-inline-block align-top" alt="logo">UniTas BnB
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Experience
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Camping</a>
                            <a class="dropdown-item" href="#">Hiking</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">About</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto navbar-right">

                    <?php if ($session_userid == "") { ?>


                        <li class="nav-item">
                            <a class="nav-link" href="" data-toggle="modal" data-target="#registerClient">Sign Up</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>

                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Welcome: <?php echo $session_user ?></a>
                        </li>

                        <li class="nav-item">
                            <a onclick="return confirm('Are you sure you want to logout?');" class="nav-link" href="logout.php">Logout</a>
                        </li>

                    <?php } ?>

                </ul>






            </div>
        </nav>
    </header>

    <!--register modal-->
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

                        <form action="register.php" method="post">

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="displayAbn">Choose account type:host or client?</label>
                                    <select id="displayAbn" class="form-control" required>
                                        
                                        <option value="client">Client</option>
                                        <option value="host">Host</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="fstName">First Name</label>
                                    <input type="text" class="form-control" id="fstNameC" name="fname" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastNameC" name="lname" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="emailC" name="email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="mobNumber">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobNumberC" name="phone" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="passwordC" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%])[A-Za-z\d@$!%]{6,12}$" title="Must contain at least 1 lower case letter, 1 uppercase letter, 1 number and one of following special characters !@#$%" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control" id="repassword" name="confirmpsw" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddressC" name="address" placeholder="Address" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputSuburb">Suburb</label>
                                    <input type="text" class="form-control" name="suburb" id="inputSuburb" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State/Territory</label>
                                    <select id="inputState" name="state" class="form-control" required>

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
                                    <input type="text" class="form-control" id="postCodeC" name="postcode" required>
                                </div>
                                <div class="form-group col-md-12" id="abnNumberDiv">
                                    <label for="abnNumber">ABN Number</label>
                                    <input type="text" class="form-control" id="abnNumber" name="abn">
                                </div>
                            </div>

                            <div class="form-row">

                                <button type="submit" name="signup" class="btn btn-danger">Sign Up</button>
                            </div>


                    </div>


                    </form>
                </div>
            </div>
        </div>



    </section>

    <!--login modal-->
    <div class="login-modal">
        <div class="modal fade" id="loginform" data-backdrop="static" data-keyboard="false" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <div class="modal-title">
                            <h3>Login</h3>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>




                    <div class="modal-body">
                        <form action="login_engine.php" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="email" id="login_email" class="form-control" name="login_email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="login_password" required>
                                </div>
                            </div>

                            <div class="col-sm-6 offset-md-4">
                                <button type="submit" name="submit" value="Sign in" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>