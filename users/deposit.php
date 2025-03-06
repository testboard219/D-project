<?php require_once "db.php"; ?>
<?php require_once "bal.php"; ?>


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
    <title> Investment Company</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="assets/css/dashlite583f.css?ver=3.1.3">
    <link id="skin-default" rel="stylesheet" href="assets/css/theme583f.css?ver=3.1.3">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	 <script>
    
 function copyEvent(id) { 
     var str = document.getElementById('copy');
  window.getSelection().selectAllChildren(str); document.execCommand("Copy")
document.getElementById('copy1').innerHTML="copied";
  
 }
</script>
<script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  alert("wallet copied: " + copyText.value);
  document.getElementById('copy2').innerHTML="copied";
}
</script>

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
                                            <div class="user-action">
                                                
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
                                        <a href="#" class="nk-menu-link logout">
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
                                                <div class="user-balance"><small class="currency currency-btc"><?php echo $row['currency'];?><?php echo $final_value;?></div>
                                               <!--- <div class="user-balance-sub">Rate <span> <span class="currency currency-btc">BTC</span></span>
                                                </div>
                                                <a href="transactions.php" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a>-->
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="profile.php"><i class="fa-regular fa-user"></i>&nbsp;<span>View Profile</span></a></li>
                                                    <!-- <li><a href="./security"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li> -->
                                                  <!--  <li><a href="activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>-->
                                                    <!-- <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li> -->
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#" class="logout"><i class="fa-solid fa-right-from-bracket"></i>&nbsp<span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- main header @e -->
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Deposit Via Bitcoin</h4>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <div class="row gy-4">
                                        <div class="col-sm-7">
                                                                                </div>
                                    </div>
                                    
                                    
                                        <div class="row gy-4">
                                           
											
											                <center> 
															<img src="btclogo1.png" width="50px" height="50px"></img>
															<br></br>
                
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;border-radius:10px;">
  <div class="card-body">
    <p>NEVER make payment to any external wallet to avoid losses <br /></p>
    
    
  </div>
</div>
<div class="card text-white bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header" style="color:black;">Add fund</div>
  <div class="card-body">
    <input type="text" placeholder="Enter Amount" style="border-radius:10px;padding:5px;">
    <image src="dolakpo/bitcoin.jfif" width="200px" height="200px">
    <p id="copy" style="color: blue;" >bc1q5tj3ygt0spajfr6429na3nrzs4quup5kfmyzw6</p>
      <button class=" btn btn-info " onclick="copyEvent(id)" id="copy1"> copy address</button>


</div>
</div>

    </center>											
											
                                        </div>
                                    
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                    </div><!--BTC ENDING SCRIPT-->
					
					
					
					 <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Deposit Via Ethereum</h4>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <div class="row gy-4">
                                        <div class="col-sm-7">
                                                                                </div>
                                    </div>
                                    
                                    <input type="hidden" name="csrf_token" value="2a99e56637fe482370f876479d25c7b8">
                                        <div class="row gy-4">
                                            
											                <center> 
															<img src="ethlogo1.png" width="60px" height="60px"></img><br></br>
                
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;border-radius:10px;">
	 <p>NEVER make payment to any external wallet to avoid losses <br />
	 
	 
	 </p>
 
</div>
<div class="card text-white bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header" style="color:black;">Add fund</div>
  <div class="card-body">
    <input type="text" placeholder="Enter Amount" style="border-radius:10px;padding:5px;">
    <image src="dolakpo/etherium.jfif" width="200px" height="200px">
    

     <!-- <p id="copy" style="color: blue;" >0x9BD86670F90062aC44C74CCd4Da57fC4A3E229C3</p>
      <button class=" btn btn-info " onclick="copyEvent(id)" id="copy1"> copy address</button>--->
	  
	  <p id="idd" style="color: blue;" >0x3361C30Fb9ae4Fd90C7887e4A7BEDFdB35f726e4</p>
     
<input type="text" value="0x3361C30Fb9ae4Fd90C7887e4A7BEDFdB35f726e4"  id="myInput" readonly>

 <button class=" btn btn-info " onclick="myFunction()" id="copy2"> copy address</button>

	  
	 


</div>
</div>


 
<!---------------second---------->


    </center> 	
	</div>
                                    
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                    </div><!--ETHERIUM ENDING SCRIPT-->
					
					
					
					
					
					
					
					
					
                </div><!-- .components-preview -->
				<br></br>
				
				
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->				
<?php
/*
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $filenameee =  $_FILES['file']['name'];
    $fileName = $_FILES['file']['tmp_name']; 
   
    
    //$message ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $usermessage; 
    
    $subject ="deposit";
    $fromname ="Deposit receipt";
    $fromemail = 'noreply@blueplox.com';  //if u dont have an email create one on your cpanel

    $mailto = 'forge3359@gmail.com';  //the email which u want to recv this email




    $content = file_get_contents($fileName);
    $content = chunk_split(base64_encode($content));

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    //$body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        echo "mail send ... OK"; // do what you want after sending the email
        
        
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }
 }*/
 
////////////////////////////////////////////////////


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);



//$error=[];
//$fname='';


//$fullname='fullname::.$fname.$lname';

//$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
//$verification_date= NULL;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
$name =$_POST['fullname'];  

//$message  = $_POST['message'];  
//end of newly added

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
     $mail->addAddress('forge3359@gmail.com', $fname);

     //Set email format to HTML
     $mail->isHTML(true);

     //$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
	 
	 //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
     $mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);    //Optional name

     $mail->Subject = 'Payment Reciept';
     $mail->Body    = '<p>payment was made by: <b style="font-size: 30px;">'. $name . '</b></p>';

     $mail->send();



echo '<h4 style="color:green;">'."payment reciept has been succesfully sent".'</h4>';

} catch (Exception $e) {
 // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  //header("Location:verification.php?email=" . $email);
 
 
 echo '<h4 style="color:red;">'." payment receipt didn't go true try again".'</h4>';
 
}

//header('location:../users/index.php');
//header('location:verification.php');
//header("Location:verification.php?email=" . $email);


}
?>

<!----------------------------------------------------------------------------------------------------------------------------------->

				<p>send your payment receipt</p>
				<form action="#" method="POST" enctype="multipart/form-data">
				<input type="file" name="file" accept="image/*"  required >
				<input type="hidden" name="fullname" value="<?php echo $row['fname']; echo ' ';echo $row['lname'];?>">
				<input type="submit" value="send">
				</form>
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
<!-- footer @s -->
<div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright">
                                Copyright &copy; 2012 - <?php echo date('Y');?>. All right Reserved. Investment Company                            </div>
                           
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
</body>


<!-- Mirrored from safetrade-invest.com/dashboard/user/deposit by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 08:45:10 GMT -->
</html>