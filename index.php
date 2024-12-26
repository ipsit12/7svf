<?php 
include "include/header.php";
// include "db_connect/connection.php"; 
?>


<style>
.about-section {
    padding: 0px 0px;
}

.about-section .col-lg-5,
.about-section .col-lg-7 {
    padding: 0px !important;
}

.about-section .auto-container {
    max-width: 100vw !important;
}

.image_block_one .image-box {
    padding-bottom: 0px !important;
}

.message-from-directors .message-div p {
    color: green;
    font-weight: bold;

}

.message-from-directors .card-content span {
    font-weight: bolder;
    color: White !important;
    text-shadow: 3px 3px 5px orange;
}

.message-from-directors {
    /* background-image: url("./assets/images/director-message-img.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position: center center; */
    padding-top: 20vh;

}

.card-3 .image,
.card-2 .image,
.card-1 .image {
    overflow: hidden;
    transition: all 0.5s ease-in-out;
}

.card-3 .image:hover img,
.card-2 .image:hover img,
.card-1 .image:hover img {
    scale: 1.1;
}

.banner-image {
    position: relative;
}

.title-text-container {
    position: absolute;
    top: 3%;
    left: 39%;
    width: fit-content;
    transform: translateX(-40%);
    /* margin-bottom:300px; */

}

/* .title-text-container{
    margin-bottom:300px !important;
    margin-left:-12vw;
    margin-top:-100px;
} */

.title-text-container span.title-name {
    font-weight: 900;
    font-size: 25px;
    /* color:transparent;
    
    background-image:linear-gradient(45deg,purple,#08677e); */
    -webkit-background-clip: text;
    /* text-shadow:5px 0px 5px orange; */
}

.second-text {
    position: relative;
    width: fit-content;
    display: inline-block !important;
    /* opacity:0; */
}

.second-text::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: transparent;

    /* border-left:5px solid red; */
    /* animation: typewriter 5s steps(12) infinite; */

}

/* @keyframes typewriter{
    40%,60%,80%{
        left:calc(100% + 4px);
    }
    100%{
        left:0%;
        
    }
} */

.second-text {
    /* visibility:hidden; */
}

.title-name {
    /* text-shadow:0px 0px 10px red, 0px 0px 10px blue;   */
    /* background-image:linear-gradient(45deg,purple 20%,white 30%) !important; */

    color: transparent;
    background: linear-gradient(30deg, black, red, #f97a1f);
    -webkit-background-clip: text;


    /* color:transparent;
    background:linear-gradient(to bottom, white 0%, white 50%, black 50%, black 100%);
    -webkit-background-clip:text; */


    font-size: 50px !important;
    display: inline-block;
    width: 550px;
    text-align: Center;
    line-height: 60px;
    animation: animate-title 5s linear infinite;
    position: relative;
    /* mix-blend-mode:difference; */
    /* mix-blend-mode:difference; */

    /* font-family: "Sofia", sans-serif !important;
  font-size: 30px !important; */

}

.title-name::before {
    content: attr(data-text);
    position: absolute;
    top: 4px;
    left: 4px;
    color: transparent;
    background: linear-gradient(30deg, greenyellow, black, red);
    -webkit-background-clip: text;
    z-index: -1;

}

.title-name::after {
    content: attr(data-text);
    position: absolute;
    top: 10px;
    left: 10px;
    color: transparent;
    background: linear-gradient(30deg, greenyellow, yellow);
    -webkit-background-clip: text;
    z-index: -2;
    filter: blur(5px);

}




/* @keyframes animate-title {
    0% {
        transform: translateY(0) rotate(10deg);
    }

    25% {
        transform: translateY(0px) rotate(-10deg);
    }

    50% {
        transform: translateY(-50px) rotate(10deg);
    }

    75% {
        transform: translateY(-50px) rotate(-10deg);
    }

    100% {
        transform: translateY(0px) rotate(10deg);
    }

} */


body {
    color: unset !important;

}

.backgroundpos {
    background-position: 50% 100px !important;
}

.backgroundpos1 {
    background-position: 50% 170px !important;
}

.message-div p {
    border-radius: 30px;
}

.mobbackgroundpos{
    background-position:6% -1px !important;
}



/* fonts used */

/* @import url('https://fonts.googleapis.com/css2?family=Yellowtail&display=swap'); */

.yellowtail-regular {
    font-family: "Yellowtail", cursive !important;
    font-weight: 400 !important;
    font-style: normal !important;
}
</style>








<!-- banner-section -->
<section class="banner-section ">




    <!-- <div class="banner-image"> -->
    <!-- <div style="background-image:url('./assets/images/banner1.jpg');background-size:100% 100%;background-repeat:no-repeat; height:580px; width:100%;">
        </div> -->

    <!-- <div class="title-text-container">
            <span class="title-name" data-text="7SPOKES VERDURE FOUNDATION">7SPOKES VERDURE FOUNDATION</span>
        </div> -->
    <!-- </div> -->

    <div class="banner-section-div"
        style="background-image:url('./assets/images/banner1.jpg'), linear-gradient(45deg,#e17575,yellow);background-size:100% auto; background-repeat:no-repeat;background-position:50% 170px;  width:100%; background-attachment:fixed;background-blend-mode:multiply; margin-top:0px; transition:all 0.3s ease-in-out; display:flex; flex-direction:column; justify-content:center; align-items:center; padding-top:100vh;">


        <div class="title-text-container">
            <span class="title-name" data-text="7SPOKES VERDURE FOUNDATION">7SPOKES VERDURE FOUNDATION</span>
        </div>



        <!-- <div class="content-box p_relative ml_30"
            style="width:50vw; margin:auto; background:linear-gradient(60deg,rgb(0,0,0,0.7),rgb(110, 111, 194,0.9),rgb(143, 64, 119,0.7),rgb(83, 58, 120,0.7),rgb(0,0,0,0.7));backdrop-filter:blur(2px); height:fit-content; padding:30px; border-radius:30px; box-shadow:0px 0px 1px 1px gray inset;"> -->

        <div class="content-box p_relative ml_30"
            style="width:50vw; margin:auto;height:fit-content; padding:30px; border-radius:30px; ">

            <div class="sec-title mb_25">
                <span class="sub-title mt-5"
                    style="text-align:center;display:block; font-weight:900;color:transparent; background-image:linear-gradient(360deg,rgb(145, 4, 28) 10%,rgb(4, 77, 145) 5%,red);-webkit-background-clip:text; font-size:1.5rem;">About
                    7Spokes Verdure Foundation</span>
                <h2 style="color:white; font-weight:900; text-align:center;">पंचानि सप्तानि कुशलानि बार्ता</h2>
            </div>
            <div class="text mb_35">
                <p style="text-align:justify;color:transparent; font-weight:bolder; font-size:25px; line-height:1.4; user-select:none;background-image:linear-gradient(90deg,white,white);-webkit-background-clip:text; "
                    class="yellowtail-regular">The number 7
                    has been considered as an auspicious number from time immorial. The number 7 has great significance
                    in Hinduism, Buddhism, Islam, Judaism and Christianity as well as for the whole human race. There
                    are 7 days in a week, 7
                    colours in the rainbow, 7 musical notes, 7 wonders of the world and 7 chakras in human
                    body. Each chakra is an energy centre of a human body and serve as the nonphysical
                    highway through which the cosmic energy travels connecting all the chakras of human body
                    which governs both physical and mental stimuli to the human body. When it comes to the
                    human race, every individual needs 7 aspects to run a balanced life like a wheel. Human
                    life is more like a wheel. There are 7 spokes namely health, society, education,
                    employment, environment, art & culture and exploration (Research & Development). These 7
                    spokes are very vital to bring verdure in human life. Verdure means a condition of
                    wholesome growth like greenery ad it conveys vigor of life. Three people with a single
                    vison came together founded 7 pokes verdure foundation to take care of 7 spokes of
                    individual for the development of human race. A dedicated team is working tirelessly for
                    the development of human race in 7SVF.</p>
            </div>

        </div>





        <section class="message-from-directors" style="width:90vw;">


            <!-- <h1 style="color:white; text-shadow:5px 3px 5px orange;width:fit-content; margin:0px Auto 100px;">MESSAGE FROM DIRECTORS
                    </h1> -->

            <!-- <h1 style="color:white; text-shadow:5px 3px 5px orange;width:fit-content; margin:0px Auto 100px;">MESSAGE FROM DIRECTORS
                    </h1>     -->

            <h1 class=" mt-5"
                style="text-align:center;display:block; font-weight:900;color:transparent; background-image:linear-gradient(360deg,rgb(145, 4, 28) 10%,rgb(4, 77, 145) 5%,red);-webkit-background-clip:text; margin-bottom:120px;">
                MESSAGE FROM DIRECTORS</h1>

            <div class="part-1-div d-flex  align-items-center justify-content-between" style="padding-bottom:20vh;">

                <div class="card-1"
                    style="width:350px; height:fit-content; text-align:center; background:linear-gradient(60deg,rgb(189, 50, 108,0.6) 50%, rgb(50, 124, 189,0.5)  50%); backdrop-filter:blur(20px); border-radius:30px; padding-block:50px;">

                    <div class="image" style="width:250px; height:300px; margin:Auto;">
                        <img src="admin/team_uploads/1.jpg" alt="" style="width:100%; height:100%; object-fit:cover;">
                    </div>

                    <div class="card-content  mt-2">
                        <span class="d-block text-dark">DR SIDHARTH SEKHAR PATRA (PT)</span>
                        <span class="d-block text-dark">BPT,MPT (Neurology)</span>
                        <span class="d-block text-dark">Senior Physiotherapist</span>
                    </div>

                </div>



                <div class="message-div" style="width:900px;">


                    <p
                        style="background:linear-gradient(to right, rgba(255, 219, 153,0.85),rgba(255, 219, 153,0.85)); padding:20px; position:relative;">
                        <i class="fa-solid fa-quote-left fs-1 me-3"></i>It’s my privilege to share my feeling and
                        thought. While studying in Bengaluru in 2006 I had posting in day care centre where the
                        differently abled children were brought from their home and we used to treat them. This was very
                        new for me and I was inspired to start a set up like this in my native. Later I came to Odisha
                        and started practice in Odisha. During my practice in odisha I have visited various places like
                        schools, colleges, office, oldage home and villages. I found incomplete life everywhere. So, I
                        was inspired by 7 Chakra of life from our ancient era. So, the time came and we created 7 Spokes
                        Verdure Foundation with two of my friends. So, we decided to work on different fields like
                        health, society, education, employment, environment, art & culture and exploration. We started
                        rehabilitation centre, food distribution, cloth distribution, plantation, vocational training
                        and promotion of art & culture. We have mission to work more to bring the wellness and fullness
                        in every individual’s life. I would request you all to support us to help human being in many
                        ways. <i class="fa-solid fa-quote-right fs-1 ms-3" style="position:absolute; bottom:10px;"></i>
                    </p>
                </div>


            </div>



            <div class="part-1-div second-div d-flex  align-items-center justify-content-between" style="padding-bottom:20vh;">



                <div class="message-div" style="width:900px;">

                    <p
                        style="background:linear-gradient(to right, rgba(255, 219, 153,0.85),rgba(255, 219, 153,0.85)); padding:20px;">
                        <i class="fa-solid fa-quote-left fs-1 me-3"></i> Working as a professional psychologist, I have
                        the opportunity to closely observe and understand people’s behaviour, their need and their views
                        towards life. In the last 2 years while dealing with numerous people from different class of
                        society, I developed an empathetic attitude towards people and their sufferings. In order to
                        bring a positive change in lives of people around me the idea of forming an organisation strike
                        to my mind. We laid the foundation stone of 7SVF, our brain child. Since its formation we are
                        working tirelessly, dedicatedly and empathetically to enrich the lives of every individual we
                        can touch. We have one motto and that is to make this world a better place where one can live a
                        fulfilled life.<i class="fa-solid fa-quote-right fs-1 ms-3"
                            style="position:absolute; bottom:10px;"></i>
                    </p>
                </div>






                <div class="card-3"
                    style="width:350px; height:fit-content; text-align:center;background:rgb(217, 163, 106,0.4); border-radius:30px; padding-block:50px;  background:linear-gradient(60deg,rgb(189, 50, 108,0.6) 50%, rgb(50, 124, 189,0.5)  50%); backdrop-filter:blur(20px);">

                    <div class="image" style="width:250px; height:300px; margin:Auto;">
                        <img src="admin/team_uploads/aprna mam.jpg" alt=""
                            style="width:100%; height:100%; object-fit:cover;">
                    </div>

                    <div class="card-content mt-2">
                        <span class="d-block text-dark">MRS APARNA MOHANTY</span>
                        <span class="d-block text-dark">MA in Psychology, PGDMH (IGNOU)</span>
                        <span class="d-block text-dark">Senior Clinical Psychologist </span>
                    </div>

                </div>





            </div>



            <div class="part-1-div d-flex  align-items-center justify-content-between" style="padding-bottom:20vh;">


                <div class="card-2"
                    style="width:350px; height:fit-content; text-align:center; background:rgb(217, 163, 106,0.4); border-radius:30px; padding-block:50px;  background:linear-gradient(60deg,rgb(189, 50, 108,0.6) 50%, rgb(50, 124, 189,0.5)  50%); backdrop-filter:blur(20px);">

                    <div class="image" style="width:250px; height:300px; margin:Auto;">
                        <img src="admin/team_uploads/SUBHAJIT BEHERA.jpg" alt=""
                            style="width:100%; height:100%; object-fit:cover;">
                    </div>

                    <div class="card-content  mt-2">
                        <span class="d-block text-dark">DR SUBHAJIT BEHERA (PT)</span>
                        <span class="d-block text-dark">BPT,MPT (Orthopedic)</span>
                    </div>

                </div>



                <div class="message-div" style="width:900px;">


                    <p
                        style="background:linear-gradient(to right, rgba(255, 219, 153,0.85),rgba(255, 219, 153,0.85)); padding:20px;">
                        <i class="fa-solid fa-quote-left fs-1 me-3"></i> I am happy to say that we have created this
                        7SVF of reform the life of a human being. 7SVF is such a platform that where we can reform,
                        reshape and boost a human life in the 7 aspects like health, society, education, employment,
                        environment, art & culture and exploration (Research & Development). My ardour for society poked
                        me many times to do something innovative. So my adorable, my worship lord Sri Jagannath guided
                        us to found this 7SVF with 2 of my companions to serve the mankind. We founded 7spokes verdure
                        foundation. We need the support and blessing of all of you who stand with us to make changes in
                        everyone’s life who is need.<i class="fa-solid fa-quote-right fs-1 ms-3"
                            style="position:absolute; bottom:10px;"></i>
                    </p>
                </div>




            </div>


        </section>











    </div>



</section>
<!-- banner-section end -->




<!-- about-section -->
<!-- <section class="about-section p_relative">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div class="image_block_one">
                    <div class="image-box " style="width:100%;">
                        

                        <img src="./assets/images/lordjagannath.jpg" alt="lord jagannath pic"
                            style="object-fit:cover; width:100%; height:568px;">

                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                <div class="content_block_one"
                    style="background-image:url('./assets/images/about_7spokes_img1.jfif'),linear-gradient(to right,rgba(0,0,0,0.6),rgba(0,0,0,0.6));background-repeat:no-repeat;background-size:cover;background-position:center center;background-blend-mode:overlay; padding:15px; height:100%;">
                    <div class="content-box p_relative ml_30">
                        <div class="sec-title mb_25">
                            <span class="sub-title mt-5">About 7Spokes Verdure Foundation</span>
                            <h2 style="color:white;">पंचानि सप्तानि कुशलानि बार्ता</h2>
                        </div>
                        <div class="text mb_35">
                            <p style="text-align:justify;color:white;">The number 7 has been considered as an auspicious
                                number from
                                time immorial. The number 7 has great significance in Hinduism, Buddhism, Islam, Judaism
                                and Christianity as well as for the whole human race. There are 7 days in a week, 7
                                colours in the rainbow, 7 musical notes, 7 wonders of the world and 7 chakras in human
                                body. Each chakra is an energy centre of a human body and serve as the nonphysical
                                highway through which the cosmic energy travels connecting all the chakras of human body
                                which governs both physical and mental stimuli to the human body. When it comes to the
                                human race, every individual needs 7 aspects to run a balanced life like a wheel. Human
                                life is more like a wheel. There are 7 spokes namely health, society, education,
                                employment, environment, art & culture and exploration (Research & Development). These 7
                                spokes are very vital to bring verdure in human life. Verdure means a condition of
                                wholesome growth like greenery ad it conveys vigor of life. Three people with a single
                                vison came together founded 7 pokes verdure foundation to take care of 7 spokes of
                                individual for the development of human race. A dedicated team is working tirelessly for
                                the development of human race in 7SVF.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- about-section end -->








<?php include("include/footer.php") ?>




<script>
const banner_section_div = document.querySelector(".banner-section-div");

window.addEventListener("scroll", function() {

    if (screen.width > 576) {

        if (window.scrollY > 0) {
            // banner_section_div.style.backgroundPosition="50% 100px";
            banner_section_div.classList.add("backgroundpos");
            banner_section_div.classList.remove("backgroundpos1");
        } else {
            banner_section_div.classList.remove("backgroundpos");

        }

    }else{

        if(window.scrollY>0){
            banner_section_div.classList.add("mobbackgroundpos");
        }else{
            banner_section_div.classList.remove("mobbackgroundpos");   
        }


    }



});


window.addEventListener("load", function() {

    if (screen.width > 576) {
        // banner_section_div.style.backgroundPosition="50% 100px";
        banner_section_div.classList.add("backgroundpos");

        if (window.scrollY == 0) {
            banner_section_div.classList.remove("backgroundpos");
            banner_section_div.classList.add("backgroundpos1");

        }
    }


});





// const secondText = document.querySelector(".banner-section .banner-image .title-text-container .second-text");

//    alert(secondText.textContent);

// function repeat() {

//     let all = 1;
//     while (all <= secondText.textContent.length) {

//         secondText.textContent.substr(0, all);
//         all++;

//     }
// }

// setInterval(repeat, 10s);







// volunteers section read more button


// const vt_readmore_btn = document.querySelector(".team-volunteers-readmore-btn");
// const part_two = document.querySelector(".team-volunteers-section .part-two");
// let isExpanded = false;

// vt_readmore_btn.onclick = function() {
//     isExpanded = !isExpanded;
//     part_two.classList.toggle("d-flex");
//     this.textContent = (isExpanded) ? "View Less..." : "View More...";
// }



// clients section js

// var copy = document.querySelector(".clients-slide-bar").cloneNode(true);

// document.querySelector(".clients-container").appendChild(copy);
</script>