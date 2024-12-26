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
                        <h4 class="header-title">Category Details</h4>
                        <div class="data-tables datatable-primary table-responsive">
                            <table id="dataTable2" class="text-center table table-bordered">
                                <thead class="text-capitalize">
                                    <tr>
                                       
                                        <th>Category</th>
                                       
                                        <th>DELETE</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select = "SELECT * FROM team_category";
                                    $result = mysqli_query($conn, $select);

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                           ?>
                                           <tr>
                                            <td><?php echo $row['category'] ?></td>
                                            <td><button class="btn btn-danger" href="delteamcategory.php?id=<?php echo $row['id'] ?>">DELETE</button></td>
                                           </tr>
                                           <?php
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
                                <h4 class="header-title">Add Category</h4>
                                <form method="post" >
                                    
                                    <div class="form-group">
                                        <label for="heading">CATEGORY</label>
                                        <input type="text" name="category" class="form-control" id="heading" placeholder="Enter category">
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


</html>

<?php 
if(isset($_POST['submit-form'])){
    $category = $_POST['category'];
   

        $sql_query = "INSERT INTO `team_category`(`category`)
                      VALUES ('$category')";

        $sql_result = mysqli_query($conn, $sql_query);

        if($sql_result){
            echo "<script>alert('Data inserted successfully'); window.location.assign('./addteamcategory.php');</script>";
        } else {
            echo "<script>alert('Failed to insert data into the database');</script>";
        }
   
}
?>
