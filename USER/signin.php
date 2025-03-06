<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ness-lite.com/signin by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 12:06:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="description" content="ness-lite Investment Company User Trading Dashboard">
<meta name="viewport" content="width=device-width">
<title>ness-lite Investment Company | User Dashboard</title>
 <!-- favicon -->
 <link rel="shortcut icon" href="favicon.png">
<link rel="stylesheet" href="assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="assets/icons_fonts/elegant_font/elegant.min.css"/>
<link id="site-color" rel="stylesheet" href="assets/layouts/layout-left-menu/css/color/light/color-default.min.css"/>
<link rel="stylesheet" href="assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
 
 
<link rel="stylesheet" href="assets/global/plugins/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="assets/global/plugins/rickshaw/rickshaw.min.css"/>
<link rel="stylesheet" href="assets/global/plugins/flatpickr/dist/flatpickr.min.css"/>

<link rel="stylesheet" href="assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css"/>
 
<link rel="stylesheet" href="assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" href="assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"/>
<link rel="stylesheet" href="assets/global/plugins/datatables-scroller/css/scroller.bootstrap4.min.css"/>

<link rel="stylesheet" href="assets/global/plugins/dropify/dist/css/dropify.min.css"/>
<link rel="stylesheet" href="assets/global/css/components.min.css"/>
 
 
<link rel="stylesheet" href="assets/layouts/layout-left-menu/css/layout.min.css"/>
<link rel="stylesheet" href="assets/pages/login/login-v1/css/login.css"/>
<link rel="stylesheet" href="assets/pages/register/register-v1/css/register-v1.css"/>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .text-danger{
        color: red !important;
    }
</style>
</head> 
<body>
	<div class="login-background" style="background-color:#000; background-image:url('assets/img/log-reg.jpg')">
		<div class="login-page">
			<div class="main-login-contain">
				<!--div class="login-circul text-xs-center">
					<i class="icon_lock_alt login-icon-circul"></i>
				</div-->
				<div class="login-form">
					<form method="POST" action="" accept-charset="utf-8">
					<?php

                        $host="localhost";
                        $user="root";
                        $password="";
                        $database="Global";
                        $conn=mysqli_connect($host,$user,$password,$database);
                        if(!$conn){
                            echo "not connected";
                        }else{
                            echo "";
                        }
                            
                        if($_SERVER['REQUEST_METHOD'] === 'POST'){
                                                        
                            if(isset($_POST["submit"])){
                                 $email= $_POST["email"];
                                 $password1=$_POST["password1"];
                                 
                            }

                                $result = mysqli_query($conn, "SELECT * FROM globaltable WHERE email = '$email'");
                                $row = mysqli_fetch_assoc($result);
                                if(mysqli_num_rows($result) > 0){
                                if($password1 == $row["password1"]){
                                
                                $_SESSION["login"] = true;
                                $_SESSION["id"] = $row["id"];
                                
                                
                                header('location:../users/index.php');

                                
                                }else{

                                echo "<p style='color:red;'>incorrect credentials </p>";
                                
                                }
                                
                            
                                
                                }
                            }
                            




                            
                            
                            
                        

                        ?>
						<input type="hidden" name="csrf_token" value="8ca65a1bbdc0283e153e61c24494a45a">                                                    
						<div class="login_input">
							<input type="email" class="login-form-border" name="email" placeholder="Enter Email">
							<span class="login-right-icon"><i class="icon icon_mail"></i></span>
						</div>
												<div class="login_input">
							<input type="password" class="login-form-border" name="password1" placeholder="Password">
							<span class="login-right-icon"><i class="icon icon_key"></i></span>
						</div>
												<div class="checkbox checkbox-login-v1">
							<input value="yes" id="checkbox-squared1" name="keep" class="keep" type="checkbox">
							<label for="checkbox-squared1"></label>
							<span>Remember me</span>
						</div>
						<!-- <p style="color:red"></p> -->
												<button type="submit" class="btn btn-primary btn-login" name="submit">Submit</button>
						<div class="goto-login">
							<div class="sign-up-login">
								<i class="arrow_back"></i>
								Go to <a href="signup.php">Sign up</a>
							</div>
							<div class="forgot-password-login">
								<a href="passwordrecovery.php">
								Forgot password?
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	 
	</div>
</body>

<script src="assets/global/js/ajax.js" type="text/javascript"></script>
<script src="assets/global/js/main.js" type="text/javascript"></script>



<!-- Mirrored from ness-lite.com/signin by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 12:06:52 GMT -->
</html>