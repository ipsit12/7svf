<?php include "db_connect/connection.php";?>
<?php 
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $adhar = $_POST['adhar'];
    $profession = $_POST['profession'];
    $blood = $_POST['blood'];
    
    $filenames = $_FILES['image']['name'];
    $tmpnames = $_FILES['image']['tmp_name'];
    $paths = './contact_uploads/' . $filenames; 
    $moves = move_uploaded_file($tmpnames, $paths); 
    $message = $_POST['message'];
   
   
    $sql_query = "INSERT INTO `volunteer`(`username`,`phone`,`email`,`adhar`,`profession`,`blood`,`photo`,`message`) VALUES 
    ('$name','$phone','$email','$adhar','$profession','$blood','$filenames','$message')";

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