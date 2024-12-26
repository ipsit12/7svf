<?php 
include("include/header.php");
include "db_connect/connection.php"; 
?>
<style>
    /* Your existing CSS code */
    body {
        font-family: Arial;
        margin: 0;
    }

    * {
        box-sizing: border-box;
    }

    img {
        vertical-align: middle;
    }

    .container {
        position: relative;
    }

    .mySlides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .column {
        float: left;
        width: 16.66%;
    }

    .demo {
        opacity: 0.6;
    }

    .active, .demo:hover {
        opacity: 1;
    }
</style>

<!-- sidebar-page-container -->
<?php
$id= $_GET['id'];
$select = "SELECT * FROM exploercampaign where id='$id'";
$result = mysqli_query($conn, $select);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $value = $row['image'];
        $myarr = explode(',', $value);
?>
<section class="sidebar-page-container pt_150 pb_150">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 sidebar-side">
                <div class="blog-details-content">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                
                                <!--<h2 style="text-align:center">Donate</h2>-->
                                <div class="container">
                                    <?php if (!empty($myarr)): ?>
                                        <?php foreach ($myarr as $index => $image): ?>
                                            <div class="mySlides">
                                                <div class="numbertext"><?php echo ($index + 1) . " / " . count($myarr); ?></div>
                                                <img src="campaign_image/<?php echo $image; ?>" style="width:100%">
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <?php if (!empty($myarr)): ?>
                                            <?php foreach ($myarr as $index => $image): ?>
                                                <div class="column">
                                                    <img class="demo cursor" src="campaign_image/<?php echo $image; ?>" style="width:100%" onclick="currentSlide(<?php echo $index + 1; ?>)" alt="Image <?php echo $index + 1; ?>">
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                               <h2><?php echo  $row['date'];?></h2>
                                <p><?php echo  $row['description'];?></p>
                                  <button style="background:red; color:white;padding-inline:2vw; padding-block:5px;border-radius:5px;justify-content:center;" onclick="location.href='details.php'">
                                    <i class="fa-regular fa-heart"></i>&nbsp;&nbsp;Donate Now
                                </button>
                                <!--<blockquote>-->
                                <!--    <div class="icon-box"><i class="icon-47"></i></div>-->
                                <!--    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit amet sit purus tempor dui consequat nibh elit urna interdum.</p>-->
                                <!--    <h4>Darlene Robertson</h4>-->
                                <!--</blockquote>-->
                                <!--<p>Tortor etiam sed suspendisse faucibus ac volutpat mattis tortor nec. Orc velit posuere turpis amet...</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    }
} 
?>
<!-- sidebar-page-container end -->
<?php include("include/footer.php"); ?>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
