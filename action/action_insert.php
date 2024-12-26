<?php

include ("../db_connect/connection.php");


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    
    $adress = $_POST['adress'];

  

   
    
   
            $sql = "INSERT INTO `payment`(`name`, `email`, `mobno`,`adress`) VALUES 
            ('$name','$email','$mobno','$adress')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // Get the last inserted ID
                $last_id = mysqli_insert_id($conn);
                   echo "<script>
            alert('Payment gate way not  connected !');
            window.location.href = '../index.php';
          </script>";
                // Redirect to payment.php with the ID
                // header('Location: ../payment.php?aid=' . $last_id);
                exit(); // Ensure no further execution after redirect
            } else {
                echo "Error: " . mysqli_error($conn); // Display error if insertion fails
            }
        }
        
        ?>