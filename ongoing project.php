<?php include("include/header.php");?>
<style>
    .project-block-one .image-box {
    width: 100%;
    height: 300px; /* Set a fixed height for the image box */
    overflow: hidden;
    position: relative;
    border-radius: 10px; /* Optional: Add rounded corners */
}

.project-block-one .image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the whole box while maintaining aspect ratio */
    object-position: center; /* Centers the image in case it overflows */
    display: block;
}

</style>
       


        <!-- projects-section -->
        <section class="projects-section p_relative centred">
            <div class="auto-container">
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <?php
                $select = "SELECT * FROM ongoingprojects";
                $result = mysqli_query($conn, $select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $project_name = $row['project_name'];
                        $categoryId = $row['id']; // Assuming 'id' is the unique identifier for the category
                        ?>
                    
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="admin/ongoingproject/<?php echo $row['image_name']; ?>" alt=""></figure>
                            <div class="content-box">
                                <div class="inner">
                                    <!--<div class="view-btn"><a href="assets/images/project/project-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-16"></i></a></div>-->
                                    <h3><a href="ongoing project.php"><?php echo $row['project_name']; ?></a></h3>
                                    <span class="designation"><?php echo $row['year_range']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                      <?php 
                    }
                } 
                ?>
                    
                  
                </div>
            </div>
        </section>
        <!-- projects-section end -->


        <!-- main-footer -->
       <?php
       include "include/footer.php";
       ?>