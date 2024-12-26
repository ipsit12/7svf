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
        <!--<div class="row">-->
        <!--    <div class="col-12 mt-5">-->
        <!--        <div class="card">-->
        <!--            <div class="card-body">-->
        <!--                <h4 class="header-title">Blog Details</h4>-->
        <!--                <div class="data-tables datatable-primary table-responsive">-->
                            <!--<table id="dataTable2" class="text-center table table-bordered">-->
                            <!--    <thead class="text-capitalize">-->
                            <!--        <tr>-->
                            <!--            <th>IMAGE</th>-->
                            <!--            <th>OCCASION</th>-->
                            <!--            <th>DESCRIPTION</th>-->
                            <!--            <th>CATEGORY</th>-->
                            <!--                 <th>VENUE</th>-->
                            <!--            <th>DELETE</th>-->
                            <!--            <th>EDIT</th>-->
                            <!--            <th>DATE</th>-->
                            <!--        </tr>-->
                            <!--    </thead>-->
                            <!--    <tbody>-->
                            <!--        <?php-->
                            <!--        $select = "SELECT * FROM achievement";-->
                            <!--        $result = mysqli_query($conn, $select);-->

                            <!--        if(mysqli_num_rows($result) > 0) {-->
                            <!--            while($row = mysqli_fetch_assoc($result)) {-->
                            <!--                $value = $row['image'];-->
                            <!--                $myarr = explode(',', $value);-->
                            <!--                $descriptions = explode('|', $row['description']);-->
                            <!--                echo "<tr>";-->
                            <!--                ?>-->
                            <!--                <td>-->
                            <!--                    <?php foreach ($myarr as $filename): ?>-->
                            <!--                        <img src="achievement_image/<?php echo $filename; ?>" alt="" width="100px">-->
                            <!--                    <?php endforeach; ?>-->
                            <!--                </td>-->
                            <!--                <?php-->
                            <!--                echo "<td>" . $row['name'] . "</td>";-->
                                           
                            <!--                echo "<td>";-->
                            <!--                foreach($descriptions as $description) {-->
                            <!--                    echo "<p>$description</p>";-->
                            <!--                }-->
                            <!--                echo "</td>";-->
                            <!--                echo "<td>" . $row['category'] . "</td>";-->
                            <!--                 echo "<td>" . $row['venue'] . "</td>";-->
                            <!--               ?>-->
                            <!--                <td><a href='delachievement.php?id=<?php echo $row['id'] ?>' class='btn btn-danger'>Delete</a></td>;-->
                            <!--                 <td><a href='editachievement.php?id=<?php echo $row['id'] ?>' class='btn btn-warning'>Edit</a></td>;-->
                                           
                                          
                            <!--                <?php-->
                            <!--                echo "<td>". $row['date'] . "</td>";-->
                            <!--                echo "</tr>";-->
                            <!--            }-->
                            <!--        } else {-->
                            <!--            echo "<tr><td colspan='6'>No data found</td></tr>";-->
                            <!--        }-->
                            <!--        ?>-->
                            <!--    </tbody>-->
                            <!--</table>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <div class="col-12 mt-5">
                      <div class="card shadow-lg" style="border-radius: 15px;">
    <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="header-title mb-0" style="color: #007bff;">View Your On-going Projects</h4>
            <a href="view_projects.php" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;">
                View Projects
            </a>
        </div>
        <form method="post" action="projectconfig.php" enctype="multipart/form-data" class="p-4" style="background-color: #f1f1f1; border-radius: 10px;">
            <h3 class="text-center mb-4" style="color: #007bff;">Add New Ongoing Project</h3>
            <div class="form-group">
                <label for="image" style="color: #17a2b8;">Choose Image</label>
                <input type="file" name="image" required class="form-control" id="image">
            </div>
            <div class="form-group">
                <label for="project_name" style="color: #28a745;">Project Name</label>
                <input type="text" name="project_name" class="form-control" id="project_name" placeholder="Enter project name" required>
            </div>
            <div class="form-group">
        <label for="year_range" style="color: #ffc107;">Year Range</label>
        <select name="year_range" id="year_range" class="form-control" required>
            <?php
            $currentYear = date("Y");
            $endYear = $currentYear + 1; // To add the future year
            for ($year = 2020; $year <= $endYear; $year++) {
                echo "<option value='$year-" . ($year + 1) . "'>$year-" . ($year + 1) . "</option>";
            }
            ?>
        </select>
    </div>
            <button type="submit" name="submit-form" class="btn btn-primary mt-4 btn-block" style="background-color: #007bff; border-color: #007bff;">Submit</button>
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

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
  <!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

