<?php include "db_connect/connection.php";?>
<?php 
if(isset($_POST['submit-form'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    $sql_query = "INSERT INTO `contacts`(`username`, `email`, `phone`, `subject`, `message`) VALUES 
    ('$name','$email','$phone','$subject','$message')";

    $sql_result = mysqli_query($conn,$sql_query);
    if($sql_result){
        ?>
        <script>
            alert("data inserted successfully");
            window.location.assign("./contact.php");
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



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $fund = $_POST['fund'];
    $spoke = $_POST['spokes'];
    $description = $_POST['description'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
   
    $sql_query = "INSERT INTO `campaign`(`name`, `mobile`, `email_id`, `category`, `fund_required`, `spokes`, `description`, `city`, `dist`, `state`, `pin`) VALUES
     ('$name','$mobile','$email','$category','$fund','$spoke','$description','$city','$district','$state','$pin')";

    $sql_result = mysqli_query($conn,$sql_query);
    if($sql_result){
        ?>
        <script>
            alert("data inserted successfully");
            window.location.assign("./start-campaign.php");
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