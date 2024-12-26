<?php 
include("include/header.php");
include "db_connect/connection.php"; 
?>
<!-- Projects Section -->
<section class="projects-section project-page-one p_relative centred">
    <div class="auto-container">
        <div class="sortable-masonry">
            <!-- Filter Tabs for Categories -->
            <div class="filters centred mb_50">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter=".all">All Works</li>
                    <?php
                    $selectCategories = "SELECT * FROM achievement_category";
                    $categoryResult = mysqli_query($conn, $selectCategories);

                    if(mysqli_num_rows($categoryResult) > 0) {
                        while($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                            $categoryName = strtolower($categoryRow['category']); // Assuming 'category' is the column name
                            echo '<li class="filter" data-role="button" data-filter=".' . $categoryName . '">' . $categoryRow['category'] . '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>

            <!-- Items Container -->
            <div class="items-container row clearfix">
                <?php
                $selectAchievements = "SELECT * FROM achievement";
                $achievementResult = mysqli_query($conn, $selectAchievements);

                if (mysqli_num_rows($achievementResult) > 0) {
                    while ($achievementRow = mysqli_fetch_assoc($achievementResult)) {
                        $images = explode(',', $achievementRow['image']);
                        $descriptions = explode('|', $achievementRow['description']);
                        $firstDescription = $descriptions[0];
                        $descriptionWords = explode(' ', $firstDescription);
                        $limitedDescription = implode(' ', array_slice($descriptionWords, 0, 50)) . (count($descriptionWords) > 50 ? '...' : '');
                        $category = strtolower($achievementRow['category']); // Assuming you have a category column in your achievement table
                ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all <?php echo $category; ?>">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <?php if (!empty($images)): ?>
                                            <a href="achievement_details.php?id=<?php echo $achievementRow['id'] ?>"><img src="admin/achievement_image/<?php echo $images[0]; ?>" alt="" style="height:300px;">
                                            </a>
                                        <?php endif; ?>
                                    </figure>
                                    <div class="content-box">
                                        <div class="inner">
                                            
                                            <h3><a href="achievement_details.php?id=<?php echo $achievementRow['id'] ?>"><?php echo $achievementRow['name'] ?></a></h3>
                                            <!--<span class="designation"><?php echo $limitedDescription ?></span>-->
                                        </div>
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
    </div>
</section>
<!-- Projects Section End -->
<?php include("include/footer.php"); ?>

<script>
$(document).ready(function() {
    $('.filter').click(function() {
        var filterValue = $(this).attr('data-filter');
        if (filterValue == '.all') {
            $('.masonry-item').show('1000');
        } else {
            $('.masonry-item').not(filterValue).hide('3000');
            $('.masonry-item').filter(filterValue).show('3000');
        }
    });

    // Add active class to the clicked category
    $('.filter').click(function() {
        $('.filter').removeClass('active');
        $(this).addClass('active');
    });
});
</script>
