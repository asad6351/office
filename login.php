 <?php session_start();
  
if(isset($_SESSION['email'])=='true') {
    echo "<script> window.location = 'index.php';</script>";
}else{
    //echo "<script> window.location = 'login.php';</script>";
}

 ?>  
 <!DOCTYPE html>
<html lang="en">

 <head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/lnr-icon.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<title>Login Page</title>

 <?php @include('db.php');?>

<?php @include('loader.php');?>

 
<?php
 
    
    if(isset($_POST['submit'])){
    
    $email=$_POST['email']; // username value get by form using $_POST
    $password=$_POST['password']; // password value get by form using $_POST
    $query= "SELECT * FROM admin WHERE email='admin@gmail.com' AND password='samsam'";

    $result = mysqli_query($db,$query);     
    $count=mysqli_num_rows($result);

 if($count==1){

 $_SESSION['email'] = $email;
     echo "<script> window.location = 'index.php';</script>";
}else{
    echo "<script> window.location = 'login.php';</script>";

}


}
   
 

 
   

?>
<div class="inner-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox shadow-sm grow">
<div class="login-left">
<img class="img-fluid" src="assets/img/logo.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>

<form action="" method="post">
	<div class="form-group">
		<input class="form-control" type="text" name="email" placeholder="Email" required>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" name="password" placeholder="Password" required>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-theme button-1 text-white ctm-border-radius btn-block" name="submit" value="Login">
 	</div>
</form>

<!-- <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>

<div class="social-login">
<span>Login with</span>
<a href="javascript:void(0)" class="facebook"><i class="fa fa-facebook"></i></a><a href="javascript:void(0)" class="google"><i class="fa fa-google"></i></a>
</div>

<div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div> -->
</div>
</div>
</div>
</div>
</div>
</div>


<?php @include('footer.php');?>