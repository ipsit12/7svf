<?php
session_start();
include "db_connect/connection.php";

?>
<?php
if(isset($_SESSION['user_id'])){
    $IDs=$_SESSION['user_id'];
    }
    // echo $IDs;
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<!--<div class="d-flex justify-content-end social_icon">-->
				<!--	<span><i class="fab fa-facebook-square"></i></span>-->
				<!--	<span><i class="fab fa-google-plus-square"></i></span>-->
				<!--	<span><i class="fab fa-twitter-square"></i></span>-->
				<!--</div>-->
			</div>
			<div class="card-body">
				<form method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name="login_submit" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<!--<div class="d-flex justify-content-center links">-->
				<!--	Don't have an account?<a href="#">Sign Up</a>-->
				<!--</div>-->
				<!--<div class="d-flex justify-content-center">-->
				<!--	<a href="#">Forgot your password?</a>-->
				<!--</div>-->
			</div>
		</div>
	</div>
</div>
</body>
</html>



<?php
if(isset($_POST['login_submit'])){
//   echo "4564654654654654";
//   exit();

  $userid=$_POST['username'];
  $pass=$_POST['password'];
  // echo "SELECT * FROM employee WHERE emp_mobile='$userid' AND emp_password='$pass'";
  // exit();
  $login_qry="SELECT * FROM signin WHERE reg_mail='$userid' AND reg_pass='$pass'";
  $run=mysqli_query($conn,$login_qry);
  $row=mysqli_num_rows($run);
//   echo $row;
//   exit();
  if ($row>0){
    $_SESSION['user_id']=$userid;
    
    // header("location:index.php");
    ?>
    <script>
window.open("https://srustiacademy.ac.in/shrusti_admin/index.php","_self");
    </script>
    <?php
  }else {
    // header("location:loginpage.php?error=Not register...!!");
    echo  "<script> alert('Not register');</script>";
  }
}
?>