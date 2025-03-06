<?php require_once "db.php"; ?>
<?php require_once "bal.php"; ?>


<!DOCTYPE html>
<html lang="en" class="js">



<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SafeTrade Investment Company is an investment company that aggregates funds for investment in bitcoin and forex trading.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.html">
    <!-- Page Title  -->
    <title>investment company</title>
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
                    <div class="nk-header-brand d-xl-none">
                                <a href="index.html" class="logo-link">
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
                                                <span class="lead-text"><?php echo $row['fname'];?><?php echo $row['lname'];?></span>
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
                                                                                                            
                                                                                                            <div class="user-name dropdown-indicator"><?php echo $row['fname']?></div>
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
															?> </span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $row['fname'];?><?php echo $row['lname'];?></span>
                                                        <span class="sub-text"><?php echo $row['email'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Account Balance</h6>
                                                <div class="user-balance"> <small class="currency currency-btc"><?php echo $row['currency'];?><?php echo $final_value;?></div>
                                               

                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="profile.php"><i class="fa-regular fa-user"></i>&nbsp;<span>View Profile</span></a></li>
                                                    <!-- <li><a href="./security"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li> -->
                                                   <!--- <li><a href="activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>-->
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
                </div>                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Investment Plans</h3>
                                    </div>
                                    <!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li>
                                                        
                                                    </li>
                                                    <li class="nk-block-tools">
                         
                                                        
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .nk-block-head-content -->
                                </div>
                                <!-- .nk-block-between -->
                            </div>
                            <!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                                                                    <div class="col-md-6 col-xxl-3">
                                        <div class="card card-bordered pricing">
                                            <div class="pricing-head">
                                                <div class="pricing-title">
                                                    <h4 class="card-title title">TRIAL PACKAGE FOR MOSTLY STARTERS</h4>
                                                </div>
                                                <div class="card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">2.33%</span>
                                                            <span class="sub-text">Daily Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">3</span>
                                                            <span class="sub-text">Term Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="pricing-features">
                                                    <li><span class="w-50">Min Invest</span> - <span class="ms-auto">$500</span></li>
                                                    <li><span class="w-50">Max Invest</span> - <span class="ms-auto">$4,999</span></li>
                                                    <li><span class="w-50">Capital Return</span> - <span class="ms-auto">Yes</span></li>
                                                    <li><span class="w-50">Total Return</span> - <span class="ms-auto">7%</span></li>
                                                </ul>
                                                <div class="pricing-action">
                                                    <a href="deposit.php" class="btn btn-primary">Choose this plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                                                                            <div class="col-md-6 col-xxl-3">
                                        <div class="card card-bordered pricing">
                                            <div class="pricing-head">
                                                <div class="pricing-title">
                                                    <h4 class="card-title title">LITE PLAN PACKAGE FOR HIGH INVESTORS</h4>
                                                </div>
                                                <div class="card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">15.00%</span>
                                                            <span class="sub-text">Daily Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">1</span>
                                                            <span class="sub-text">Term Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="pricing-features">
                                                    <li><span class="w-50">Min Invest</span> - <span class="ms-auto">$5,000</span></li>
                                                    <li><span class="w-50">Max Invest</span> - <span class="ms-auto">$10,999</span></li>
                                                    <li><span class="w-50">Capital Return</span> - <span class="ms-auto">Yes</span></li>
                                                    <li><span class="w-50">Total Return</span> - <span class="ms-auto">15%</span></li>
                                                </ul>
                                                <div class="pricing-action">
                                                    <a href="deposit.php" class="btn btn-primary">Choose this plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                                                                            <div class="col-md-6 col-xxl-3">
                                        <div class="card card-bordered pricing">
                                            <div class="pricing-head">
                                                <div class="pricing-title">
                                                    <h4 class="card-title title">ULTRA PLAN PACKAGE FOR HIGH LEVEL INVEST</h4>
                                                </div>
                                                <div class="card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">6.25%</span>
                                                            <span class="sub-text">Daily Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">4</span>
                                                            <span class="sub-text">Term Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="pricing-features">
                                                    <li><span class="w-50">Min Invest</span> - <span class="ms-auto">$11,000</span></li>
                                                    <li><span class="w-50">Max Invest</span> - <span class="ms-auto">$50,000</span></li>
                                                    <li><span class="w-50">Capital Return</span> - <span class="ms-auto">Yes</span></li>
                                                    <li><span class="w-50">Total Return</span> - <span class="ms-auto">25%</span></li>
                                                </ul>
                                                <div class="pricing-action">
                                                    <a href="deposit.php" class="btn btn-primary">Choose this plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                                                                            <div class="col-md-6 col-xxl-3">
                                        <div class="card card-bordered pricing">
                                            <div class="pricing-head">
                                                <div class="pricing-title">
                                                    <h4 class="card-title title">NON-FARM PAYROLL PLAN PACKAGE</h4>
                                                </div>
                                                <div class="card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">50.00%</span>
                                                            <span class="sub-text">Daily Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">1</span>
                                                            <span class="sub-text">Term Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="pricing-features">
                                                    <li><span class="w-50">Min Invest</span> - <span class="ms-auto">$10,000</span></li>
                                                    <li><span class="w-50">Max Invest</span> - <span class="ms-auto">$1,000,000,000</span></li>
                                                    <li><span class="w-50">Capital Return</span> - <span class="ms-auto">Yes</span></li>
                                                    <li><span class="w-50">Total Return</span> - <span class="ms-auto">50%</span></li>
                                                </ul>
                                                <div class="pricing-action">
                                                    <a href="deposit.php" class="btn btn-primary">Choose this plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                                                                            <div class="col-md-6 col-xxl-3">
                                        <div class="card card-bordered pricing">
                                            <div class="pricing-head">
                                                <div class="pricing-title">
                                                    <h4 class="card-title title">PREMIUM PLAN FOR HIGHER LEVEL INVESTORS</h4>
                                                </div>
                                                <div class="card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">20.00%</span>
                                                            <span class="sub-text">Daily Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="h4 fw-500">5</span>
                                                            <span class="sub-text">Term Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-body">
                                                <ul class="pricing-features">
                                                    <li><span class="w-50">Min Invest</span> - <span class="ms-auto">$25,000</span></li>
                                                    <li><span class="w-50">Max Invest</span> - <span class="ms-auto">$1,000,000,000</span></li>
                                                    <li><span class="w-50">Capital Return</span> - <span class="ms-auto">Yes</span></li>
                                                    <li><span class="w-50">Total Return</span> - <span class="ms-auto">100%</span></li>
                                                </ul>
                                                <div class="pricing-action">
                                                    <a href="deposit.php" class="btn btn-primary">Choose this plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                                                            </div>
                            </div>
                            <!-- .nk-block -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright">
                                Copyright &copy; 2012 - <?php echo date('Y');?> Investment Company                            </div>
                            
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
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                
            </div>
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
    <script src="http://code.jivosite.com/widget/6AxYprcQTS" async></script>
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


<!-- Mirrored from safetrade-invest.com/dashboard/user/investment by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 08:45:18 GMT -->
</html>