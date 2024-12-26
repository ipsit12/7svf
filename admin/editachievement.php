<?php 
include "include/header.php"; 
include "../db_connect/connection.php"; 
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                <h4 class="header-title">Edit Achievement</h4>
                                <?php
                                $id = $_GET['id'];
                                $select = "SELECT * FROM achievement WHERE id = '$id'";
                                $result = mysqli_query($conn, $select);

                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $value = $row['image'];
                                        $myarr = explode(',', $value);
                                        $descriptions = explode('|', $row['description']);
                                ?>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="image">CHOOSE IMAGE</label>
                                        <div id="image-container">
    <?php foreach($myarr as $img): ?>
        <div class="image-item" style="display:inline-block; position:relative; margin:5px;">
            <img src="achievement_image/<?php echo $img; ?>" width="100px" height="100px">
            <button type="button" class="btn btn-danger btn-sm remove-image" style="position:absolute; top:0; right:0;" data-image="<?php echo $img; ?>"><i class="fa-solid fa-trash"></i></button>
        </div>
    <?php endforeach; ?>
</div>
                                        <input type="file" name="image[]" multiple class="form-control" id="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">NAME</label>
                                        <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">VENUE</label>
                                        <input type="text" name="venue" value="<?php echo $row['venue']; ?>" class="form-control" id="heading" placeholder="Enter venue">
                                    </div>
                                     <div class="form-group">
                                        <label for="heading">DATE</label>
                                        <input type="date" name="date" value="<?php echo $row['date']; ?>" class="form-control" id="heading" placeholder="Enter date">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">CHOOSE CATEGORY</label>
                                        <input type="text" value="<?php echo $row['category']; ?>" name="category" class="form-control" id="heading" placeholder="Enter category">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">DESCRIPTION</label>
                                        <div id="description-container">
                                            <?php foreach($descriptions as $description): ?>
                                            <div class="description-item">
                                                <textarea id="summernote" name="description[]" class="form-control description-input" placeholder="Enter description"><?php echo $description; ?></textarea>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <!--<button type="button" id="add-description" class="btn btn-success btn-sm">Add Description</button>-->
                                    </div>
                                    <button type="submit" name="submit-form" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                </form>
                                <?php 
                                    } 
                                } 
                                ?>
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
    $descriptions = $_POST['description'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];

    // Handle image deletion
    if (!empty($_POST['delete_images'])) {
        foreach ($_POST['delete_images'] as $deleteImage) {
            $filePath = "achievement_image/" . $deleteImage;
            if (file_exists($filePath)) {
                unlink($filePath); // Delete the file from the server
            }
        }

        // Remove deleted images from the list
        $myarr = array_diff($myarr, $_POST['delete_images']);
    }

    // Handle new image uploads
    $imageFiles = $_FILES["image"];
    $fileNames = array();
    $uploadDirectory = "achievement_image/";

    // Ensure the upload directory exists
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Upload new images
    foreach ($imageFiles["tmp_name"] as $key => $tmpName) {
        if (!empty($tmpName)) {
            $fileName = basename($imageFiles["name"][$key]);
            $targetPath = $uploadDirectory . $fileName;

            // Move uploaded file to destination
            if (move_uploaded_file($tmpName, $targetPath)) {
                $fileNames[] = $fileName;
            } else {
                echo "Error uploading file: $fileName";
                exit; // Exit script if file upload fails
            }
        }
    }

    // Combine existing images with new uploads
    $allImages = array_merge($myarr, $fileNames);
    $imageList = implode(',', $allImages);

    // Update descriptions
    $all_descriptions = implode('|', $descriptions);

    // Update the database
    $sql_query = "UPDATE `achievement` SET `name`='$name', `image`='$imageList', `category`='$category', `description`='$all_descriptions', `date`='$date', `venue`='$venue' WHERE id='$id'";

    $stmt = mysqli_prepare($conn, $sql_query);
    if ($stmt) {
        if (mysqli_stmt_execute($stmt)) {
            echo "Achievement updated successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>
<script>
    $(document).ready(function() {
        $(document).on('click', '.remove-image', function() {
            var imageName = $(this).data('image');
            $(this).closest('.image-item').remove(); // Remove the image from the front-end
            $('<input>').attr({
                type: 'hidden',
                name: 'delete_images[]',
                value: imageName
            }).appendTo('form'); // Add a hidden input to keep track of the images to be deleted
        });
    });
</script>
<!-- Summernote JS and CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
