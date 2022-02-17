<?php
include('admin_header.php');
include('../db_conn.php');

?>


<div class="container-fluid">


    <div class="page-titles">
        <h2>Accommodations</h2>
    </div>

    <div class="row content">
        <div class="col-12">
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-house">
                    Create new house
                </button>
            </div>

            <!-- Modal -->

            <div class="modal fade" id="create-house" tabindex="-1" aria-labelledby="close-create" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="close-create"> Create new house</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="createhouse.php" method="POST" enctype="multipart/form-data">


                                <div class="input-group mb-3">

                                    <input type="hidden" value="<?php echo $sessiion_id ?>" Name="New-hostid" class="form-control">
                                </div>





                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">House Name</span>
                                    <input type="text" Name="New-housename" class="form-control" placeholder="Type in your House Name" aria-label="Type in your House Name" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Address</span>
                                    <input type="text" Name="New-houseaddress" class="form-control" placeholder="No.xx/ xx Street or Road/ Surburb/ Postcode" aria-label="Address" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">City</span>
                                    <input type="text" Name="New-housecity" class="form-control" placeholder="Type in your City" aria-label="City" aria-describedby="basic-addon1">
                                    <span class="input-group-text" id="basic-addon1">Country</span>
                                    <input type="text" class="form-control" placeholder="Type in your Country" aria-label="Country" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Maximum guest</span>
                                    <select type="text" Name="New-housemaxppl" class="form-select" aria-label=".form-select-sm example">
                                        <option selected>Maximum guest</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>



                                    <span class="input-group-text" id="basic-addon1">Price per night</span>
                                    <input type="text" Name="New-houseprice" class="form-control" placeholder="Price per night" aria-label="Price per night" aria-describedby="basic-addon1">

                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Number of rooms</span>
                                    <select type="text" Name="New-houserooms" class="form-select" aria-label=".form-select-sm example">
                                        <option selected>Number of rooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>


                                    <span class="input-group-text" id="basic-addon1">Number of bathrooms</span>
                                    <select type="text" Name="New-housebathrooms" class="form-select" aria-label=".form-select-sm example">
                                        <option selected>Number of bathrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="check-selection mb-3">
                                    <span class="input-group-text" id="basic-addon1">Checking in</span>
                                    <input type="date" class="form-control" name="New-housecheckin" max="" id="fromDate" placeholder="Date/Month/Year" aria-label="Checking in" aria-describedby="basic-addon1">
                                    <span class="input-group-text" id="basic-addon1">Checking out</span>
                                    <input type="date" class="form-control" name="New-housecheckout" min="" id="toDate" placeholder="Date/Month/Year" aria-label="Checking out" aria-describedby="basic-addon1">
                                </div>






                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Entire house</span>
                                    <select type="text" Name="New-houseentire" class="form-select" aria-label=".form-select-sm example">
                                        <option selected>Entire house</option>
                                        <option value="Entire house">Entire house</option>
                                        <option value="Not Entire house">Not Entire house</option>

                                    </select>

                                    <span class="input-group-text" id="basic-addon1">Internet</span>
                                    <select type="text" Name="New-houseinternet" class="form-select" aria-label=".form-select-sm example">
                                        <option selected>Internet</option>
                                        <option value="Free Wi-Fi">Free Wi-Fi</option>
                                        <option value="Not Free Wi-Fi">Not Free Wi-Fi</option>

                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Garage</span>
                                    <select type="text" Name="New-housegarage" class="form-select" aria-label=".form-select-sm example">
                                        <option selected>Garage</option>
                                        <option value="Free parking">Free parking</option>
                                        <option value="Paid parking">Paid parking</option>
                                    </select>


                                    <span class="input-group-text" id="basic-addon1">Smoking</span>
                                    <select type="text" Name="New-housesmoke" class="form-select" aria-label=".form-select-sm example">
                                        <option selected>Smoking</option>
                                        <option value="Free Smoking">Free Smoking</option>
                                        <option value="Smoking outdoor only">Smoking outdoor only</option>
                                    </select>


                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Pet</span>
                                    <select type="text" Name="New-housepet" class="form-select" aria-label=".form-select-sm example">
                                        <option selected>Pet</option>
                                        <option value="Pet friendly">Pet friendly</option>
                                        <option value="Not Friendly">Not Friendly</option>
                                    </select>


                                    <span class="input-group-text" id="basic-addon1">kitchen</span>
                                    <select type="text" class="form-control" class="form-select" aria-label=".form-select-sm example">
                                        <option selected>kitchen</option>
                                        <option value="Have Kitchen">Have Kitchen</option>
                                        <option value="Not Have Kitchen">Not Have Kitchen</option>
                                    </select>

                                </div>
                                <span class="input-group-text" id="basic-addon1">Brief description of the house</span>
                                <textarea type="text" Name="New-housedescription" class="form-control" placeholder="Type in Brief description of the house" aria-label="Brief description of the house" aria-describedby="basic-addon1" rows="3"> </textarea>



                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Upload image</span>

                                    <input type="file" name="newimage" class="form-control">


                                </div>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" Name="new-submit" class="btn btn-primary" value="upload">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div>
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM house");
                while ($row = mysqli_fetch_array($result)) {
                ?>



                    <div class="row house_item">
                        <div class="col-md-3 house_profile">
                            <picture>
                                <?php echo "<img src='../img/" . $row['houseImage'] . "' class='img-fluid'>"; ?>
                            </picture>


                        </div>
                        <div class="col-md-6">
                            <div class="house_name">
                                <h4><?php echo $row['houseName']; ?></h4>

                            </div>
                            <div class="house_addr">
                                <p class="preview-text"><?php echo "Address: " . $row['houseAddress'] . "<br>"; ?> </p>

                            </div>
                            <div class="house_room">
                                <p class="preview-text"><i class="fas fa-male"> <?php echo "Max people: " . $row['houseMaxppl'] . " guests   "; ?></i>
                                    <i class="fas fa-bed"><?php echo $row['houseRooms'] . " bedrooms"; ?></i>
                                    <i class="fas fa-bath"><?php echo $row['houseBathrooms'] . " baths"; ?></i>
                                </p>
                            </div>
                            <div class="house_desc">
                                <p class="preview-description"><?php echo "Description: " . $row['houseDescription'] ?></p>
                            </div>

                        </div>
                        <div class="col-2">
                            <div class="house_ratg">
                                <h3><i class="fas fa-star"></i><?php echo $row['houseRate']; ?></h3>
                            
                                <tr>
                                    <td>
                                        <a class="btn btn-primary" href="../dashboard/edit_house.php?edit=<?php echo $row['house_id']; ?>">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="../dashboard/delete_house_process.php?del=<?php echo $row['house_id']; ?>">Dele</a>
                                    </td>
                                </tr>

                            </div>
                            <div class="house_comm">

                            </div>
                        </div>
                    </div>

                <?php };
                ?>
            </div>

        </div>







    </div>


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

    <?php
    include('admin_footer.php');

    ?>