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
                         <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="header-title mb-0" style="color: #007bff;">Go Back To Add On-going Projects</h4>
            <a href="addongoingdetails.php" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;">
               Add On-going Projects
            </a>
        </div>
                        <h4 class="header-title">Project Details</h4>
                        <div class="data-tables datatable-primary table-responsive">
                           <table id="dataTable2" class="text-center table table-bordered">
    <thead class="text-capitalize">
        <tr>
            <th>Serial</th>
            <th>Image</th>
            <th>Project Name</th>
            <th>Year</th>
            <th>Delete</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        // Database connection
        include '../db_connect/connection.php';

        // Select data from the ongoingprojects table
        $select = "SELECT * FROM ongoingprojects";
        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            $serial=1;
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <!-- Serial -->
                    <td><?php echo $serial; ?></td>
                    <!-- Image -->
                    <td>
                        <img src="ongoingproject/<?php echo $row['image_name']; ?>" alt="" width="100px" style="margin: 5px;">
                    </td>
                    <!-- Project Name -->
                    <td><?php echo $row['project_name']; ?></td>
                    <!-- Date Created -->
                    <td><?php echo $row['year_range']; ?></td>
                    <!-- Delete Button -->
                    <td>
                        <a href='delongoingproject.php?id=<?php echo $row['serial']; ?>' class='btn btn-danger'>
                            Delete
                        </a>
                    </td>
                    <!-- Edit Button -->
                    
                </tr>
                <?php
                $serial++;
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

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
  <!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

