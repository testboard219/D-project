
<?php
session_start();
$_SESSION["login"] = true;
?>
<?php // require_once "../preload.php"; ?>
<?php


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=Global','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);



$error=[];
$fname='';
$lname='';
$email='';
$number='';
$password1='';
$password2='';
$country='';

$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
//$verification_date= NULL;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $fname=$_POST['fname'];
 $lname=$_POST['lname'];
  $email=$_POST['email'];
  $number=$_POST['number'];
   $password1=$_POST['password1'];
   $password2=$_POST['password2'];
   $country=$_POST['country'];
  $date= date('d-m-y H:i:s'); 
$ip = $_SERVER['REMOTE_ADDR'];
$ballance  = $_POST['ballance'];
$profit  = $_POST['profit'];
$bonus  = $_POST['bonus'];
$plan  = $_POST['plan'];
$withdraw  = $_POST['withdraw'];
$rbonus  = $_POST['rbonus'];
$currency  = $_POST['currency'];
//4/3/2024  newly addedd
$valuei  = $_POST['valuei'];  
$valued  = $_POST['valued'];  
//end of newly added
//20/10/2024  newly addedd
$verify = $_POST['verify'];  
$ccview = $_POST['ccview'];  
$image='';
//end of newly added
 if(!$fname){
  $error[]='first name fild is empty';
}
if(!$lname){
  $error[]='</br>last name field is empty';
}
if(!$email){
  $error[]='</br> please enter A valid Email ';
}
if(!$number){
  $error[]='</br>last name field is empty';
}
if($password1 !== $password2){
  $error[]='</br>password do not match';
}
if(empty($error)){
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
     $mail->Username = 'frommail.com';

     //SMTP password
     $mail->Password = '';

     //Enable TLS encryption;
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

     //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
     $mail->Port = 587;

     //Recipients
     $mail->setFrom(''@gmail.com', 'infinite-elite');

     //Add a recipient
     $mail->addAddress($email, $fname);

     //Set email format to HTML
     $mail->isHTML(true);

     //$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

     $mail->Subject = 'Email verification';
     $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';

     $mail->send();



//script 
$id = $_SESSION['id'];
//$id='234';
$statement=$pdo->prepare("INSERT INTO globaltable (image,email,fname,lname,number,country,date,ip,ballance,profit,bonus,id,plan,withdraw,rbonus,currency,password1,verification_code,verification_date,valuei,valued,verify,ccview) VALUES (:image,:email,:fname,:lname,:number,:country,:date,:ip,:ballance,:profit,:bonus,:id,:plan,:withdraw,:rbonus,:currency,:password1,:verification_code,:verification_date,:valuei,:valued,:verify,:ccview)");
$statement->bindValue(':email',$email);
$statement->bindValue(':fname',$fname);
$statement->bindValue(':lname',$lname);
$statement->bindValue(':number',$number);
$statement->bindValue(':country',$country);
$statement->bindValue(':date',$date); 
$statement->bindValue(':ip',$ip); 
$statement->bindValue(':ballance',$ballance); 
$statement->bindValue(':profit',$profit);
$statement->bindValue(':bonus',$bonus);  
$statement->bindValue(':id',$id); 
$statement->bindValue(':plan',$plan); 
$statement->bindValue(':withdraw',$withdraw); 
$statement->bindValue(':rbonus',$rbonus);
$statement->bindValue(':currency',$currency); 
$statement->bindValue(':password1',$password1); 
$statement->bindValue(':verification_code',$verification_code); 
$statement->bindValue('verification_date',NULL); 
//newly addedd 3/4/2024

$statement->bindValue('valuei',$valuei); 
$statement->bindValue('valued',$valued);
//end of newly addedd
$statement->bindValue('verify',$verify); 
$statement->bindValue('ccview',$ccview);

//////image 
$statement->bindValue('image',$image);
//////image
$statement->execute();

header("Location: verification.php?email=" . $email);

} catch (Exception $e) {
 // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  //header("Location:verification.php?email=" . $email);
 
 
 //echo "didn't go true try again";
 header("location:wrong.php");
}

//header('location:../users/index.php');
//header('location:verification.php');
//header("Location:verification.php?email=" . $email);

}
}
?>



<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
<style>
    .text-danger{
        color: red !important;
    }
</style>
 
</head> 
<body>
	<div class="register-background" style="background-color:#000; background-image:url('assets/img/log-reg.jpg')">
		<div class="register-page">
			<div class="main-register-contain">
				<div class="register-form">
					<form action="" method="post">
						<input type="hidden" name="csrf_token" value="e25e4b83fca79666a906e70cf5e212fd">
							
							<div class="register_input">
							<input type="text" class="register-form-border" name='fname' placeholder="FirstName*" required>
							<span class="register-right-icon"><i class="icon icon_profile"></i></span>
						</div>
												<div class="register_input">
							<input type="text" class="register-form-border" name='lname' placeholder="LastName*" required>
							<span class="register-right-icon"><i class="icon icon_profile"></i></span>
						</div>
												<div class="register_input">
							<input type="text" class="register-form-border" name='email' placeholder="Enter Email*" required>
							<span class="register-right-icon"><i class="icon icon_mail"></i></span>
						</div>
												<div class="register_input">
							<input type="text" class="register-form-border" name="number" placeholder="Phone Number*" required>
							<span class="register-right-icon"><i class="icon icon_phone"></i></span>
						</div>
												<div class="register_input">
							<select class="register-form-border" name='country' placeholder="Country" required style="width:100%; height:40px">
								<option selected="selected" disabled>--Select Country--</option>
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
                                                <option value="Zimbabwe">Zimbabwe</option>							</select>
						                      </div>
								<div class="register_input">
							<input type="text" class="register-form-border" name='referrer' placeholder="Your Referee code(optional)" value="" >
							<span class="register-right-icon"><i class="icon icon_profile"></i></span>
						</div>
						
						<div class="register_input" style="margin-bottom: 2px !important;">
							<input type="password" class="register-form-border" name='password1' placeholder="Password*" required>
							<span class="register-right-icon"><i class="icon icon_key"></i></span>
						</div>
						<small style="color: #77c170;">Password must contain atleast 8 character with special characters.</small>
												<div class="register_input" style="margin-bottom: 2px !important;">
							<input type="password" class="register-form-border" name='password2' placeholder="Confirm Password*" required>
							<span class="register-right-icon"><i class="icon icon_key"></i></span>
						</div>
						     <div class="checkbox checkbox-register-v1">
							<input value="agree" name="terms" type="checkbox" required>
							<label for="checkbox-squared1"></label>
							<span>I agree to the <a style="color:#fff; text-decoration:underline" href="../terms.html">Terms &amp; Conditions</a>.</span>
						</div>
						<!-------------------->
					<div class="c" style="display: none;">
                    <input type="hidden" class="form-control" name="ballance" value="0"><br>
                    <input type="hidden" class="form-control" name="profit" value="0"><br>
                    <input type="hidden" class="form-control" name="bonus" value="0"><br>
<!---newly addeded 3/4/2024-->  <input type="hidden" class="form-control" name="valuei" value="0.5"><br>
<!---newly addeded 3/4/2024-->  <input type="hidden" class="form-control" name="valued" value="<?php echo $time =date('d/m/Y');?>"><br>
                   
                    <input type="hidden" class="form-control" name="plan" value="NONE"><br>
                    <input type="hidden" class="form-control" name="withdraw" value="0"><br>
					 <input type="hidden" class="form-control" name="rbonus" value="0"><br>
					 <input type="hidden" class="form-control" name="currency" value="$">
					 <!----------------------------------------->
					 <input type="hidden" class="form-control" name="verify" value="not verified"><br>
					 <input type="hidden" class="form-control" name="ccview" value="NO">
						</div>
						<!------------------->
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary" value="Submit">
						</div>
							<div class="goto-register">
							<div class="text-xs-center">
								Already a member ? <a href="signin.php">Click to Login</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
 
<p><br/></p>

<script src="assets/global/js/ajax.js" type="text/javascript"></script>
<script src="assets/global/js/main.js" type="text/javascript"></script>



<!-- Mirrored from ness-lite.com/signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 12:06:51 GMT -->
</html>