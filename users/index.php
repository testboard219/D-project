<?php 
require_once "db.php";
require_once 'bal.php';

?>

<!DOCTYPE html>
<html lang="en" class="js">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Investment Company is an investment company that aggregates funds for investment in bitcoin and forex trading.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.html">
    <!-- Page Title  -->
    <title> Investment Company</title>
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
                                               <!---- <span>S</span>-->
											   <?php $fname = $row['fname']; 
														      $char =substr($fname,0,1);
															  echo $char;
														?>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text"><?php echo $row['fname'];?> &nbsp; </p>  <?php echo $row['lname'];?></p></span>
                                                <span class="sub-text"><?php echo $row['email'];?></p></span>
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
                                <a href="index.php" class="logo-link">
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
                                                <!-- <div class="user-status user-status-verified">$pro verify</div>-->
                                                  <div class="user-name dropdown-indicator"><?php echo $row['fname'];?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <!--<span>S</span>-->
														<?php $fname = $row['fname']; 
														      $char =substr($fname,0,1);
															  echo $char;
														?>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $row['fname'];?></p> <?php echo $row['lname'];?></p></span>
                                                        <span class="sub-text"><?php echo $row['email'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Account Balance</h6>
                                          <div class="user-balance"><small class="currency currency-btc"><?php //echo $row['currency'];?></small><?php //echo $row['profit'];?>
												 <p><?php echo $row['currency'];?><?php echo $final_value;?></p>
												</div>
                                               
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="profile.php"><i class="fa-regular fa-user"></i><span>  &nbsp;View Profile</span></a></li>
                                                    <!-- <li><a href="./security"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li> -->
                                                    
                                                    <!-- <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li> -->
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#" class="logout"><i class="fa-solid fa-right-from-bracket"></i><span> &nbsp;Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                <!-- main header @e -->


      <section style="position:relative;margin-top:10%;">
	  <div style="display:block;" class="currencies">
	  			<!-----start-------->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Welcome!</span>
                                </div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal" style="display: flex;"><?php echo $row['fname'];?></p> &nbsp; <?php echo $row['lname'];?></p></h2>
                                        <div class="nk-block-des">
                                            <p>At a glance summary of your account.</p>
                                        </div>
                                    </div>
                                    <!-- .top head content -->
                                    <!-----<div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li><a href="deposit.php" class="btn btn-primary"><span>Deposit</span> </a></li>
                                            <li><a href="transactions.php" class="btn btn-danger btn-danger"><span>Withdraw</span></a></li>
                                         <li class="opt-menu-md dropdown">
                                                <a href="#" class="btn btn-white btn-light btn-icon" data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                                <!-- <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-coin-alt"></em><span>Curreny Settings</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                    </ul>
                                                </div> 
                                            </li>
                                        </ul>
                                    </div>----> 
                                    <!-- .nk-block-head-content -->
                                </div>
                                <!-- .nk-block-between -->
                            </div>
                            <!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="col-lg-5 col-xl-4">
                                        <div class="nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-head-content">
                                                    <h5 class="nk-block-title title">Overview</h5>
                                                </div>
                                            </div>
                                            <!-- .nk-block-head -->
                                            <div class="nk-block">
                                                <div class="card card-bordered text-light is-dark h-100">
                                                    <div class="card-inner">
                                                        <div class="nk-wg7">
                                                            <div class="nk-wg7-stats">
                                                                <div class="nk-wg7-title">Available balance in <?php echo $row['currency'];?></div>
                                                                <div class="number-lg amount" id="accbalance"></div>
                                                            </div>
                                                            <div class="nk-wg7-stats-group">
                                                                <div class="nk-wg7-stats w-50">
                                                                    <div class="nk-wg7-title"><b>profits</b></div>
                                                                    <div class="number">
                                                                        <?php echo $row['currency'];?><?php echo $final_value;?>                                                  </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-wg7-foot">
                                                                <span class="nk-wg7-note">Login at <span>
                                                                    <?php $t = date('d-M-Y');
																	echo $t;?>                                                               </span></span>
                                                            </div>
                                                        </div>
                                                        <!-- .nk-wg7 -->
                                                    </div>
                                                    <!-- .card-inner -->
                                                </div>
                                                <!-- .card -->
                                            </div>
                                            <!-- .nk-block -->
                                        </div>
                                        <!-- .nk-block -->
                                    </div>
                                    <!-- .col -->
                                    <div class="col-lg-7 col-xl-8">
                                        <div class="nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-between-md g-2">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="nk-block-title title">Digital Balances</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .nk-block-head -->
                                            <div class="row g-2">
                                                <div class="col-sm-4">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="#">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <i class="fa-solid fa-money-bill"></i>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Deposits</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div class="amount"><span id="depbalance"> <?php echo $row['currency'];?><?php echo $row['ballance'];?></span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .col -->
                                                <div class="col-sm-4">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="#">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <i class="fa-solid fa-money-bill"></i>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Withdraws</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div class="amount"><span id="withbalance"><?php echo $row['currency'];?><?php echo $row['withdraw'];?></span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .col -->
                                                <div class="col-sm-4">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="#">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <i class="fa-solid fa-money-bill"></i>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Earnings</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div class="amount"><span id="earnbalance"><?php echo $row['currency'];?><?php echo $row['bonus'];?></span></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .col -->
                                                <!-- .col -->
                                                <div class="col-sm-4">
                                                    <div class="card bg-light">
                                                        <div class="nk-wgw sm">
                                                            <a class="nk-wgw-inner" href="#">
                                                                <div class="nk-wgw-name">
                                                                    <div class="nk-wgw-icon">
                                                                        <em class="icon ni ni-money"></em>
                                                                    </div>
                                                                    <h5 class="nk-wgw-title title">Referral Bonus</h5>
                                                                </div>
                                                                <div class="nk-wgw-balance">
                                                                    <div class="amount"><?php echo $row['currency'];?><span id="refbalance"><?php echo $row['rbonus'];?>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .col -->
                                            </div>
                                            <!-- .row -->
                                        </div>
                                        <!-- .nk-block -->
                                    </div>
                                    <!-- .col -->
                                </div>
                                <!-- .row -->
                            </div>
							
							<!-----Ends------>
	 </div>
	 
	 
	 <div class="container-fluid">
<gecko-coin-compare-chart-widget locale="en" dark-mode="true" transparent-background="true" outlined="true" coin-ids="" initial-currency="usd"></gecko-coin-compare-chart-widget>
</div>
	 
	 <div class="container-flud mt-4">
    <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3">
        <div class="card">
            <div class="card-body">
            <div class="card-title"><h5 style="color:purple">Active plan</h5></div>
            <h5><?php echo $row['plan'];?></h5>
                <br>
                <button class="btn btn-primary" name="" onclick="admin()"><a href="deposit.php" style="text-decoration:none;color:white;">buy a plan</a></button>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title" style="font-weight: bold;">watch list</div>
        <!-----    <div id="crypto-widget-CoinList" data-design="modern" data-coin-ids="1,166,136,1120,1694,20,29,440"></div>
            --->
            <script src="https://widgets.coingecko.com/coingecko-coin-market-ticker-list-widget.js"></script>
<coingecko-coin-market-ticker-list-widget  coin-id="bitcoin" currency="usd" locale="en"></coingecko-coin-market-ticker-list-widget>
        
        </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-5">
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/key-events/" rel="noopener" target="_blank"><span class="blue-text">Daily news roundup</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "all_symbols",
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "regular",
  "width": 400,
  "height": 800,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
    </div>
    </div>
</div>


	 
<div class="container-fluid">
<iframe src="https://bit2me.com/widget/chart/v1?currency=BTC&fiat=EUR" style="display:block;width:100%;height:400px;margin:0 auto;" frameborder="0"></iframe>
</div>	



	</section>	
	
                  
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
	 <script src="https://crypto.com/price/static/widget/index.js"></script>
	  <script src="https://widgets.coingecko.com/coingecko-coin-compare-chart-widget.js"></script>
	  <script src="https://widgets.coingecko.com/gecko-coin-compare-chart-widget.js"></script>
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