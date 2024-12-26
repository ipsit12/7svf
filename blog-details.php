
<?php include("include/header.php");
include "db_connect/connection.php";?>

        <!-- page-title -->
<section class="page-title centred"
    style="background-image:url(./assets/images/background/page-title.jpg),linear-gradient(to right, rgb(64, 62, 62), rgb(82, 80, 80)); background-repeat: no-repeat; background-size: cover; background-position: center center; background-blend-mode: overlay; height:350px; display:flex; justify-content:center; align-items:center;">

    <!-- <section class="page-title centred" style="background-image: linear-gradient(to right,gray,gray), url(./assets/images/background/page-title.jpg); height:350px; background-size:cover; background-attachment:fixed; background-position:center; background-repeat:no-repeat; background-blend-mode:overlay;"> -->
    <!-- <div class="bg-layer" ></div> -->

    <div class="auto-container">
        <div class="content-box">
            <h1 class="text-white" style="font-weight:900;">Blog-Details</h1>
            <!-- <ul class="bread-crumb clearfix d-flex justify-content-center align-items-center text-white gap-4 mt-3 fw-bold">
                <li><a href="index.html" class="text-white">Home</a></li>
                <li>Blog Grid</li>
            </ul> -->
        </div>
    </div>

    
</section>

<!-- page-title end -->
<?php
$id=$_GET['id'];
                    $blogQuery = "SELECT * FROM blog WHERE id = '$id'";
                    $blogResult = mysqli_query($conn, $blogQuery);

                    if (!$blogResult) {
                        die("Error in blog query: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($blogResult) > 0) {
                        while ($blogRow = mysqli_fetch_assoc($blogResult)) {

                            $descriptions = explode('|', $blogRow['description']);
                            
                           
                            ?>

        <!-- sidebar-page-container -->
        <section class="sidebar-page-container pt_150 pb_150">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 sidebar-side" style="padding-inline:4vw;">
                        <div class="blog-details-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <div class="image-box" style="width: 300px; height: 300px; margin:Auto;">
                                        <figure class="image" style="width:100%; height:100%;box-shadow: 0px 0px 10px 0px gray;"><img src="admin/uploads/<?php echo $blogRow['image'] ?>" alt="" style="width:100%;height:100%;object-fit:contain;"></figure>
                                        <h2><span><?php echo $blogRow['date'] ?></span></h2>
                                    </div>
                                    <div class="lower-content">
                                       
                                        <h2><?php echo $blogRow['heading'];?></h2>
                                        <?php
                                        foreach($descriptions as $description) {
                                            ?>
                                               <p><?php echo $description;?></p>
                                                <?php
                                            }
                                            ?>
                                        <!-- <p>Imperdiet consectetur gravida vel rutrum tempus, mattis sit massa lacus morbi feugiat aliquam sagittis nunc neque sit nec lorem tincidunt arcu nunc accumsan risus felis in ornare Lorem ipsum dolor sit amet, consectetur adipiscing elit. cursus ornare non non massa elit rutrum. eros proin nibh neque interdum accumsan, neque vitae. Tortor etiam sed suspendisse faucibus ac volutpat mattis tortor nec. Orc velit posuere turpis amet. Lectus lacus lectus habitasse amet quam libero, lorem. Volutpat maecenas viverra consequat condimentum diam donec aliquet. Natoque quam vitae leo risus. Eget neque proin in dolor cursus bibendum urna dictum. Aliquam gravida et proin maecenas quis faucibus varius tristique.</p>
                                        <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamcorper nunc scelerisque turpis facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu quis. Nunc euismod odio cursus in diam eget tincidunt mauris.</p> -->
                                        <!-- <blockquote>
                                            <div class="icon-box"><i class="icon-47"></i></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit amet sit purus tempor dui consequat nibh elit urna interdum.</p>
                                            <h4>Darlene Robertson</h4>
                                        </blockquote> -->
                                        <!-- <p>Tortor etiam sed suspendisse faucibus ac volutpat mattis tortor nec. Orc velit posuere turpis amet Lectus lacus lectus habitasse amet quam libero lorem Volutpat maecenas viverra consequat proin condimentum diam donec aliquet natoque quam vitae leo risus. Eget neque proin in dolor cursus bibendum urna dictum.</p> -->
                                        <!-- <ul class="tags-list clearfix">
                                            <li><a href="blog-details.html">Agency</a></li>
                                            <li><a href="blog-details.html">Business</a></li>
                                            <li><a href="blog-details.html">Consult</a></li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                           
                            <div class="comment-form-area" style="margin-top:100px;">
                                <h3>Leave A Comments</h3>
                                <div class="form-inner">
                                    <form  method="post" class="default-form">
                                        <div class="row clearfix"> 
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="name" placeholder="Your Name" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Your email" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Type message"></textarea>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <div class="message-btn">
                                                    <button type="submit" name="submit-form" class="theme-btn-one">Post Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar ml_40">
                            <div class="sidebar-widget search-widget">
                                <div class="search-form">
                                    <form action="https://azim.commonsupport.com/Biztech/blog-2.html" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Search..." required>
                                            <button type="submit"><i class="icon-4"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.html">Eldercare</a></li>
                                        <li><a href="blog-details.html">Home Care</a></li>
                                        <li><a href="blog-details.html">Insurance</a></li>
                                        <li><a href="blog-details.html">Memory Care</a></li>
                                        <li><a href="blog-details.html">Nursing</a></li>
                                        <li><a href="blog-details.html">Senior Care</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Recent Article</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">How to Manage Online Business’s</a></h5>
                                        <span class="post-date">Apr 17, 2022</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Your Business is Ready For Integration</a></h5>
                                        <span class="post-date">Apr 16, 2022</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Ensure that Copies of Documents</a></h5>
                                        <span class="post-date">Apr 15, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget">
                                <div class="widget-title">
                                    <h3>Popular Tags</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.html">Agency</a></li>
                                        <li><a href="blog-details.html">Business</a></li>
                                        <li><a href="blog-details.html">Consult</a></li>
                                        <li><a href="blog-details.html">Corporate</a></li>
                                        <li><a href="blog-details.html">Marketing</a></li>
                                        <li><a href="blog-details.html">Industry</a></li>
                                        <li><a href="blog-details.html">Idea</a></li>
                                        <li><a href="blog-details.html">Data</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <?php }}?>
        <!-- sidebar-page-container end -->

<?php 
if(isset($_POST['submit-form'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    
   
    $sql_query = "INSERT INTO `queryid`(`name`, `email`,`message`) VALUES 
    ('$name','$email','$message')";

    $sql_result = mysqli_query($conn,$sql_query);
    if($sql_result){
        ?>
        <script>
            alert("data inserted successfully");
            window.location.assign("./blog-details.php");
        </script>
        <?php
    }
    else{
        ?>
          <script>
            alert("data failed to insert");
        </script>
        <?php
    }

}

?>


<?php include("include/footer.php")?>