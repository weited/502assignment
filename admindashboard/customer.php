<?php
include('admin_header.php');

?>


<div class="container-fluid">


    <div class="page-titles">
        <h2>Customers list</h2>
    </div>

    <div class="row content">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <!-- <caption></caption> -->
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Cont</th>
                                    <th scope="col">Account</th>

                                    <th scope="col">Registered</th>
                                    <th scope="col">History bookings</th>
                                    <th scope="col">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Weijun</td>
                                    <td>0412345678</td>
                                    <td>asfc@gmail.com</td>
                                    <td>25/03/2020</td>
                                    <td>4</td>
                                    <td><a href="#" title="Edit"><i class="far fa-edit icon-small"></i></a><a href="#" title="remove"><i class="far fa-trash-alt icon-small"></i></a></td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Weite</td>
                                    <td>0412345678</td>
                                    <td>weited@utas.edu.au</td>

                                    <td>12/06/2020</td>
                                    <td>1</td>
                                    <td><a href="#" title="Edit"><i class="far fa-edit icon-small"></i></a><a href="#" title="remove"><i class="far fa-trash-alt icon-small"></i></a></td>


                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Yuki</td>
                                    <td>0412345678</td>
                                    <td>yuki@outlook.com</td>

                                    <td>25/03/2021</td>
                                    <td>5</td>
                                    <td><a href="#" title="Edit"><i class="far fa-edit icon-small"></i></a><a href="#" title="remove"><i class="far fa-trash-alt icon-small"></i></a></td>


                                </tr>
                            </tbody>
                        </table>


                    </div>







                </div>

            </div>


        </div>







    </div>


<?php
    include('admin_footer.php');

?>