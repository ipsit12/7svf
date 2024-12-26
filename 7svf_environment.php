<?php include("include/header.php");
include ("db_connect/connection.php");?>

<!-- page-title -->
<!--<section class="page-title centred"-->
<!--    style="background-image:url(./assets/images/background/page-title.jpg),linear-gradient(to right, rgb(64, 62, 62), rgb(82, 80, 80)); background-repeat: no-repeat; background-size: cover; background-position: center center; background-blend-mode: overlay; height:350px; display:flex; justify-content:center; align-items:center;">-->

<!--    <div class="auto-container">-->
<!--        <div class="content-box">-->
<!--            <h1 class="text-white" style="font-weight:900;">Health</h1>-->
<!--        </div>-->
<!--    </div>-->

<!--</section>-->

<!-- page-title end -->

<div style="background-image:url(./assets/images/background/environment.jpeg),linear-gradient(to right, rgb(64, 62, 62), rgb(82, 80, 80)); height:auto; background-size: cover; background-blend-mode: overlay; background-position: center center; padding: 50px 0;">
<section class="view-members-section" style="margin-block:19px; margin-inline:10vw;">


    <div class="member-info-card">
        <div class="member-info-card-content" style="width:100%;">

            <h1 class="text-center fw-bolder category-name" 
                    style="margin-bottom:40px; background:linear-gradient(10deg,red,yellow); 
                    color:transparent; -webkit-background-clip:text; font-family: 'Playfair Display', serif;">Environment</h1>
        </div>

    </div>

    <div class="member-info-content-detail" style="margin-top:70px;font-weight:bold" >
        
    <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;">
                <span style="position:absolute; left:0; top:0;">➤</span>EThe environment is everything that surrounds us, including both living and non-living things, as well as physical, chemical, and other natural forces. It can also refer to the circumstances, objects, or conditions that surround someone. The living, or biotic, parts of the environment include animals, plants, forests, fisheries, and birds. The non-living, or abiotic, parts include water, land, sunlight, rocks, and air.</p>
     
     <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;">
                <span style="position:absolute; left:0; top:0;">➤</span>ENature is the foundation of our health and well-being. It gives us clean air, water, food, materials and space for recreation. Spending time in nature is good for our mental health. And if we do not take care of the planet, its climate and ecosystems, we undermine how our societies function, worsen our lives and, perhaps most directly, harm our own well-being. However, human activities like pollution, deforestation, and burning fossil fuels can harm the environment and negatively impact human life. </p>
     

    </div>

</section>
</div>
<?php include("include/footer.php")?>
<style>
    .highlight-point:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #FFD700; /* Gold color for the text */
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
</style>