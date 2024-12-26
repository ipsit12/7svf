<?php
// include "db_connect/connection.php";
include("include/header.php")?>


<!-- page-title -->
<!-- <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section> -->
<!-- page-title end -->


<!-- feature-style-three -->
<section class="feature-style-three p_relative centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-31.png);"></div>
    <div class="auto-container">
        <div class="sec-title mb_100">
            <span class="sub-title">Contact Info</span>
            <h2>We’d Love To Help You</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-three wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="block-shape" style="background-image: url(assets/images/shape/shape-32.png);"></div>
                        <div class="icon-box"><i class="icon-48"></i></div>
                        <h3>Our Location</h3>
                        <p>PLOT-30,BIPADA TARINI NAGAR, BALIGUALI, PURI, PIN-752002</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-three wow fadeInUp animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-49"></i></div>
                        <h3>Email Address</h3>
                        <p><a href="mailto:admin@7svf.com">admin@7svf.com</a>
                        <!--<br /><a-->
                        <!--        href="mailto:support@example.com">support@example.com</a>-->
                                </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-three wow fadeInUp animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="block-shape" style="background-image: url(assets/images/shape/shape-33.png);"></div>
                        <div class="icon-box"><i class="icon-50"></i></div>
                        <h3>Phone Number</h3>
                        <p>9776742661<br />
                        <a href="tel::9777942661">9777942661</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-three end -->


<!-- contact-style-two -->
<section class="contact-style-two sec-pad" style="background-image: linear-gradient(to bottom right,#036ffc 10%,#c2fc03,#13fc03);">
    <div class="auto-container">
        <div class="row clearfix form-row">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box mr_70" style="width:100%">
                    <div class="content-column1">
                        <div class="sec-title mb_35">
                            <!-- <span class="sub-title">Message</span> -->
                            <span class="sub-title" style="font-weight:bolder;">Volunteer</span>
                            <!-- <p class="mt_20">Lorem ipsum dolor sit amet, consectetur adipiscing elit et aenean orci egestas arcu interdum nisl magna.</p> -->
                            <h3 class="fw-bolder mb-5" style="color:white;">Volunteer with us</h3>
                        </div>

                        <form action="volunteer.php" id="volunteer-form" method="POST" enctype="multipart/form-data">

                            <div class="input-box mb-4">
                                <!-- <label for="vname">Name</label> -->
                                <input type="text" id="vname" class="input-textbox" placeholder="Your Name" name="username">
                                <input type="tel" id="vmobile" class="input-textbox" placeholder="Your Mobile" name="phone">
                            </div>

                            <div class="input-box mb-4">
                                <input type="email" id="vemail" class="input-textbox" placeholder="Your Email" name="email">
                                <input type="text" id="vadhaar" class="input-textbox" placeholder="Your Adhaar No." name="adhar">
                            </div>

                            <div class="input-box mb-4">
                                <input type="text" id="vprofession" class="input-textbox" placeholder="Your Profession" name="profession">
                                <input type="text" id="vbloodgroup" class="input-textbox"
                                    placeholder="Your Blood Group" name="blood">
                            </div>
                            <div class="input-box mb-4">
                                <input type="file" id="vprofession" class="input-textbox" style="width:100%" name="image">
                                
                            </div>


                            <textarea id="" rows="5" style="width:100%;" class="input-textarea"
                                placeholder="Your Address" name="message"></textarea>

                            <input type="submit" value="Submit" name="submit">


                        </form>
                    </div>

                    <!-- <ul class="social-links clearfix d-flex justify-content-start align-items-center gap-2"
                        style="margin-top:20px;" id="contact-social-ul">
                        <li><a href="contact.php" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="contact.php"class="x"><i class="fab fa-x-twitter"></i></a></li>
                        <li><a href="contact.php" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="contact.php" class="insta"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="contact.php" class="link"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column" style="">
                <div class="form-inner">
                    <form method="post" action="config.php" id="contact-form" class="default-form"> 
                            <span class="sub-title" style="color:#DE2C2C;font-weight:bolder;">Message</span>
                        <h2 class="fw-bolder mb-5">Feel Free to Contact with us</h2>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your email" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Address">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Type message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn theme-btn-one" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                </div>
                            </form>



                </div>
     <h3 class="mt-5 fw-bolder text-center">SOCIAL MEDIA</h3>
                <ul class="social-links clearfix d-flex justify-content-center align-items-center gap-2"
                        style="margin-top:20px;" id="contact-social-ul">
                        <li><a href="contact.php" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="contact.php"class="x"><i class="fab fa-x-twitter"></i></a></li>
                        <li><a href="contact.php" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="contact.php" class="insta"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="contact.php" class="link"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
               
            </div>
            
        </div>
    </div>
</section>
<!-- contact-style-two end -->


<!-- google-map-section -->
<!-- <section class="google-map-section">
            <div class="map-inner p_relative d_block">
                <div 
                    class="google-map" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="assets/images/icons/map-marker.png"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </section> -->


<section class="google-map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3753.2591929577766!2d85.86735!3d19.828982999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDQ5JzQ0LjMiTiA4NcKwNTInMDIuNSJF!5e0!3m2!1sen!2sin!4v1722430600823!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>



<!-- google-map-section end -->


<?php include("include/footer.php")?>