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
                                <h4 class="header-title">Update Blog</h4>
                                <?php
                                $id = $_GET['id'];
                                    $select = "SELECT * FROM campaign where id='$id'";
                                    $result = mysqli_query($conn, $select);

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                         ?>
                                <form method="post" enctype="multipart/form-data">
                                  
                                    <div class="form-group">
                                        <label for="heading">NAME</label>
                                        <input type="text" value="<?php echo $row['name'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">MOBILE</label>
                                        <input type="text" value="<?php echo $row['mobile'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">EMAIL</label>
                                        <input type="text" value="<?php echo $row['email_id'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">CATEGORY</label>
                                        <input type="text" value="<?php echo $row['category'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">FUND_REQUIRED</label>
                                        <input type="text" value="<?php echo $row['fund_required'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">SPOKES</label>
                                        <input type="text" value="<?php echo $row['spokes'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">DESCRIPTION</label>
                                        <input type="text" value="<?php echo $row['description'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">DIST</label>
                                        <input type="text" value="<?php echo $row['dist'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">STATE</label>
                                        <input type="text" value="<?php echo $row['state'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">PIN</label>
                                        <input type="text" value="<?php echo $row['pin'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                  
                                    <button type="submit" name="submit-form" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                </form>
                                <?php } } ?>
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
<script>
    $(document).ready(function(){
        $('#add-description').click(function(){
            let newDescription = `
                <div class="description-item">
                    <textarea name="description[]" class="form-control description-input" placeholder="Enter description"></textarea>
                    <button type="button" class="btn btn-danger btn-sm remove-description" style="margin-top: 10px;">Delete</button>
                </div>
            `;
            $('#description-container').append(newDescription);
        });

        $(document).on('click', '.remove-description', function(){
            $(this).closest('.description-item').remove();
        });
    });
</script>

</html>

<?php 
if(isset($_POST['submit-form'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email_id = $_POST['email_id'];
    $category = $_POST['category'];
    $fund_required = $_POST['fund_required'];
    $spokes = $_POST['spokes'];
    $description = $_POST['description'];
    $city = $_POST['city'];
    $dist = $_POST['dist'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $category = $_POST['category'];

    

   
        

        $sql_query = "UPDATE `campaign` SET `name`='$name',`mobile`='$mobile',`email_id`='$email_id',
        `category`='$category',`fund_required`='$fund_required',`spokes`='$spokes',`description`='$description',`city`='$city'
        ,`dist`='$dist',`state`='$state',`pin`='$pin' WHERE id = '$id'";

        $sql_result = mysqli_query($conn, $sql_query);

        if($sql_result){
            echo "<script>alert('Data Updated successfully'); window.location.assign('./campaign.php');</script>";
        } else {
            echo "<script>alert('Failed to update data into the database');</script>";
        }
   
}
?>
