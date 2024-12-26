<?php include("include/header.php");
include "db_connect/connection.php";?>

<style>
/* .bread-crumb li:nth-child(1){
    position:relative;
}
    .bread-crumb li:nth-child(1)::after{
        content:"\203A";
        font-size:15px;
        position:absolute;
        right:-15px;
    } */


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


.news-block-two .inner-box .image-box img{
    object-fit:cover;
    height:350px;
    width:100%;
}





</style>

<!-- page-title -->
<section class="page-title centred"
    style="background-image:url(./assets/images/background/page-title.jpg),linear-gradient(to right, rgb(64, 62, 62), rgb(82, 80, 80)); background-repeat: no-repeat; background-size: cover; background-position: center center; background-blend-mode: overlay; height:350px; display:flex; justify-content:center; align-items:center;">

    <!-- <section class="page-title centred" style="background-image: linear-gradient(to right,gray,gray), url(./assets/images/background/page-title.jpg); height:350px; background-size:cover; background-attachment:fixed; background-position:center; background-repeat:no-repeat; background-blend-mode:overlay;"> -->
    <!-- <div class="bg-layer" ></div> -->

    <div class="auto-container">
        <div class="content-box">
            <h1 class="text-white" style="font-weight:900;">BLOG</h1>
            <!-- <ul class="bread-crumb clearfix d-flex justify-content-center align-items-center text-white gap-4 mt-3 fw-bold">
                <li><a href="index.html" class="text-white">Home</a></li>
                <li>Blog Grid</li>
            </ul> -->
        </div>
    </div>

    
</section>

<!-- page-title end -->

<?php
$category = $_GET['category'];
            $select = "SELECT * FROM blog where category = '$category'";
            $result = mysqli_query($conn, $select);

            if (mysqli_num_rows($result) > 0) {
                while ($blogRow = mysqli_fetch_assoc($result)) {

                    $descriptions = explode('|', $blogRow['description']);


                 
            ?>
<!-- news-style-two -->
<section class="news-style-two blog-grid  pb_150" style="margin-top:60px;">
    <div class="auto-container">

        <h1 class="text-center fw-bolder bebas-neue-regular category-name"
            style="margin-bottom:40px; background:linear-gradient(10deg,red,yellow); color:transparent;-webkit-background-clip:text;">
            <?php echo $blogRow['category'] ?></h1>

        <div class="row clearfix" style="margin-block:40px;">

            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-details.php?id=<?php echo $blogRow['id'] ?>"><img src="admin/uploads/<?php echo $blogRow['image'] ?>"
                                    alt=""></a></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <span class="post-date"><?php echo $blogRow['date'] ?></span>
                                <h3><a href="blog-details.php?id=<?php echo $blogRow['id'] ?>"><?php echo $blogRow['heading'] ?></a></h3>
                                <!-- <ul class="post-info clearfix">
                                    <li><i class="icon-21"></i><a href="blog-details.html">Admin</a></li>
                                    <li><i class="icon-22"></i><a href="blog-details.html">7 Comnt</a></li>
                                </ul> -->
                                <?php
                                foreach($descriptions as $description) {
                                                ?>
                                           
                                <p><?php echo $description ?>.</p>
                                <?php } ?>
                                <div class="btn-box">
                                    <a href="blog-details.php?id=<?php echo $blogRow['id'] ?>" class="theme-btn-one">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            
           


        </div>

        



        </div> 
    </div>
</section>
<?php }}?>
<!-- news-style-two end -->


<?php include("include/footer.php")?>