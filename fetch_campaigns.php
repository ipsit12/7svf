<?php
include "db_connect/connection.php";

if (isset($_POST['category_id'])) {
    $category_id = $_POST['category_id'];

    if ($category_id == 'all') {
        $select = "SELECT * FROM exploercampaign";
    } else {
        $select = "SELECT * FROM exploercampaign WHERE category = '$category_id'";
    }

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $value = $row['image'];
            $myarr = explode(',', $value); 
            ?>
            <div class="item" style="width:450px; height:550px; border-radius:10px; overflow:hidden; box-shadow:0px 0px 10px 2px gray;margin:2vw;">
                <div class="category-item-container" style="width:100%; height:100%;">
                    <div class="category-image" style="width:100%; height:250px;position:relative;overflow:hidden;">
                        <?php if (!empty($myarr)): ?><a href="campaign_details.php?id=<?php echo $row['id'] ?>">
                            <img src="campaign_image/<?php echo $myarr[0]; ?>" alt="img1" style="width:100%; height:100%; object-fit:cover;">
                            </a>
                        <?php endif; ?>
                        <!--<span style="background:#84c46e;display:inline-block;color:black;border-radius:5px;width:120px;padding:5px;position:absolute; right:20px; top:20px;">-->
                        <!--    Tax Benefit-->
                        <!--</span>-->
                    </div>
                    <div class="category-content" style="padding-inline:1vw; padding-block:20px;">
                       <h4 class="text-start" style="margin-bottom:40px;">
    <a href="campaign_details.php?id=<?php echo $row['id']; ?>">
        <?php 
            $description = $row['description']; 
            echo substr($description, 0, 50); // Display first 100 characters
            if (strlen($description) > 50) {
                echo '...'; // Add ellipsis if description is longer
            }
        ?>
    </a>
</h4>

                        <div class="category-info d-flex justify-content-between align-items-center" style="color:black;">
                            <div class="money-raised">
                                <!--<span><i class="fa-solid fa-indian-rupee-sign"></i> <strong>64,774</strong> Raised</span>-->
                            </div>
                            <div class="backers">
                                <span><i class="fa-solid fa-user-group"></i><strong>145</strong> Backers</span>
                            </div>
                        </div>
                        <!--<div class="progressbar-container" style="margin-block:20px;">-->
                        <!--    <div class="progress-bar-category">-->
                        <!--        <div class="progress-done" data-done="40"></div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="content-footer d-flex justify-content-between align-items-center">
                            <!--<div class="share-social-media-container d-flex justify-content-center align-items-center" style="color:black;gap:15px;">-->
                            <!--    <span>Share:</span>-->
                            <!--    <div class="social-media-icons d-flex justify-content-center align-items-center gap-3">-->
                            <!--        <div class="facebook">-->
                            <!--            <i class="fa-brands fa-facebook-f"></i>-->
                            <!--        </div>-->
                            <!--        <div class="twitter">-->
                            <!--            <i class="fa-brands fa-x-twitter"></i>-->
                            <!--        </div>-->
                            <!--        <div class="linkedin">-->
                            <!--            <i class="fa-brands fa-linkedin-in"></i>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="donate-now-btn-container">
                                <button style="background:red; color:white;padding-inline:2vw; padding-block:5px;border-radius:5px;justify-content:center;" onclick="location.href='details.php?id=<?php echo $row['id']; ?>'">
                                    <i class="fa-regular fa-heart"></i>&nbsp;&nbsp;Donate Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo '<p>No campaigns found for this category.</p>';
    }
} else {
    echo '<p>Invalid request.</p>';
}
?>
