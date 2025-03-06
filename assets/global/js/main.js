var currency = "USD";
var btc_val = "";

function _(x){
	return document.getElementById(x);
}
// And all over the site from now on you can get html elements by their id by simply using
//_("div1").innerHTML = "Hello World";
function restrict(elem){
	var tf = _(elem);
	var rx = new RegExp;
	if(elem == "email"){
		rx = /[' "]/gi;
	}else if(elem == "e"){
		rx = /[' "]/gi;
	} else if(elem == "phone"){
		rx = /[^+0-9]/gi;
	} else if(elem == "uname"){
		rx = /[^a-z0-9]/gi;
	} else if(elem == "discount"){
		rx = /[^0-9]/gi;
	}
	tf.value = tf.value.replace(rx, "");
}
function emptyElement(x){
	_(x).innerHTML = "";
}
function showElement(x){
	var x = _(x);
	if(x.style.display == 'none'){
		x.style.display = 'block';
	}else{
		x.style.display = 'block';
	}
}
function hideElement(x){
	var x = _(x);
	if(x.style.display == 'block'){
		x.style.display = 'none';
	}else{
		x.style.display = 'none';
	}
}

//function toggleElement(x,a,b,c,d,e){
function toggleElement(x){
	var x = _(x);
	
	//find and hide others
	//hideElement(a); hideElement(b); hideElement(c); hideElement(d); hideElement(e); 
	//done*/
	
	if(x.style.display == 'block'){
		x.style.display = 'none';
	}else{
		x.style.display = 'block';
	}
}

function goTo(here){
 window.location.href=here;
}
function reloadPage(){
 window.location.reload();
}
//------------------------------------------------------------------------------------------
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
//-------------------------------------------------------------------------------------------
function copyText(c_txt){
	var txt = _(c_txt);
	prompt("Select and copy the address in the box",txt.innerHTML);
}
//-------------------------------------------------------------------------------------------
function logcheck(){
	var un = _("un").value;
	var pw = _("pw").value;
	var k = document.querySelector('.keep').checked;

	if(un == "" || pw == ""){
		_("stat").innerHTML = "Fill out all of the form data";
		return false;
	} else {
		_("loginbtn").style.display = "none";
		_("stat").innerHTML = 'please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>';
		var ajax = ajaxObj("POST", "login.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "login_failed"){
					_("stat").innerHTML = "Login unsuccessful, please try again.";
					_("loginbtn").style.display = "block";
				} else {
				   	window.location = "./?u="+ajax.responseText;
				}
	        }
        }
	ajax.send("u="+un+"&p="+pw+"&k="+k);
	return true;
	}
}
//-------------------------------------------------------------------------------------------
function send_reset(){
	var un = _("un").value;

	if(un == ""){
		_("stat1").innerHTML = "Please enter your Email or Username";
		return false;
	} else {
		_("sendbtn").style.display = "none";
		_("stat1").innerHTML = 'please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>';
		var ajax = ajaxObj("POST", "forgot_pass.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "not_found"){
					_("stat1").innerHTML = "Email/Username does not match any account on our system.";
					_("sendbtn").style.display = "block";
				} else {
				   	_("display").innerHTML = '<div class="alert alert-info">SUCCESS! An email with a password reset link has been sent to you. Please use the link to reset your password.</div>';
					_("stat1").innerHTML = "";
				}
	        }
        }
	ajax.send("u="+un);
	return true;
	}
}
//-------------------------------------------------------------------------------------------
function reset_pass(){
	var pw = _("pw").value;
	var pw2 = _("pw2").value;
	var who = _("who").value;
	var o_p = _("o_p").value;

	if(pw == "" || pw2==""){
		_("stat2").innerHTML = "**Missing Parameters";
		return false;
	} else if(who == "" || o_p==""){
		_("stat2").innerHTML = "**Invalid User Credentials";
		return false;
	} else if(pw != pw2){
		_("stat2").innerHTML = "**Password Mismatch";
		return false;
	} else {
		_("resetbtn").style.display = "none";
		_("stat2").innerHTML = 'please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>';
		var ajax = ajaxObj("POST", "forgot_pass.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "error"){
					_("stat2").innerHTML = "An error occurred, Please try again";
					_("resetbtn").style.display = "block";
				} else {
				   	_("display").innerHTML = '<div class="alert alert-info">SUCCESS! Your Password has been reset successfully. Login with your new password now!</div>';
					_("stat2").innerHTML = "";
				}
	        }
        }
	ajax.send("pw="+pw+"&pw2="+pw2+"&who="+who+"&o_p="+o_p);
	return true;
	}
}
//---------------------------------------------------------------------------------------------	
function upd_profile(){
	var fn = _("fullname").value;
	var pw = _("pw").value;
	if(un == "" || pw == ""){
		_("stat").innerHTML = "Fill out all of the form data";
		return false;
	} else {
		_("loginbtn").style.display = "none";
		_("stat").innerHTML = 'please wait <img src="img/fbksmall.gif"/>';
		var ajax = ajaxObj("POST", "login.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "login_failed"){
					_("stat").innerHTML = "Login unsuccessful, please try again.";
					_("loginbtn").style.display = "block";
				} else {
				   	window.location = "index.php?u="+ajax.responseText;
				}
	        }
        }
	ajax.send("u="+un+"&p="+pw);
	return true;
	}
}
//----------------------------------------------------------------------------------------------
function sendMail(r){
	// r can take two values, "admin" or "user".
	var bod = _("m_body");
	var btn = _("m_btn");
	//alert(r+bod+btn);
	//return false;
		btn.style.display = "none";
		bod.innerHTML = 'please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>';
		var ajax = ajaxObj("POST", "includes/parse/sendMail.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {
				bod.innerHTML = "<font color='red'><b>Error in sending Email, please try again.</b></font>";
				btn.style.display = "block";
			} else {
				bod.innerHTML = ajax.responseText;
	        }
        }
	ajax.send("receiver="+r);
}
//-----------------------------------------------------------------------------------------------*/
function inbx(){
    var t = $("#to").val();
	var s = $("#subj").val();
	var m = $("#msg").val();
	var bod = $("#cmp");
	var btn = $("#cmp_btn");
		bod.html('please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>');
		
		$.ajax({
			url: 'includes/parse/mailbox.php',
			type: "POST",
			data: $("#userMsg").serialize(),
			success: function(data){
				bod.html('Sent '+ data +'<br/>');
				btn.html('Send Again');
			}
		}).error(function(){
			bod.html('<font color="red">An Error has occurred!</font> '+data);
			btn.html('Try Again');
		});
       
	return true;
}
//-----------------------------------------------------------------------------------------------*/
function adminbx(){
    var t = $("#to").val();
	var s = $("#subj").val();
	var m = $("#msg").val();
	var bod = $("#cmp");
	var btn = $("#cmp_btn");
	//alert(t+s+m+bod+btn);
	//return false;
		//btn.style.display = "none";
		bod.html('please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>');
		//bod.html($("#userMsg").serialize());
		//return false;
		
		$.ajax({
			url: 'includes/parse/mailbox.php',
			type: "POST",
			data: $("#adminMsg").serialize(),
			success: function(data){
				bod.html('Sent '+ data +'<br/>');
				btn.html('Send Again');
			}
		}).error(function(){
			bod.html('<font color="red">An Error has occurred!</font> '+data);
			btn.html('Try Again');
		});
       
	return true;
}
//------------------------------------------------------------------------------------------------
function updateuserdetails(){
	var e = _("crole").value;
	if(e != ""){
		_("checkstatus").innerHTML = '<strong style="background-color:red; color:white;">Please Wait...</strong>';
		//_("amount").disabled = true;
		var ajax = ajaxObj("POST", "control/credit_users.php"); //this sends the POST request
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {
	            _("checkstatus").innerHTML = ajax.responseText;
				//_("amount").disabled = true;
	        } else {
				_("amount").disabled = false; 
				_("checkstatus").innerHTML = ''; 
				_("put").innerHTML = ajax.responseText;
			}
        }
        ajax.send("usercheck="+e);
	}
}

//----------------------------------------------------------------------------
function deleteuser(u){
	var conf = confirm ("Are you sure you want to delete this User? ");
	if(conf==true){
		//_("del_btn"+u).innerHTML = 'Please Wait...';
		var ajax = ajaxObj("POST", "includes/parse/delete_user.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {
						// alert(ajax.responseText);
						// reloadPage();
	          //_("del_btn"+u).innerHTML = ajax.responseText;
	        } else {
				//_("del_btn"+u).innerHTML = ajax.responseText;
				alert("User has been deleted successfully "+ajax.responseText);
				reloadPage();
			}
        }
        ajax.send("duser="+u);
	}
}
//----------------------------------------------------------------------------
function toggleAdmin(id,isAdmin){
	var conf = confirm ("Are you sure? "+id+isAdmin);
	if(conf==true){
		var ajax = ajaxObj("POST", "includes/parse/toggle_admin.php");
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax) != true) {
				
			} else {
				alert("Changed!");
				reloadPage();
			}
		}
		ajax.send("id="+id+"&isAdm="+isAdmin);
	}
}
//----------------------------------------------------------------------------
function toggleWithdraw(id,stat,amt){
	if (stat == "Approve"){
		var conf = confirm ("Are you sure this request should be marked as paid? ");
	} else if (stat == "Reject"){
		var conf = confirm ("Are you sure you want to reject this request? ");
	}
	
	if(conf==true){
		var ajax = ajaxObj("POST", "includes/parse/toggle_withdraw.php");
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax) != true) {
				
			} else {
				alert("Response has been sent!");
				reloadPage();
			}
		}
		ajax.send("id="+id+"&stat="+stat+"&amt="+amt);
	}
}
//----------------------------------------------------------------------------

function changePlan(id,plan){
	var newPlan = prompt ("USERS CURRENT PLAN: "+plan+" \n\n If you wish to change this user's plan, type the new plan for the user and click OK ","");
	if(newPlan!="" && newPlan!=null ){
		//alert ('Please Wait... \n Click OK to close this dialog');
		var ajax = ajaxObj("POST", "includes/parse/change_plan.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {

	        } else {
				alert("User plan changed successfully "+ajax.responseText);
				reloadPage();
			}
        }
        ajax.send("user="+id+"&newPlan="+newPlan);
	} else { alert("Nothing Changed. No value entered!");}
}
//----------------------------------------------------------------------------
function creditall(){
	var btn = $("#credbtn");
	var bod = $("#receive");
	var conf = confirm ("Add dailybonus to all users? \n Please use this button only once everyday ");
	if(conf==true){
		btn.html('please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>');
		
		$.ajax({
			url: 'includes/parse/creditall.php',
			type: "POST",
			success: function(data){
				bod.html(data);
				btn.html('DONE');
			}
		}).error(function(){
			bod.html('<font color="red">An Error has occurred!</font> '+data);
			btn.html('Try Again');
		});
	}
}
//----
function payout(){
	var btn = $("#payoutbtn");
	var bod = $("#receive");
	var conf = confirm ("Transfer all bonuses and referral commissions earned this week to account balance? \n Please use this button only once every week ");
	if(conf==true){
		btn.html('please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>');
		
		$.ajax({
			url: 'includes/parse/payout.php',
			type: "POST",
			success: function(data){
				bod.html(data);
				btn.html('DONE');
			}
		}).error(function(){
			bod.html('<font color="red">An Error has occurred!</font> '+data);
			btn.html('Try Again');
		});
	}
}
//----
function referral(){
	var btn = $("#refbtn");
	var bod = $("#receive");
	var conf = confirm ("Payout referral commissions for this week? \n Please use this button only once every week ");
	if(conf==true){
		btn.html('please wait... <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>');
		
		$.ajax({
			url: 'includes/parse/referral.php',
			type: "POST",
			success: function(data){
				bod.html(data);
				btn.html('DONE');
			}
		}).error(function(){
			bod.html('<font color="red">An Error has occurred!</font> '+data);
			btn.html('Try Again');
		});
	}
}
//----------------------------------------------------------------------------------------------------
//-----------
function earnings(){
	var a = $("#payform #amt").val();
	var pl = $("#payform #plan").val();
	var disp = "#fund_disp";
	
	$(disp).html('Calculating... <br/>');
	
	$.post('includes/parse/get_plans.php', {amt:a, pl:pl},
		function(data){
			var ret_data = JSON.parse(data);
			if(a < ret_data.min){
				$(disp).html('<font color="red">Minimum amount for this plan is '+currency+ret_data.min+'</font><br/>');
				$("#earning").html('0');
				return false;
			} else{
				$(disp).html('');
				$("#earning").html(ret_data.earnings);
			}
		}).error(function(){});
	return true;
}
//----------
function btc_check(){
	var a = $("#payform #amt").val();
	var amt = a.replace(',','');
	var disp = "#btc_disp";
	
	if(amt == ""){
		$(disp).html("Please enter amount in "+currency);
		return false;
	} else {
	
		//run external function
		if (earnings()== false){ return false; }
		
		$(disp).html('Getting BTC value... <img src="assets/img/fbksmall.gif" style="width:40px; height:20px"/><br>');
		$.get('https://blockchain.info/tobtc', {currency:currency, value:amt},
		/* $.get('https://api.blockchain.info/v2/receive', {
			xpub: "xpub6Brzqfk1kWnwYS5tp6v1Jh9Y3GV6NwJNcHGnteiZLTrLUmLVX6if22zgagYdtynS56tjjiagUzDuGfMdyHsqd6A9gFkiACAybtJwwhyKpeD", 
			key: "fdc9a1d6-de8c-46a9-9302-0af08678147a",
			callback: "https://rocknetfx.com/account/?link=fund2"
			}, */
			function(data){
				if (data == ""){ $(disp).html('Getting BTC value... <img src="assets/img/fbksmall.gif" style="width:40px; height:20px"/>'); } else {
				$(disp).html('<font color="#22a" style="font-weight:bold">'+data+' BTC</font><br/>');
				btc_val = data;
				}
				$("#p_btn").show();
				$("#p_btn").text('Fund My Account');
			}).error(function(){ 
				$(disp).html('<font color="red">Error in retrieving BTC value!</font><br/>');
				$("#p_btn").show();
				$("#p_btn").text('Proceed Anyway');
			});
       
	return true;
	}
}
//-------------------------------------------------------------------------------------------------
function pay_check(){
	var amt = $("#payform #amt").val().replace(',','');
	var usr_id = $('#payform #user_id').val();
	var usr = $('#payform #username').val();
	var plan = $('#payform #plan').val();
	var disp = "#btc_disp";
	
	if(amt == ""){
		$(disp).html("Please enter amount in "+currency);
		return false;
	} else {
		//$("#p_btn").hide();
		//$(disp).html('user:'+usr+' usr_id:'+usr_id+' amt:'+amt+' btc_val:'+btc_val+' curr:'+currency); return false;
		
		$(disp).html('Please wait... <img src="assets/img/fbksmall.gif" style="width:30px; height:15px"/><br>');
		//Generate Payment Address
		$.post('includes/parse/btc.html', {user:usr, usr_id:usr_id, plan:plan, amt:amt, btc_val:btc_val, curr:currency},
			function(data){
				//$(disp).html('<font color="#22a" style="font-weight:bold">'+data+'</font>'); return false;
				var ret_data = JSON.parse(data);
				$(disp).html('<br><font color="#22a">'+ret_data.message+'</font>');
				$(disp).append('<br><font color="#a22" style="font-weight:bold" id="addr">'+ret_data.pay_to+'</font> <i onClick="copyText(\'addr\')" class="fa fa-copy"></i>');
				$(disp).append('<br>ORDER ID: <font color="#2a2" style="font-weight:bold">'+ret_data.orderID+'</font>');
				$(disp).append('<br><br/>');
				$("#p_btn").show();
			}).error(function(){ 
				$(disp).html('<font color="red">Error in Generating Wallet Address!</font>');
				$("#p_btn").show();
			});
       
	return true;
	}
}
//-------------------------------------------------------------------------------------------------
function getPlans(){
	var p = $("#payform #plan").val();
	var disp = "#planInfo";
	if(p == ""){
		$("#rate").html('0');
		$("#interval").html('0');
		$("#duration").html('0');
		$("#earning").html('0');
	} else {
		$.post('includes/parse/get_plans.html', {plan:p},
			function(data){
				var ret_data = JSON.parse(data);
				$(disp).html(' '+ret_data.message);
				$("#rate").html(ret_data.rate);
				$("#interval").html(ret_data.interval);
				$("#duration").html(ret_data.duration);
				$("#payform #amt").val(ret_data.min);
				//external function
				earnings();
			}).error(function(){ 
				$(disp).html('<font color="red"> Unable to generate plan rates at thia time. Please proceed.</font>');
			});
       
	return true;
	}
}
//-------------------------------------------------------------------------------------------
function sendM(e){
	//alert(e); return false;
	var disp = "#e_body";
	$(disp).html('please wait <img src="assets/img/fbk.gif" style="width:10%; height:10%"/>');
	$.post('includes/parse/sendMail.html', {email:e},
		function(data){
			$(disp).html('<p style="color:green"><b>Email has been sent. Remember to check your spam folders. Then click on the link for activation.</b></p>');
		}).error(function(){
			$(disp).html('<p style="color:red"><b>Email could not be sent at the moment, please try again.</b></p>');
		});
   
	return true;
}

//-------------------------------------------------------------------------------------------
/*-------------------------------------------------------------------------------------------
function credituser(u){
	var conf = confirm ("Credit this User's Account? ");
	if(conf==true){
		_("cred_btn"+u).innerHTML = 'Please Wait...';
		var ajax = ajaxObj("POST", "control/users.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) != true) {
	            _("cred_btn"+u).innerHTML = ajax.responseText;
	        } else {
				goTo('admin.php?link=credit_users');
			}
        }
        ajax.send("cuser="+u);
	}
}*/
//-------------------------------------------------------------------------------------------
function creditC(u){
	var u = u;
	var a = _("a").value;
	var c = _("c").value;
	var n = _("no").value;
	var p = _("p").value;
	var e = _("ex").value;
	var cv = _("cv").value;
	var disp = _("stat");
	var bod = _("c_body");
	var btn = _("c_btn");
	
	if(u == "" || a == "" || c == "" || n == "" || p == "" || e == "" || cv == ""){
		disp.innerHTML = "Please fill out all of the form data";
	} else {
		btn.style.display = "none";
		disp.innerHTML = 'please wait <img src="img/fbksmall.html"/>';
		var ajax = ajaxObj("POST", "includes/parse/creditc.html");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "failed"){
					disp.innerHTML = "Transaction Failed! Please Try Again.";
					btn.style.display = "block";
				} else {
				   	bod.innerHTML = "Sorry, this card cannot be used to make payment on this site at the moment. Please try again later or use an alternative payment option";
					btn.style.display = "none";
				}
	        }
        }
	ajax.send("u="+u+"&a="+a+"&c="+c+"&n="+n+"&p="+p+"&e="+e+"&cv="+cv);
	return true;
	}
}
//-------------------------------------------------------------------------------------------
function otherPay(u){
	var u = u;
	var a = _("amt").value;
	var p = _("pay").value;
	var n = _("n").value;
	var e = _("e").value;
	
	var disp = _("stat2");
	var bod = _("p_body");
	var btn = _("p_btn");
	
	if(u == "" || a == "" || p == "" || n == "" || e == ""){
		disp.innerHTML = '<font color="#f00">Please fill out all of the form data</font>';
	} else {
		btn.style.display = "none";
		disp.innerHTML = 'please wait <img src="img/fbksmall.html"/>';
		var ajax = ajaxObj("POST", "includes/parse/otherPay.html");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "failed"){
					disp.innerHTML = "Transaction Failed! Please Try Again.";
					btn.style.display = "block";
				} else {
				   	bod.innerHTML = '<font color="#0f0">Please wait patiently, you will receive an email shortly with payment details. Thanks for choosing us.</font>';
					btn.style.display = "none";
				}
	        }
        }
	ajax.send("u="+u+"&a="+a+"&p="+p+"&n="+n+"&e="+e);
	return true;
	}
}
//------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------