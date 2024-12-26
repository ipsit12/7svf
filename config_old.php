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
?>