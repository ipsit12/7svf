<?php 
include "../db_connect/connection.php";
$id = $_GET['id'];
$status = $_GET['status'];
$update = "UPDATE campaign SET status ='$status' where id='$id'";
$result = mysqli_query($conn,$update);

$delete = "Delete from exploercampaign where campaign_id='$id'";
$delete_result=mysqli_query($conn,$delete);

header('location:Campaign.php');
?>
