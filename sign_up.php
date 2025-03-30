<?php
require 'petit_irutabyose_yoramu/petit_irutabyose_yoramu.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = validateInput($_POST['username']);
    $email = validateInput($_POST['email']);
    $password = validateInput($_POST['password']);
    $confirmPassword = validateInput($_POST['confirm_password']);

    $message = registerUser($username, $email, $password, $confirmPassword);
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-menu-100vh" dir="ltr" data-theme="theme-default">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Sign up</title>
    <meta name="description" content="">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/css/sign_in_up/boxicons.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/css/sign_in_up/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="./assets/css/sign_in_up/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="./assets/css/sign_in_up/dr.css">
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/css/sign_in_up/perfect-scrollbar.css">
    <link rel="stylesheet" href="./assets/css/sign_in_up/apex-charts.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/sign_in_up/jquery.dataTables.css">
    <link rel="stylesheet" href="./assets/css/sign_in_up/petit-irutabyose-yoramu.css">
    
    <!-- Helpers -->
    <script src="./assets/js/sign_in/helpers.js"></script>
    <script src="./assets/js/sign_in/config.js"></script>
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center" 
                     id="layout-navbar" 
                     style="background-color: #0d0b2e !important; box-shadow: none !important;">
                     <!-- <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"> -->
                         <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" id="toggleMobileMenu">
                            <i class="bx bx-menu bx-sm toggle-icon"></i>
                            <i class="fas fa-bars toggle-icon" style="display: none;"></i>
                            <span class="toggle-text" style="display: none;">Menu</span>
                        </a>
                    </div>
                    
                    <div class="mobile-menu" id="mobileMenu">
                        <a href="index" class="mobile-menu-item">Home</a>
                        <a href="sign_in" class="mobile-menu-item">Sign In</a>
                        <a href="sign_up" class="mobile-menu-item">Sign Up</a>
                        <a href="contactus" class="mobile-menu-item">Contact Us</a>
                    </div>
                </nav>

                <div class="content-wrapper">
                    <div class="container-fluid text-white pt-3 pb-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div>
                                    <h1 class="p-3">
                                        <i class="fa-solid fa-user-plus"></i> SIGN UP
                                    </h1>
                                </div>
                                <div>
                                    <div class="card card-bg p-5 m-2 bg-main">                                     
                                        <form method="POST">
                                            <div id="div_id_email" class="mb-3">
                                                <label for="email" class="form-label requiredField">
                                                    E-mail<span class="asteriskField">*</span>
                                                </label>
                                                <input type="email" 
                                                       id="email" 
                                                       name="email" 
                                                       placeholder="E-mail address" 
                                                       autocomplete="email" 
                                                       class="textinput form-control" 
                                                       required>
                                            </div>
                                            
                                            <div id="div_id_login" class="mb-3">
                                                <label for="username" class="form-label requiredField">
                                                    Username<span class="asteriskField">*</span>
                                                </label>
                                                <input type="text" 
                                                       id="username" 
                                                       name="username" 
                                                       placeholder="Username" 
                                                       autocomplete="username" 
                                                       class="textinput form-control"
                                                       maxlength="16"
                                                       required>
                                            </div>
                                            
                                            <div id="div_id_password" class="mb-3">
                                                <label for="id_password" class="form-label requiredField">
                                                    Password<span class="asteriskField">*</span>
                                                </label>
                                                <input type="password" 
                                                       id="id_password" 
                                                       name="password" 
                                                       placeholder="Password" 
                                                       autocomplete="new-password" 
                                                       class="passwordinput form-control"
                                                       maxlength="16"
                                                       required>
                                            </div>
                                            
                                            <div id="div_id_password_confirm" class="mb-3">
                                                <label for="id_password_confirm" class="form-label requiredField">
                                                    Password (again)<span class="asteriskField">*</span>
                                                </label>
                                                <input type="password" 
                                                       id="id_password_confirm" 
                                                       name="confirm_password" 
                                                       placeholder="Password (again)" 
                                                       autocomplete="new-password" 
                                                       class="passwordinput form-control"
                                                       maxlength="16"
                                                       required>
                                            </div>
                                            
                                            <button class="btn btn-md btn-primary text-white" type="submit" name="submit">
                                                Sign up
                                            </button>
                                            <br>
                                            <br>
                                            
                                            <div class="row login">
                                                <a class="mb-2 text-white" href="sign_in">Login</a>
                                            </div>
                                            
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content-backdrop fade"></div>
                    </div>
                </div>
            </div>
            
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="./assets/js/sign_in/jquery.js"></script>
    <script src="./assets/js/sign_in/popper.js"></script>
    <script src="./assets/js/sign_in/bootstrap.js"></script>
    <script src="./assets/js/sign_in/perfect-scrollbar.js"></script>
    <script src="./assets/js/sign_in/menu.js"></script>
    
    <!-- Vendors JS -->
    <script src="./assets/js/sign_in/apexcharts.js"></script>
    
    <!-- Main JS -->
    <script src="./assets/js/sign_in/main.js"></script>
    
    <!-- Page JS -->
    <script src="./assets/js/sign_in/dashboards-analytics.js"></script>
    <script src="./assets/js/sign_in/api.js" async defer></script>
    <script src="./assets/js/sign_in/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/js/sign_in/toast.js"></script>
    <script src="./assets/js/sign_in/jquery.dataTables.js"></script>
    
    <script src="./assets/js/sign_in/petit-irutabyose-yoramu.js"></script>
</body>
</html>