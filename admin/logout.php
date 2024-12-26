<?php
session_start();

 include "../db_connect/connection.php";
 session_unset();
 session_destroy();
 header("location:../loginform/index.php");
 ?>
