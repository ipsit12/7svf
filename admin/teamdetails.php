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
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Blog Details</h4>
                        <div class="data-tables datatable-primary table-responsive">
                            <table id="dataTable2" class="text-center table table-bordered">
                                <thead class="text-capitalize">
                                    <tr>
                                        <th>IMAGE</th>
                                        <th>NAME</th>
                                        <th>OFFICIALCODE</th>
                                        <th>QUALIFICATION</th>
                                        <th>JOB ROLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>CATEGORY</th>
                                        
                                        <th>DELETE</th>
                                        <th>EDIT</th>
                                        <!-- <th>EDIT</th> -->
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select = "SELECT * FROM team";
                                    $result = mysqli_query($conn, $select);

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $imagePath = "team_uploads/" . $row['image'];
                                            $descriptions = explode('|', $row['description']);
                                            echo "<tr>";
                                            echo "<td><img src='$imagePath' alt='Image' class='img-fluid' style='max-width: 100px;'></td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                             echo "<td>" . $row['officialcode'] . "</td>";
                                            echo "<td>" . $row['qualification'] . "</td>";
                                            echo "<td>" . $row['role'] . "</td>";
                                            echo "<td>";
                                            foreach($descriptions as $description) {
                                                echo "<p>$description</p>";
                                            }
                                            echo "</td>";
                                            echo "<td>" . $row['category'] . "</td>";
                                           ?>
                                            <td><a href='delteamdetails.php?id=<?php echo $row['id'] ?>' class='btn btn-danger'>Delete</a></td>;
                                            <td><a href='editteamdetails.php?id=<?php echo $row['id'] ?>' class='btn btn-primary'>Edit</a></td>;
                                           <!-- <td><a href='#' class='btn btn-primary'>Edit</a></td>; -->
                                            <?php
                                          
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No data found</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Add New Blog</h4>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="image">CHOOSE IMAGE</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">Name</label>
                                        <input type="text" name="name" class="form-control" id="heading" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">Officialcode</label>
                                        <input type="text" name="officialcode" class="form-control" id="heading" placeholder="Enter officialcode">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">Qualification</label>
                                        <input type="text" name="qualification" class="form-control" id="heading" placeholder="Enter qualification">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">Role</label>
                                        <input type="text" name="role" class="form-control" id="heading" placeholder="Enter job_role">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">CHOOSE CATEGORY</label>
                                       
                                        <select class="form-control" name="category">
                                        <?php
                                    $select = "SELECT * FROM team_category";
                                    $result = mysqli_query($conn, $select);

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {?>
                                            <option value="<?php echo $row['category'] ?>"><?php echo $row['category'] ?></option>
                                            <?php
                                        }}
                                        ?>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="description">DESCRIPTION</label>
                                        <div id="description-container">
                                            <div class="description-item">
                                                <textarea name="description[]" id="summernote" class="form-control description-input" placeholder="Enter description"></textarea>
                                            </div>
                                        </div>
                                        <button type="button" id="add-description" class="btn btn-success mt-3">Add More</button>
                                    </div>
                                    <button type="submit" name="submit-form" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                </form>
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
    $officialcode = $_POST['officialcode'];
    $descriptions = $_POST['description'];
    $category = $_POST['category'];

    $filename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $path = 'team_uploads/' . $filename; // Corrected path
    $qualification = $_POST['qualification'];
    $role = $_POST['role'];

    if(move_uploaded_file($tmpname, $path)) {
        $all_descriptions = implode(',', $descriptions);

        $sql_query = "INSERT INTO `team`(`image`, `name`, `description`, `category`, `qualification`, `role`,`officialcode`) VALUES 
        ('$filename','$name','$all_descriptions','$category','$qualification','$role','$officialcode')";


        $sql_result = mysqli_query($conn, $sql_query);

        if($sql_result){
            echo "<script>alert('Data inserted successfully'); window.location.assign('./teamdetails.php');</script>";
        } else {
            echo "<script>alert('Failed to insert data into the database');</script>";
        }
    } else {
        echo "<script>alert('Failed to upload the image');</script>";
    }
}
?>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
  <!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
