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
                                        <th>OCCASION</th>
                                        <th>DESCRIPTION</th>
                                        <th>CATEGORY</th>
                                             <th>VENUE</th>
                                        <th>DELETE</th>
                                        <th>EDIT</th>
                                        <th>DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select = "SELECT * FROM achievement";
                                    $result = mysqli_query($conn, $select);

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $value = $row['image'];
                                            $myarr = explode(',', $value);
                                            $descriptions = explode('|', $row['description']);
                                            echo "<tr>";
                                            ?>
                                            <td>
                                                <?php foreach ($myarr as $filename): ?>
                                                    <img src="achievement_image/<?php echo $filename; ?>" alt="" width="100px">
                                                <?php endforeach; ?>
                                            </td>
                                            <?php
                                            echo "<td>" . $row['name'] . "</td>";
                                           
                                            echo "<td>";
                                            foreach($descriptions as $description) {
                                                echo "<p>$description</p>";
                                            }
                                            echo "</td>";
                                            echo "<td>" . $row['category'] . "</td>";
                                             echo "<td>" . $row['venue'] . "</td>";
                                           ?>
                                            <td><a href='delachievement.php?id=<?php echo $row['id'] ?>' class='btn btn-danger'>Delete</a></td>;
                                             <td><a href='editachievement.php?id=<?php echo $row['id'] ?>' class='btn btn-warning'>Edit</a></td>;
                                           
                                          
                                            <?php
                                            echo "<td>". $row['date'] . "</td>";
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
                                <h4 class="header-title">Add New Event</h4>
                                <form method="post" action="achievement_config.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="image">CHOOSE IMAGE</label>
                                        <input type="file" name="image[]" multiple required class="form-control" id="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">OCCASION</label>
                                        <input type="text" name="name" class="form-control" id="heading" placeholder="Enter heading">
                                    </div>
                                     <div class="form-group">
                                        <label for="heading">DATE</label>
                                        <input type="date" name="date" class="form-control" id="heading" placeholder="Enter Date">
                                    </div>
                                    <div class="form-group">
                                        <label for="heading">CHOOSE YEAR</label>
                                       
                                        <select class="form-control" name="category">
                                        <?php
                                    $select = "SELECT * FROM achievement_category";
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
                                        <label for="heading">VENUE</label>
                                        <input type="text" name="venue" class="form-control" id="heading" placeholder="Enter Venue">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">DESCRIPTION</label>
                                        <div id="description-container">
                                            <div class="description-item">
                                                <textarea name="description[]" id="summernote" class="form-control description-input" placeholder="Enter description"></textarea>
                                            </div>
                                        </div>
                                       
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

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
  <!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

