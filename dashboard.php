<?php
session_start();

// Prevent caching to ensure that the user can't go back to the dashboard page after logout
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_SESSION['user'])) {
    echo '<script>location.href="./"</script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-template="vertical-menu-template-free">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    
    <title>Dashboard</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/css/sign_in_up/boxicons.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/css/dashboard/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="./assets/css/dashboard/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="./assets/css/dashboard/dr.css">
    <link rel="stylesheet" href="./assets/css/dashboard/perfect-scrollbar.css">
    <link rel="stylesheet" href="./assets/css/dashboard/apex-charts.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/dashboard/jquery.dataTables.css">
    <link rel="stylesheet" href="./assets/css/dashboard/toastr.min.css">
    <link rel="stylesheet" href="./assets/css/dashboard/petit-irutabyose-yoramu.css">
    
    <!-- Scripts -->
    <script src="./assets/js/dashboard/helpers.js"></script>
    <script src="./assets/js/dashboard/config.js"></script>
    <script src="./assets/js/dashboard/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>   
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme sidenav-bg-color" style="background-color: #07102e !important; color: white !important;" data-bg-class="bg-menu-theme">
                <ul class="menu-inner py-1 pt-5 ps">
                    <li class="menu-item py-1">
                        <a href="#" class="menu-link">
                            <div data-i18n="Basic">Logged in as </div>
                        </a>
                    </li>
                    <li class="menu-item py-1">
                        <a href="#" class="menu-link">
                            <div data-i18n="Basic">Balance: $0</div>
                        </a>
                    </li>
                    <li class="menu-item py-1">
                        <a href="add_balance" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-credit-card"></i>
                            <div data-i18n="Analytics">ADD BALANCE</div>
                        </a>
                    </li>
                    <li class="menu-item active">
                        <a href="dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item py-1">
                        <a href="bank_logs" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-bank"></i>
                            <div data-i18n="Basic">BANK LOGS</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">Woodforest Bank</div></a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">Wells Fargo Bank</div></a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">USAA Bank</div></a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">M&T Bank</div></a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">Bank of America (BOA)</div></a></li>
                        </ul>
                    </li>
                    <li class="menu-item py-1">
                        <a href="reviews_rating" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-bank"></i>
                            <div data-i18n="Basic">Reviews/Rating</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="transaction_history" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-history"></i>
                            <div data-i18n="Basic">PURCHASE HISTORY</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="request_refund" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-dollar-circle"></i>
                            <div data-i18n="Basic">REQUEST REFUND</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="sign_out" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-log-out"></i>
                            <div data-i18n="Basic">LOGOUT</div>
                        </a>
                    </li>
                </ul>
            </aside>
            
            <script src="./assets/js/dashboard/oh79biksoicotfer6fzldcijjumag4z0.js" async=""></script>

            <div class="layout-page">
                
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center" id="layout-navbar" style="background-color: #0d0b2e !important; box-shadow: none !important;">
                    
                    <!-- Menu Toggle for small screens -->
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
            
                    <!-- Navbar Content -->
                    <div class="row">
                        <div class="h4 display-5">
                            <!-- Space for additional content if needed -->
                        </div>
                    </div>
            
                    <!-- Welcome Message -->
                    <div class="d-xl-block text-white text-center w-100">
                        <div class="row mx-auto">
                            <div class="col-12">
                                <div class="h4 display-5 h4-display">
                                    WELCOME, <?php echo $_SESSION['user']['u_username']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-fluid text-white">
        <div class="container">
            <br>

            <!-- Store Info Card -->
            <div class="card">
                <div class="card-header" style="background-color: rgb(21, 21, 66); color: white;">
                    <span class="glyphicon glyphicon-calendar" style="color: #000;"></span>
                    <p>
                        Our store embodies a self-written engine, anti-DDoS system, and a bulletproof server. Logs are re-checked and updated after each occurrence of issuing bulk purchases. Please do not hesitate to contact the support team if you encounter any issue.
                    </p>
                    <p>
                        Please take the time to read through our policies.
                    </p>
                    <p>
                        The store disclaims any responsibility for any additional actions you take with the purchased log in your possession.
                    </p>
                    <p>
                        Funds sent to the store will be allocated to the user after two confirmations.
                    </p>
                    <p>
                        Get in touch with the SUPPORT TEAM, in case of any queries or inquiries.
                    </p>
                    <p>
                        A token would be issued to any account after three instant purchases or a deposit of more than $1000.
                    </p>
                    <p>
                        Accounts that have been inactive for six months will be deactivated.
                    </p>
                </div>
            </div>
            <br>

            <!-- FAQs Card -->
            <div class="card">
                <div class="card-note mt-4" style="background-color: #232138; color: white;">
                    <div class="card-header">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <h6 class="mb-0 H6-filter-by-text" data-filter-by="text" style="color: white;">
                                    <p>FAQs</p>

                                    <p>
                                        Q1: How do I add balance?
                                    </p>
                                    <p>
                                        A: To add balance, simply navigate to the sidebar and click the "Add Balance” button. From there, you can pay with bitcoins and follow the prompts to complete the transaction.
                                    </p>

                                    <p>
                                        Q2: Can I buy without adding balance?
                                    </p>
                                    <p>
                                        A: Yes, you can still make purchases without adding balance to your account. Simply choose your desired product or service, proceed to checkout, and follow the prompts to complete the transaction using your preferred payment method.
                                    </p>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- Recently Added Section -->
            <div class="row">
                <div class="text-white">
                    <p>Recently added</p>
                </div>
            </div>

        <!-- Woodforest Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/woodforest.jpg') no-repeat center center; background-size: cover;">
            <p class=" "> Woodforest </p>
            <h5> Added 9 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">Woodforest(Full Info) </a>
            </p>       
        </div>

        <!-- Wells Fargo Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/wlls.jpg') no-repeat center center; background-size: cover;">
            <p style="color: #000;"> Wells Fargo </p>
            <h5> Added 12 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">Wells Fargo(Full Info) </a>
            </p>            
        </div>

        <!-- USAA Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/usaa2.png') no-repeat center center; background-size: cover;">
            <p class=" "> USAA Bank </p>
            <h5> Added 5 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">USAA Bank (Full Info) </a>
            </p>            
        </div>

        <!-- TD Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/td.jpg') no-repeat center center; background-size: cover;">
            <p class=" "> TD Bank </p>
            <h5> Added 10 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">TD Bank (Full Info) </a>
            </p>            
        </div>

        <!-- PayPal -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/ly.png') no-repeat center center; background-size: cover;  background-color: #fff;">
            <p class=" "> PayPal </p>
            <h5> Added 9 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">PayPal (Full Info) </a>
            </p>            
        </div>

        <!-- M&T Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/mt.png') no-repeat center center; background-size: cover;">
            <p class=" "> M&amp;T Bank </p>
            <h5> Added 1 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">M&amp;T Bank (Full Info) </a>
            </p>            
        </div>

        <!-- Huntington Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/hunt.png') no-repeat center center; background-size: cover;">
            <p class=" "> Huntington Bank </p>
            <h5> Added 3 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">Huntington(Full Info) </a>
            </p>            
        </div>

        <!-- DCU Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/dcu.jpg') no-repeat center center; background-size: cover;  background-color: #fff;">
            <p class=" "> DCU Bank </p>
            <h5> Added 3 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">DCU Bank (Full Info) </a>
            </p>            
        </div>

        <!-- Citizens Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/citizen.png') no-repeat center center; background-size: cover;">
            <p class=" "> Citizens Bank </p>
            <h5> Added 4 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">Citizens Bank (Full Info) </a>
            </p>            
        </div>

        <!-- Citi Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/citi2.jpg') no-repeat center center; background-size: cover;">
            <p class=" "> Citi Bank </p>
            <h5> Added 2 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">Citi Bank (Full Info) </a>
            </p>            
        </div>

        <!-- Chime Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/chime.png') no-repeat center center; background-size: cover;">
            <p class=" "> Chime Bank </p>
            <h5> Added 9 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">Chime Bank (Full Info) </a>
            </p>            
        </div>

        <!-- Chase Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/chase.png') no-repeat center center; background-size: cover; background-color: #fff;">
            <p class=" "> Chase Bank </p>
            <h5> Added 4 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">Chase Bank (Full Info) </a>
            </p>            
        </div>

        <!-- Cash App Logs -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/cashp.jpg') no-repeat center center; background-size: cover;">
            <p class=" "> Cash App Logs </p>
            <h5> Added 6 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">Cash App Logs (Full Info) </a>
            </p>            
        </div>

        <!-- Bank of America (BOA) -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/boa2.png') no-repeat center center; background-size: cover;">
            <p class=" "> Bank of America  </p>
            <h5> Added 10 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">BOA (Full Info) </a>
            </p>            
        </div>

        <!-- AFCU Bank -->
        <div class="custom-card" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('assets/images/banklogs/afcu.png') no-repeat center center; background-size: cover;">
            <p class=" "> AFCU Bank </p>
            <h5> Added 1 logs in this category </h5>
            <small>Mar. 27, 2025</small>
            <p>
                <a href="#">AFCU Bank (Full Info) </a>
            </p>           
        </div>

</div>
</div>
                        </div>
                    </div>
                    <!-- Footer -->

                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <div id="toast-container" class="toast-top-left">
            <div class="toast toast-success bg-success" aria-live="polite" style="background-color: black;">
                <div class="toast-title"> </div>
                <div class="toast-message"> </div>
            </div>
        </div>
    </div>
    <!-- / Layout wrapper -->
     
    
  <!-- Core JS -->
   <script src="./assets/js/dashboard/petit-irutabyose-yoramu.js"></script>
    <script src="./assets/js/dashboard/jquery.js"></script>
    <script src="./assets/js/dashboard/popper.js"></script>
    <script src="./assets/js/dashboard/bootstrap.js"></script>
    <script src="./assets/js/dashboard/perfect-scrollbar.js"></script>
    <script src="./assets/js/dashboard/menu.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="./assets/js/dashboard/apexcharts.js"></script>
    <!-- Main JS -->
    <script src="./assets/js/dashboard/main.js"></script>
    <!-- Page JS -->
    <script src="./assets/js/dashboard/dashboards-analytics.js"></script>
    <script src="./assets/js/dashboard/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/js/dashboard/toast.js"></script>
    <script src="./assets/js/dashboard/jquery.dataTables.js"></script>
</body>
</html>