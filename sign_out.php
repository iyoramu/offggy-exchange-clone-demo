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
    
    <title>REQUEST A REFUND</title>
    
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
    <link rel="stylesheet" href="./assets/css/contactus/petit-irutabyose-yoramu.css">
    
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
                            <div data-i18n="Basic">Logged in as petit</div>
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
                    <li class="menu-item">
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
                    <li class="menu-item active">
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
                                <i class="fa-solid fa-right-from-bracket"></i> LOG OUT
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
<div class="content-wrapper">
    


<div class="container-fluid text-white pt-3 pb-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div>
                                    <div class="card card-bg p-5 m-2 bg-main">
                                        <p>Are you sure you want to log out?</p>
                                        <a href="sohoka" class="btn btn-md btn-primary text-white mt-3">Log Out<a>

                                        <br>


                                        <br>
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