<?php include "include/header.php"; ?>
<?php include "../db_connect/connection.php"; ?>

<div class="main-content">
    <div class="header-area">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-8 clearfix">
                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Update Campaign</h4>
                                <?php
                                $id = $_GET['id'];
                                $select = "SELECT * FROM exploercampaign WHERE id='$id'";
                                $result = mysqli_query($conn, $select);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="heading">Image</label>
                                                <input type="file" name="image[]" multiple required class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">NAME</label>
                                                <input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">MOBILE</label>
                                                <input type="text" value="<?php echo $row['phone'] ?>" name="mobile" class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="heading">FUND REQUIRED</label>
                                                <input type="text" value="<?php echo $row['fund_required'] ?>" name="fund_required" class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">SPOKES</label>
                                                <input type="text" value="<?php echo $row['spokes'] ?>" name="spokes" class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">DESCRIPTION</label>
                                                <input type="text" value="<?php echo $row['description'] ?>" name="description" class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">CITY</label>
                                                <input type="text" value="<?php echo $row['city'] ?>" name="city" class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">DISTRICT</label>
                                                <input type="text" value="<?php echo $row['dist'] ?>" name="dist" class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">STATE</label>
                                                <input type="text" value="<?php echo $row['state'] ?>" name="state" class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">PIN CODE</label>
                                                <input type="text" value="<?php echo $row['pin'] ?>" name="pin" class="form-control" id="heading" placeholder="Enter heading">
                                            </div>
                                            <div class="form-group">
                                                <label for="heading">CHOOSE CATEGORY</label>

                                                <select class="form-control" name="category">
                                                    <?php
                                                    $select = "SELECT * FROM campaign_category";
                                                    $result = mysqli_query($conn, $select);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['category'] ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                            <button type="submit" name="submit-form" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                        </form>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offset-area">
    <!-- Offset content (optional) -->
</div>

<!-- Scripts -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>

</html>

<?php
if (isset($_POST['submit-form'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $fund_required = mysqli_real_escape_string($conn, $_POST['fund_required']);
    $spokes = mysqli_real_escape_string($conn, $_POST['spokes']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $dist = mysqli_real_escape_string($conn, $_POST['dist']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $pin = mysqli_real_escape_string($conn, $_POST['pin']);

    $imageFiles = $_FILES["image"];
    $fileNames = array();
    $uploadDirectory = "explore_campaign_image/";

    foreach ($imageFiles["tmp_name"] as $key => $tmpName) {
        $fileName = basename($imageFiles["name"][$key]);
        $targetPath = $uploadDirectory . $fileName;

        if (move_uploaded_file($tmpName, $targetPath)) {
            $fileNames[] = $fileName;
        } else {
            echo "<script>alert('Error uploading file: $fileName');</script>";
            exit;
        }
    }


    $imageList = implode(',', $fileNames);

    $sql_query = "UPDATE `exploercampaign` SET 
            `image`='$imageList',
            `name`='$name',
            `phone`='$mobile',
            `category`='$category',
            `fund_required`='$fund_required',
            `spokes`='$spokes',
            `description`='$description',
            `city`='$city',
            `dist`='$dist',
            `state`='$state',
            `pin`='$pin' 
            WHERE id = '$id'";

    $sql_result = mysqli_query($conn, $sql_query);

    if ($sql_result) {
        echo "<script>alert('Data Updated successfully'); window.location.assign('./Exploreampaign_details.php');</script>";
    } else {
        echo "<script>alert('Failed to update data into the database: " . mysqli_error($conn) . "');</script>";
    }
}

?>