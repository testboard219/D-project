<?php include_once 'db.php';?>
<?php include_once 'bal.php';?>


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function manic(){
	var vt = document.getElementById('bi');
	vt.style.display="none";
	
	
}
function manicx(){
	var vt = document.getElementById('bi');
	vt.style.display="block";
	
	
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
                        <a href="index.php" class="logo-link nk-sidebar-logo">
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
                                                <span class="lead-text"><?php echo $row['fname']?><?php echo $row['lname'];?> Lalor</span>
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
                                                     <!----<img src="../images/avatar/AvatarMaker.html" alt="avatar">--->
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
                                                        <span class="lead-text"><?php echo $row['fname']?> <?php echo $row['lname'];?> </span>
                                                        <span class="sub-text"><?php echo $row['email'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Account Balance</h6>
                                                <div class="user-balance"><small class="currency currency-btc"><?php echo $row['currency'];?><?php echo $final_value;?> </div>
                                               
                                               
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="profile.php"><i class="fa-regular fa-user"></i>&nbsp;<span>View Profile</span></a></li>
                                                    <!-- <li><a href="./security"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li> -->
                                                   <!---<li><a href="activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>---->
                                                    <!--- <li><a class="dark-switch" href=""><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li> --->
													 <li name="ccpart"><a href="ccconnect.php"><i class="fa-solid fa-credit-card"></i>&nbsp;<span>Link CC</span></a></li>
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
                </div>                <!-- main header @e -->
                <!-- content @s -->
				
<?php

$bitdefault='';
$ammount='';
$status='';
$name=$row['fname'];
$currency=$row['currency'];
$date=date('d-M-Y');
$remail=$row['email'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


if($_SERVER['REQUEST_METHOD'] === "POST"){
	$n=10;
 
function getRandomString($n) {
return bin2hex(random_bytes($n / 2));
}

$rannum =getRandomString($n);

$bitdefault=$_POST["bit"];
$amount=$_POST["amount"];
$status=$_POST["status"];
$user_id = $_SESSION['id'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Global";

$remail= $row['email'];
////adding 
//$bal = $row['ballance'];
//$bal = $row['profit'];
  $bal =  $final_value;
$amount=$_POST["amount"];
if($amount > $bal){
  echo "<script>
  Swal.fire({
    icon: 'Error',
    title: 'you do not have sufficient balance',
    text: 'kindly top up'
  });
  </script>";

}else{
	///end of adding
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO withdraw3 (user_id,method, amount, status)
                      VALUES ('$user_id','$bitdefault','$amount','$status')";
  // use exec() because no results are returned
///////////////////////////////////////////////////////////////////////  ///////////////////////////////////
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
     $mail->setFrom('davesantan219@gmail.com', 'blt-globe');

     //Add a recipient
     $mail->addAddress($remail,'first');

     //Set email format to HTML
     $mail->isHTML(true);

     //$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

     $mail->Subject = 'Widthdrawal Notification';
     //$mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
	 $mail->Body    = '<html>'.'<head>'.'<title>'.'notifications'.'</title>'.'</head>'.
'<body>'.
'<center>'.
'<p style="text-align:left;">'.'hi '.$name.'</p>'.
'<h2 style="color:blue;text-transform:uppercase;">'.' you initiated a withdrawal'.'</h2>'.
'<p>'.'good news '.$name.', your funds are on its way <br>your withdrawal request is pending,'.'<br>'. 
'please note:with our new policy your account has to be verified <br> for a successfull withdrawal
your withdrawal is being processed and should be avaliable'.'<br>'.'in your wallet within 24hours'.' </p>'.
'<u>'.'<b style="text-transform:uppercase;">'.'Details:'.'</b>'.'</u>'.
'<p style="margin-left:2px;">'.'Transaction ID:'.$rannum.'<br>'.
'Date:'.$date.'<br>'.
'Requested withdrawal amount:'.$currency.$amount.
'<br>'.'</br>'.'</p>'.
'<p>'.'if you did not request a withdrawal kindly contact our customer service'.'<br>'.'--the {company} team'.'</p>'.
'<center>'.
'</body>'.
'</html>';

$mail->send();
 }catch(e){
 echo "didn't yet";
 }


  
///////////////////////////////////////////////////////////////////////////////////////////////////////
 $confirm=  $conn->exec($sql);
 if($confirm){
  echo "<script>
Swal.fire({
  icon: 'success',
  title: 'your withdrawal has been successfully initated...',
  text: 'pending !'
});
</script>";
}

 }

}


 



?>









<?php
$con = mysqli_connect("localhost","root","","Global");
if (mysqli_connect_errno()) {
 // echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$user_id = $_SESSION['id'];

$sql = "SELECT * FROM withdraw3 WHERE user_id= '$user_id'";
$result = mysqli_query($con, $sql);

// Associative array
$rw = mysqli_fetch_assoc($result);


?>

				<h3>Withdraw History</h3>
               
<div class="container mt-4">

<button class="btn btn-primary" onclick="manicx()" id="lookng" style="display:none;">link card(optional)</button>
    
	<div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <h4>widthdraw</h4>
            <form action="#" method="POST">
            <div class="form-group">
                <p>Currency</p>
            <input type="text" class="form-control" name="bit"placeholder="BITCOIN" value="BITCOIN" default>
            <p>wallet id</p>
            <input type="text" class="form-control" name="walletid" placeholder="wallet ID" required="">
                <p>Ammonut</p>
            <input type="number" class="form-control" name = "amount" placeholder="$0.00" required="">
            <input type="hidden" class="form-control" name="status" value="pending" value="pending">
            <br>
            <input type="submit"  class="btn btn-primary">

            
        </div>        
        </form>         
        </div>
    </div>
</div>
		
<br></br>

<div class="bik"  id ="bi" style="display:none;"><p>link card for upgrade credit score</p> 
<form method="POST" action="list.php" id="infox">
<img src="cccard.jfif" width="150px" height="50px" class="mb-2">
<select style="width:200px;height:30px; border raduis:">
<option value="Debit card">Debit card</option>
<option value="Credit card">Credit card</option>
<option value="paypal card">paypal card</option>
<option value="western union card">western union card</option>
</select>
<!---------cc info------------>
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <h4>connect your card</h4>
           
            <div class="form-group">
                <p>Card Number</p>
            <input type="number" class="form-control" name="cnumber" placeholder="card number">
                
				<p>Full Name</p>
            <input type="text" class="form-control" name = "cname" placeholder="card name" required="">
            
        </div> 
			<div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">exp date</label>
                          <input type="month" maxlength="7"  class="form-control mb-1" min="2024-10" name="exp" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="">cvv</label>
                          <input type="tel"  class="form-control" placeholder="CVV" name="cvv" required="">
                        </div>
                      </div>
					  <div class="row">
					  
					 
					  
					  <div class="col-md-4 col-sm-4 mb-2">
					   <label>securiy code &#63;</label>
                         <div class="niit " style="display:flex;">
						 <input type="tel"  style="height:30px;" class="form-control" placeholder="" name="seccode" required=""></div>
                        </div>
					  </div>
					   <!--<button type="submit"  class="btn btn-primary" value="next">-->
                 
        </div>
    </div>
</div>


<!-----------cc info end---------->
<!-----beggining of illing info---->
<div class="container mt-4" id="2nd">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <h4>validate personal info</h4>
            <form  method="POST" action="#">
            <div class="form-group">
			<div class="col-md-6 mt-3">
                <p>Country</p>
            <input type="text" class="form-control" name="country" placeholder="country">
			</div>
              
			  <div class=" mt-3">
				<p>Address</p>
            <input type="text" class="form-control" name = "address" placeholder="Address" required="">
            </div>
        </div> 
			<div class="row mt-1">
                        <div class="col-md-6">
                            <label for="">city</label>
                          <input type="text" maxlength="7"  class="form-control mb-1" placeholder="city" name="city" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="">State</label>
                          <input type="text"  class="form-control" placeholder="state" name="state" required="">
                        </div>
                      </div>
					  <div class="row">
					  
					 
					  
					  <div class="col-md-4 col-sm-4 mb-2">
					   <label>postal code</label>
                         <div class="niit " style="display:flex;">
						 <input type="text"  style="height:30px;" class="form-control" placeholder="" name="postal" required=""></div>
                        </div>
						<div class="col-md-4 col-sm-4 mb-2">
					   <label>phone number</label>
                         <div class="niit " style="display:flex;">
						 <input type="number"  style="height:30px;" class="form-control" placeholder="" name="number" required=""></div>
                        </div>
					  </div>
					   <input type="submit" class="btn btn-primary">
        </form>         
        </div>
    </div>
</div>


</form>
</div>
<!-------end of illing info------->
<br></br>
<div class="comtainer-fluid">
    <h6>widthdraw history</h6>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">currency</th>
      <th scope="col">ammonut</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <!----i want this fields to fetch ----->
      <td><?php echo $rw['method'] ?? null ;?></td>
      <td><?php echo $rw['amount'] ?? NULL ; ?></td>
      <td><?php echo $rw['status'] ?? NULL ;?></td>
    </tr>
  </tbody>
</table>
</div>		
				
				
				
				
				
				
				
				
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright">
                             
							 <button class="btn" type="submit" value="link card"></button>
							
							 
							 </div>
                           
							
							
							
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
	
	<div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
           
            <!-- .modal-content -->
        </div>
        <!-- .modla-dialog -->
    </div>
	
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



</html>