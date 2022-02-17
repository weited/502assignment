<?php
include("header.php");
include("db_conn.php");

$id = $_GET['id'];
$sql = "SELECT * FROM house INNER JOIN user ON house.host_id = user.user_id WHERE house_id = '$id'";
$result = $mysqli->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);



?>

<div class="container">



    <div class="card">

        <div class="leave-review">
            <h2 class="text-center">Leave your review</h2>

            <form action="leave_review_process.php" method="POST">

                <input type="hidden" name="house_id" value="<?php echo $id; ?>">
                <input type="hidden" name="host_id" value="<?php echo $row['host_id']; ?>">
                <div class="form-group row">
                    <label for="housename" class="col-md-4 col-form-label text-md-right">House Name: </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="housename" value="<?php echo $row['houseName'] ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rating" class="col-md-4 col-form-label text-md-right">Rating</label>
                    <div class="col-md-6">
                        <select class="form-control" name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="Textarea" class="col-md-4 col-form-label text-md-right">Review Content</label>
                    <div class="col-md-6">
                        <textarea name="review" class="form-control" rows="3"></textarea>
                    </div>
                </div>



                <div class="col-sm-6 offset-md-4">
                    <button class="btn btn-link "><a href="profile.php">
                            Back</a>
                    </button>
                    <button type="submit" name="submit" value="Sign in" class="btn btn-primary float-right">
                        Post Review
                    </button>

                </div>

            </form>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>