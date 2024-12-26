<?php include("include/header.php");
include ("db_connect/connection.php");?>

<!-- page-title -->
<!--<section class="page-title centred"-->
<!--    style="background-image:url(./assets/images/background/page-title.jpg),linear-gradient(to right, rgb(64, 62, 62), rgb(82, 80, 80)); background-repeat: no-repeat; background-size: cover; background-position: center center; background-blend-mode: overlay; height:350px; display:flex; justify-content:center; align-items:center;">-->
<!--    <div class="auto-container">-->
<!--        <div class="content-box">-->
<!--            <h1 class="text-white" style="font-weight:900;">Society</h1>-->
<!--        </div>-->
<!--    </div>-->

<!--</section>-->

<!-- page-title end -->

<div style="background-image:url(./assets/images/background/socity.jpeg),linear-gradient(to right, rgb(64, 62, 62), rgb(82, 80, 80)); height:auto; background-size: cover; background-blend-mode: overlay; background-position: center center; padding: 50px 0;">
<section class="view-members-section" style="margin-block:19px; margin-inline:10vw;">


    <div class="member-info-card">
        <div class="member-info-card-content" style="width:100%;">

            <h1 class="text-center fw-bolder category-name" 
                    style="margin-bottom:40px; background:linear-gradient(10deg,red,yellow); 
                    color:transparent; -webkit-background-clip:text; font-family: 'Playfair Display', serif;">Society</h1>

        </div>

    </div>

    <div class="member-info-content-detail" style="margin-top:70px;">
        
    <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;">
                <span style="position:absolute; left:0; top:0;">➤</span>EA society is a group of people who live together in order to assist each other in living life and improving their circumstances. The main characteristics of society are shared norms, values, and beliefs. Society is important because it provides a framework for the following way which help people benefit in ways that would be difficult for individuals to achieve on their own. </p>

     <p class="highlight-point" style="color:white !important; position:relative; padding-left:20px; margin-bottom:20px;">
                <span style="position:absolute; left:0; top:0;">➤</span>E
    Here are some ways society is important:
    <ul style="margin-left:50px;">
        <li style="color:white !important">Social cohesion: Society provides a framework for social cohesion, which can help create inclusive, just, and sustainable communities.</li>
        <li style="color:white !important">Cultural transmission: Society allows for the transmission of culture, which can help shape human beings.</li>
        <li style="color:white !important">Personal development: Society can help people develop personall.</li>
        <li style="color:white !important">Economic interdependence: Society can create economic interdependence.</li>
        <li style="color:white !important">Social control: Society can provide social control.</li>
        <li style="color:white !important">Collective problem-solving: Society can help people solve problems collectively.</li>
        <li style="color:white !important">Human endeavors: Societies can play a crucial role in advancing human endeavors in areas like the humanities, sciences, literature, and knowledge exchange. </li>
      
    </ul>

   <h4 style="margin-top:40px; margin-left:20px; color:white; position:relative;">
    Causes of Social Issues
</h4>
    <ul style="margin-left:50px;">
        <li style="color:white !important">Overpopulation.</li>
        <li style="color:white !important">Economic inequality and poverty.</li>
        <li style="color:white !important">Illiteracy and lack of education.</li>
        <li style="color:white !important">Gender inequality.</li>
        <li style="color:white !important">High unemployment rates.</li>
        <li style="color:white !important">Superstitious beliefs.</li>
      
    </ul>
	 </p>
    
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
     h4::before {
        content: '';
        width: 10px; /* Adjust the size of the circle */
        height: 10px; /* Adjust the size of the circle */
        background-color: white; /* Color of the circle */
        border-radius: 50%; /* Makes the element a circle */
        position: absolute;
        left: -20px; /* Adjust the position of the circle */
        top: 50%; /* Vertically center the circle */
        transform: translateY(-50%); /* Center the circle relative to the line height */
    }
</style>