<?php include("include/header.php");
include ("db_connect/connection.php");?>

<!-- page-title -->
<section class="page-title centred"
    style="background-image:url(./assets/images/background/page-title.jpg),linear-gradient(to right, rgb(64, 62, 62), rgb(82, 80, 80)); background-repeat: no-repeat; background-size: cover; background-position: center center; background-blend-mode: overlay; height:350px; display:flex; justify-content:center; align-items:center;">

    <!-- <section class="page-title centred" style="background-image: linear-gradient(to right,gray,gray), url(./assets/images/background/page-title.jpg); height:350px; background-size:cover; background-attachment:fixed; background-position:center; background-repeat:no-repeat; background-blend-mode:overlay;"> -->
    <!-- <div class="bg-layer" ></div> -->

    <div class="auto-container">
        <div class="content-box">
            <h1 class="text-white" style="font-weight:900;">View Profile</h1>
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
        $Query = "SELECT * FROM team where id='$id'";
        $Result = mysqli_query($conn, $Query);

        if (!$Result) {
            die("Error in  query: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_assoc($Result)) {
                $descriptions = explode('|', $row['description']);

        ?>
<section class="view-members-section" style="margin-block:150px; margin-inline:10vw;">


    <div class="member-info-card">
        <div class="member-image">
            <img src="admin/team_uploads/<?php echo $row['image'] ?>" alt="director-1" style="width:100%; height:100%; object-fit:fill;">
        </div>

        <div class="member-info-card-content" style="width:100%;">

            <h2 class="member-name"><?php echo $row['name'] ?></h2>
            <h4 class="member-qualification"><?php echo $row['qualification'] ?></h4>
            <h4 class="member-designation"><?php echo $row['role'] ?></h4>

        </div>

    </div>




    <div class="member-info-content-detail" style="margin-top:70px;">
        <?php
    foreach($descriptions as $description) {?>
                                               
                                           
    <p><?php echo $row['description'] ?></p>
<?php  } ?>


    <!-- <p style="margin-top:40px; margin-left:20px;">
    As a senior physiotherapist he has experience in the following domain:
    <ul style="margin-left:50px;">
        <li>Management of all kinds of patients for physiotherapy in OPD, IPD and ICU of DHH, Puri.</li>
        <li>Resource person in the awareness programs about the physiotherapy services available at government hospitals at different level among the health workers and ASHAs.</li>
        <li>Resource person in the workshop for on Workplace Stress Management for working persons of different sectors.</li>
        <li>Expert in pain management by spinal manipulation.</li>
        <li>Conducted many free health camps at different rural areas of puri district.</li>
    </ul>
	
    </p>


    <p style="margin-top:40px;">He has dedicated his time for the rehabilitation and pain management at <b>Saishree Rehabilitation Unit (a unit of 7SVF)</b> to serve the people promoting physiotherapy. He is very compassionate n has involved himself in many social activities as a volunteer. </p> -->






    </div>














</section>

<?php }}
?>










<?php include("include/footer.php")?>