<?php 
include "../db_connect/connection.php";
$id=$_GET['id'];
$delete = "Delete  from team_category where id = '$id'";
$delete_sql = mysqli_query($conn,$delete);
if($delete_sql){
    ?>
    <script>alert("Delete successfully");
         window.location.assign('addteamcategory.php');
    </script>
   
    <?php
}
else{
    ?>
    <script>alert("Failed to Delete");
         window.location.assign('addteamcategory.php');
    </script>
    <?php 
}

?>