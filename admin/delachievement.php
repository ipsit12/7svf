<?php 
include "../db_connect/connection.php";
$id=$_GET['id'];
$delete = "Delete  from achievement where id = '$id'";
$delete_sql = mysqli_query($conn,$delete);
if($delete_sql){
    ?>
    <script>alert("Delete successfully");
         window.location.assign('achievment.php');
    </script>
   
    <?php
}
else{
    ?>
    <script>alert("Failed to Delete");
         window.location.assign('achievment.php');
    </script>
    <?php 
}

?>