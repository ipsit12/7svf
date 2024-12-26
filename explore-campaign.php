<?php 
include("include/header.php");
include "db_connect/connection.php"; 
?>

<section class="service-section p_relative centred bg-color-1 sec-pad" style="padding-top:74px;"> 
    <section class="service-section p_relative centred bg-color-1 sec-pad" id="category-section" style="padding-top:0px;">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png); "></div>
        
        <h3 class="text-center text-uppercase mb-4" style="font-weight:900; padding-top:40px;">Categories</h3>
        <h5 class="text-center mb-5">Every Category Has A Different Suffering</h5>

        <div class="seven-category-container">
            <ul>
                <li class="btn category-btn" data-category-id="all" style="border:none;text:23px;">
                    <div class="category-icon d-flex flex-column align-items-center justify-content-center gap-2">
                        <span>All</span>
                    </div>
                </li>
                <?php
                $select = "SELECT * FROM campaign_category";
                $result = mysqli_query($conn, $select);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $category = $row['category'];
                        $categoryId = $row['id']; // Assuming 'id' is the unique identifier for the category
                        ?>
                        <li class="btn category-btn" data-category-id="<?php echo $categoryId; ?>" style="border:none;">
                            <div class="category-icon d-flex flex-column align-items-center justify-content-center gap-2">
                                <span><?php echo $category;?></span>
                            </div>
                        </li>
                    <?php 
                    }
                } 
                ?>
            </ul>
        </div>

        <div id="category-owl-carousel" class="owl-carousel owl-theme" style="margin-top:30px;">
            <!-- Dynamic content will be loaded here based on category selection -->
        </div>
    </section>
</section>

<?php include("include/footer.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    // Trigger the "All" category by default on page load
    loadCategory('all');

    $(".category-btn").click(function(){
        var categoryId = $(this).data('category-id');
        loadCategory(categoryId);
    });

    function loadCategory(categoryId) {
        $.ajax({
            url: 'fetch_campaigns.php', // The script that handles the AJAX request
            type: 'POST',
            data: { category_id: categoryId },
            success: function(response){
                $("#category-owl-carousel").html(response);
            },
            error: function(){
                alert('Error fetching campaigns.');
            }
        });
    }
});

</script>
