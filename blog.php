<?php include("include/header.php");
include "db_connect/connection.php"; ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@400..700&display=swap');

    .bebas-neue-regular {
        font-family: "Bebas Neue", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .news-style-two .category-name {
        position: relative;
        width: fit-content;
        margin: Auto;
    }

    .news-style-two .category-name::after {
        position: Absolute;
        content: "";
        width: 50%;
        height: 2px;
        background: red;
        right: 0%;
        bottom: 0;
    }

    .news-style-two .category-name::before {
        position: Absolute;
        content: "";
        width: 30%;
        height: 2px;
        background: orange;
        right: 0%;
        bottom: -3px;
    }

    .news-block-two .inner-box .image-box img {
        object-fit: cover;
        height: 350px;
        width: 100%;
    }
</style>


<section class="page-title centred" style="background-image:url(./assets/images/background/page-title.jpg),linear-gradient(to right, rgb(64, 62, 62), rgb(82, 80, 80)); background-repeat: no-repeat; background-size: cover; background-position: center center; background-blend-mode: overlay; height:350px; display:flex; justify-content:center; align-items:center;">
    <div class="auto-container">
        <div class="content-box">
            <h1 class="text-white" style="font-weight:900;">Blog</h1>
        </div>
    </div>
</section>

<section class="news-style-two blog-grid pb_150" style="margin-top:50px;">
    <div class="auto-container">
        
                <div class="row clearfix">
                    <?php
                    $blogQuery = "SELECT * FROM blog";
                    $blogResult = mysqli_query($conn, $blogQuery);

                    if (!$blogResult) {
                        die("Error in blog query: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($blogResult) > 0) {
                        while ($blogRow = mysqli_fetch_assoc($blogResult)) {

                            $descriptions = explode('|', $blogRow['description']);
                            $firstDescription = $descriptions[0];
                            $descriptionWords = explode(' ', $firstDescription);
                            $limitedDescription = implode(' ', array_slice($descriptionWords, 0, 50)) . (count($descriptionWords) > 50 ? '...' : '');
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                <div class="news-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image-box"><a href="blog-details.php?id=<?php echo $blogRow['id'] ?>"><img src="admin/uploads/<?php echo $blogRow['image'] ?>" alt=""></a></figure>
                                        <div class="lower-content">
                                            <div class="inner">
                                                <span class="post-date"><?php echo $blogRow['date'] ?></span>
                                                <h3><a href="blog-details.php?id=<?php echo $blogRow['id'] ?>"><?php echo $blogRow['heading'] ?></a></h3>
                                                <p><?php echo $limitedDescription; ?></p>
                                                <div class="btn-box">
                                                    <a href="blog-details.php?id=<?php echo $blogRow['id'] ?>" class="theme-btn-one">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p class='text-center'>No blogs available in this category.</p>";
                    }
                    ?>
                </div>
                <!--<a href="blog-explore.php?category=<?php echo $categoryName ?>"><button style="color:white;display:block; background:red;width:150px; padding:5px; margin:50px auto; border-radius:20px;">-->
                <!--    Read More...-->
                <!--</button></a>-->
               
    </div>
</section>

<?php include("include/footer.php") ?>
