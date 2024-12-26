<?php include("include/header.php");
include "db_connect/connection.php"; ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap');

/* General Section Styling */
.about-section {
    padding: 60px 0;
    background-color: #f9f9f9;
}

.sec-title {
    font-family: 'Playfair Display', serif;
    color: #333;
}

.sec-title h2 {
    font-size: 2.5rem;
    
    color: #2c3e50;
    text-transform: uppercase;
        margin-top: -134px;
}
.content-box .text strong {
    color: #2c3e50;
     margin-bottom: 30px!important;
}

.text p {
    margin-bottom: 15px;
}

</style>
<section class="about-section p_relative">
    <div class="auto-container">
        <h1 class="text-center fw-bolder category-name" 
                    style="margin-bottom:40px; background:linear-gradient(10deg,red,yellow); 
                    color:transparent; -webkit-background-clip:text; font-family: 'Playfair Display', serif;">About Us</h1>

        <!-- Mission Section -->
        <div class="row align-items-center clearfix mb-5">
            <div class="col-lg-6 col-md-12 image-column">
                <div class="image_block_one">
                    <div class="image-box p_relative">
                        <figure><img src="mission-scaled.jpg" alt="Mission Image" class="img-fluid rounded" id="about_us_image"></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="sec-title mb-4">
                            <span class="sub-title"></span>
                            <h2>Mission</h2>
                        </div>
                        <div class="text">
                            <p>Our mission is to bring positive and overall growth of every individual by developing his spheres /spokes of life i.e. education, health, society, employment, art & culture, environment and exploration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Vision Section -->
        <div class="row align-items-center clearfix mb-5">
            <div class="col-lg-6 col-md-12 order-lg-2 image-column">
                <div class="image_block_one">
                    <div class="image-box p_relative">
                        <figure><img src="vision.jpeg" alt="Vision Image" class="img-fluid rounded" id="about_us_image"></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-lg-1 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="sec-title mb-4">
                            <h2>Vision</h2>
                        </div>
                        <div class="text">
                            <p>We see a world where each individual is worthy of living a “fulfilled life” by making harmony between the 7 spokes of life.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Values Section -->
        <div class="row align-items-center clearfix mb-5">
            <div class="col-lg-6 col-md-12 image-column">
                <div class="image_block_one">
                    <div class="image-box p_relative">
                        <figure><img src="https://st4.depositphotos.com/3268541/23359/v/450/depositphotos_233595156-stock-illustration-values-vector-round-concept-colored.jpg" alt="Values Image" class="img-fluid rounded" id="about_us_image"></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="sec-title mb-4">
                            <h2>Values</h2>
                        </div>
                        <div class="text">
                            <p><strong>Innovation:</strong> Embracing creativity and new ideas to drive progress and improve our processes, products, and services.</p>
                            <p><strong>Accountability:</strong> Taking responsibility for our actions and decisions.</p>
                            <p><strong>Transparency:</strong> Promoting open communication and honesty in all our dealings.</p>
                            <p><strong>Empathy:</strong> Understanding and sharing the feelings of others.</p>
                            <p><strong>Dedication:</strong> Committing ourselves fully to our goals and the success of our projects.</p>
                            <p><strong>Teamwork:</strong> Collaborating effectively with others to achieve common goals.</p>
                            <p><strong>Integrity:</strong> Upholding the highest standards of honesty and ethical behavior.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Motto Section -->
        <div class="row align-items-center clearfix mb-5">
            <div class="col-lg-7 col-md-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">
                        <div class="sec-title mb-4">
                            <h2>Motto</h2>
                        </div>
                        <div class="text">
                            <p>Aim to achieve a fulfilled life for all.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 image-column">
                <div class="image_block_one">
                    <div class="image-box p_relative">
                        <figure><img src="motto.jpg" alt="Motto Image" class="img-fluid rounded" id="about_us_image"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<section class="teams-section" style="margin-bottom:300px;padding-inline:3vw;">

    <div class="sec-title mb_25">
        <span class="sub-title text-center d-block">TEAM</span>
    </div>


    <h4 class="text-center fw-bolder bebas-neue-regular category-name" style="margin-bottom:40px;margin-top:50px; background:linear-gradient(10deg,red,yellow); color:transparent;-webkit-background-clip:text;">
        DIRECTORS</h4>


    <div class="team-directors-section d-flex justify-content-center align-items-center gap-5 flex-wrap">
        <?php
        $Query = "SELECT * FROM team where category = 'DIRECTORS'";
        $Result = mysqli_query($conn, $Query);

        if (!$Result) {
            die("Error in  query: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_assoc($Result)) {


        ?>
                <div class="director-card">
                    <div class="director-image" style="width:100%; height:250px;">
                        <img src="admin/team_uploads/<?php echo $row['image'] ?>" alt="director-1" style="width:100%; height:100%; object-fit:fill;">
                    </div>
                    <div class="director-content">
                        <h3><?php echo $row['name'] ?></h3>
                        <h4><?php echo $row['role'] ?></h4>
                        <h4><?php echo $row['officialcode'] ?></h4>
                        <a href="viewprofile.php?id=<?php echo $row['id'] ?>" class="text-center d-block mt-2">View Profile</a>
                    </div>
                </div>
        <?php }
        } ?>
        <!-- <div class="director-card">
        <div class="director-image" style="width:100%; height:250px;">
            <img src="./assets/images/director2.jpg" alt="director-1"
                style="width:100%; height:100%; object-fit:fill;">
        </div>
        <div class="director-content">
            <h3>MRS APARNA MOHANTY</h3>
            <h4>DIRECTOR</h4>
            <h4>DIN 09791798</h4>
            <a href="viewprofile.php" class="text-center d-block mt-2">View Profile</a>
        </div>
    </div>

    <div class="director-card">
        <div class="director-image" style="width:100%; height:250px;">
            <img src="./assets/images/director3.jpg" alt="director-1"
                style="width:100%; height:100%; object-fit:fill;">
        </div>
        <div class="director-content">
            <h3>DR SUBHAJIT BEHERA</h3>
            <h4>DIRECTOR</h4>
            <h4>DIN 09791799</h4>
            <a href="viewprofile.php" class="text-center d-block mt-2">View Profile</a>
        </div>
    </div> -->


    </div>




    <h4 class="text-center fw-bolder bebas-neue-regular category-name" style="margin-bottom:40px;margin-top:50px; background:linear-gradient(10deg,red,yellow); color:transparent;-webkit-background-clip:text;">
        ADMINISTRATIVE TEAM</h4>


    <div class="team-administrative-section d-flex justify-content-center align-items-center gap-5 flex-wrap">
        <?php
        $Query = "SELECT * FROM team where category = 'ADMINISTRATIVE_TEAM'";
        $Result = mysqli_query($conn, $Query);

        if (!$Result) {
            die("Error in  query: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_assoc($Result)) {


        ?>
                <div class="director-card administrative-card">
                    <div class="director-image" style="width:100%; height:250px;">
                        <img src="admin/team_uploads/<?php echo $row['image'] ?>" alt="director-1" style="width:100%; height:100%; object-fit:fill;">
                    </div>
                    <div class="director-content">
                        <h3><?php echo $row['name'] ?></h3>
                        <h4><?php echo $row['role'] ?></h4>
                        <!-- <a href="viewprofile.php" class="text-center d-block mt-2">View Profile</a> -->
                    </div>
                </div>


        <?php }
        } ?>

    </div>



    <h4 class="text-center fw-bolder bebas-neue-regular category-name" style="margin-bottom:40px;margin-top:50px; background:linear-gradient(10deg,red,yellow); color:transparent;-webkit-background-clip:text;">
        ADVISORY TEAM</h4>


    <div class="team-advisory-section d-flex justify-content-center align-items-center gap-5 flex-wrap">
        <?php
        $Query = "SELECT * FROM team where category = 'ADVISORY_TEAM'";
        $Result = mysqli_query($conn, $Query);

        if (!$Result) {
            die("Error in  query: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_assoc($Result)) {


        ?>
                <div class="director-card advisory-card">
                    <div class="director-image" style="width:100%; height:250px;">
                        <img src="admin/team_uploads/<?php echo $row['image'] ?>" alt="director-1" style="width:100%; height:100%; object-fit:fill;">
                    </div>
                    <div class="director-content">
                        <h3><?php echo $row['name'] ?></h3>
                        <h4><?php echo $row['role'] ?></h4>
                        <!-- <a href="viewprofile.php" class="text-center d-block mt-2">View Profile</a> -->
                    </div>
                </div>


        <?php }
        } ?>

    </div>



    <h4 class="text-center fw-bolder bebas-neue-regular category-name" style="margin-bottom:40px;margin-top:50px; background:linear-gradient(10deg,red,yellow); color:transparent;-webkit-background-clip:text;">
        FINANCE SUPPORTERS</h4>


    <div class="team-finance-section">

        <div class="owl-carousel owl-theme" id="finance-carousel">
            <?php
            $Query = "SELECT * FROM team where category = 'FINANCE_SUPPORTERS'";
            $Result = mysqli_query($conn, $Query);

            if (!$Result) {
                die("Error in  query: " . mysqli_error($conn));
            }

            if (mysqli_num_rows($Result) > 0) {
                while ($row = mysqli_fetch_assoc($Result)) {


            ?>
                    <div class="item">
                        <div class="director-card finance-card">
                            <div class="director-image" style="width:100%; height:250px;">
                                <img src="admin/team_uploads/<?php echo $row['image'] ?>" alt="director-1" style="width:100%; height:100%; object-fit:fill;">
                            </div>
                            <div class="director-content">
                                <h3><?php echo $row['name'] ?></h3>
                                <h4><?php echo $row['role'] ?></h4>
                                <!-- <a href="viewprofile.php" class="text-center d-block mt-2">View Profile</a> -->
                            </div>
                        </div>

                    </div>
            <?php }
            } ?>
        </div>


    </div>





    <h4 class="text-center fw-bolder bebas-neue-regular category-name" style="margin-bottom:40px;margin-top:50px; background:linear-gradient(10deg,red,yellow); color:transparent;-webkit-background-clip:text;">
        VOLUNTEERS</h4>


    <div class="team-volunteers-section">

        <!-- <div class="part-one" > -->

        <div class="owl-carousel owl-theme" id="volunters-owl-carousel">
            <?php
            $Query = "SELECT * FROM team where category = 'VOLUNTEERS'";
            $Result = mysqli_query($conn, $Query);

            if (!$Result) {
                die("Error in  query: " . mysqli_error($conn));
            }

            if (mysqli_num_rows($Result) > 0) {
                while ($row = mysqli_fetch_assoc($Result)) {


            ?>

                    <div class="item">
                        <div class="director-card volunteers-card">
                            <div class="director-image" style="width:100%; height:250px;">
                                <img src="admin/team_uploads/<?php echo $row['image'] ?>" alt="director-1" style="width:100%; height:100%; object-fit:fill;">
                            </div>
                            <div class="director-content">
                                <h3><?php echo $row['name'] ?></h3>
                                <h4><?php echo $row['role'] ?></h4>
                                <!-- <a href="viewprofile.php" class="text-center d-block mt-2">View Profile</a> -->
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>

        </div>



    </div>





</section>


<?php include("include/footer.php") ?>