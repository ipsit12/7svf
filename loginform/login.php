<?php
session_start();
include "../db_connect/connection.php";

if(isset($_POST['login_submit'])){
    
  $userid=$_POST['user_name'];
  $pass=$_POST['pass_word'];
  
//   echo  $userid  .  $pass;
  
  $login_qry="SELECT * FROM signin WHERE user_name='$userid' AND pass_word='$pass'";
  $run=mysqli_query($conn,$login_qry);
  $row=mysqli_num_rows($run);
  
  if($row>0)
  {
      $_SESSION['user_id']=$userid;
    header("location:../admin/index.php");
  }

else {
    // header("location:loginpage.php?error=Not register...!!");
    echo  "
    <script> 
    alert('Not register');
     window.open('https://nifdglobalbhubaneswar.com/admin/signin.php')
    </script>";
  }
 
 
}
?>