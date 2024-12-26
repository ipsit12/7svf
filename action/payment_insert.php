<?php

include("../db_connect/connection.php");

if (isset($_POST['save'])) {
    $id = $_POST['data_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $adress = $_POST['adress']; 
    $transactionid = $_POST['transactionid'];
    $amount = $_POST['amount'];

    
    $checkSql = "SELECT * FROM `payment` WHERE `id` = '$id';";
    $checkResult = mysqli_query($conn, $checkSql);
   
    if (mysqli_num_rows($checkResult) > 0) {
       
        $updateSql = "UPDATE `payment` SET `transactionid` = '$transactionid', `amount` = '$amount' WHERE `id` = '$id';";
        if (mysqli_query($conn, $updateSql)) {
            
            echo "<script>
            alert('successfull!');
            window.location.href = '../payment.php';
          </script>";
        } 
    } else {
        echo "Record not found.";
    }
}
?>
