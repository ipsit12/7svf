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
                                    $select = "SELECT * FROM blog where id='$id'";
                                    $result = mysqli_query($conn, $select);

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $imagePath = "uploads/" . $row['image'];
                                            $descriptions = explode('|', $row['description']);?>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="image">CHOOSE IMAGE</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">HEADING</label>
                                        <input type="text" value="<?php echo $row['heading'] ?>" name="heading" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">CHOOSE CATEGORY</label>
                                       
                                        <select class="form-control" name="category">
                                       
                                            <option value="<?php echo $row['category'] ?>"><?php echo $row['category'] ?></option>
                                           
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="description">DESCRIPTION</label>
                                        <div id="description-container">
                                            <div class="description-item">
                                                <?php
                                            foreach($descriptions as $description) {?>
                                                <textarea name="description[]" value="<?php echo $description ?>" class="form-control description-input" placeholder="Enter description"></textarea>
                                           <?php } ?>
                                            </div>
                                        </div>
                                        <button type="button" id="add-description" class="btn btn-success mt-3">Add More</button>
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
    $heading = $_POST['heading'];
    $descriptions = $_POST['description'];
    $category = $_POST['category'];

    $filename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $path = 'uploads/' . $filename; // Corrected path
    

    if(move_uploaded_file($tmpname, $path)) {
        $all_descriptions = implode(',', $descriptions);

        $sql_query = "UPDATE `blog` SET `image`='$filename',`heading`='$heading'
        ,`description`='$all_descriptions',`category`='$category' where id = '$id'";

        $sql_result = mysqli_query($conn, $sql_query);

        if($sql_result){
            echo "<script>alert('Data Updated successfully'); window.location.assign('./blogdetails.php');</script>";
        } else {
            echo "<script>alert('Failed to update data into the database');</script>";
        }
    } else {
        echo "<script>alert('Failed to upload the image');</script>";
    }
}
?>
