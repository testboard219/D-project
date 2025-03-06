<?php
session_start();
?>
<?php

 
 if (isset($_POST["verify_email"]))
 {
     $email = $_POST["email"];
     $verification_code = $_POST["verification_code"];

     // connect with database
    // $conn = mysqli_connect("localhost", "otptest", "root", "");
     $servername = "localhost";
     $password="";
     $username="root";
     
     $database="global";
     
     $conn =mysqli_connect($servername,$username,$password,$database);

     // mark email as verified
     $sql = "UPDATE globaltable SET verification_date = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
     $result  = mysqli_query($conn, $sql);

     if (mysqli_affected_rows($conn) == 0)
     {
         echo "invalid code";
     }else{

    header("location:../USER/activated.php");
  
   //header("location:../users/index.php");
   
     exit();
    }
 }

?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ness-lite.com/passwordrecovery by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 12:07:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="description" content=" User Trading Dashboard">
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
				<div class="login-circul text-xs-center">
					<i class="icon_lock_alt login-icon-circul"></i>
				</div>
				<div class="login-form">
					<form method="POST" action="">
					<input type="hidden" name="csrf_token" value="de95165c517b87a26d3e3de0cfddf381">
						<div class="login_input">
							<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
							<input type="text" class="login-form-border" name="verification_code" placeholder="Enter code">
							<span class="login-right-icon"><i class="icon icon_mail"></i></span>
						</div>
												<button type="submit" class="btn btn-primary btn-login" name="verify_email">validate</button>
						
						<div class="goto-login">
							<div class="sign-up-login">
								<i class="arrow_back"></i>
								Go to <a href="signin.html">Login</a>
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

<script src="http://code.jivosite.com/widget/6AxYprcQTS" async></script>


</html>