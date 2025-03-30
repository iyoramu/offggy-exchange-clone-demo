<?php
session_start();
// Redirect if already authenticated
if (isset($_SESSION['user'])) {
    header('Location: dashboard');
    exit;
}

require 'petit_irutabyose_yoramu/petit_irutabyose_yoramu.php';

$message = "";

// Function to generate a random reset code
function generateResetCode() {
    return bin2hex(random_bytes(16));  // Generates a unique 32-character hex string
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = validateInput($_POST['email']);
    $user = getUserByEmail($email);

    if ($user) {
        // Generate reset code and expiration time (1 hour from now)
        $resetCode = generateResetCode();
        $expirationTime = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Insert reset code and expiration time into password_resets table
        $stmt = $pdo->prepare("INSERT INTO password_resets (user_id, reset_code, expiration_time) VALUES (?, ?, ?)");
        $stmt->execute([$user['user_id'], $resetCode, $expirationTime]);        
        
        // Send the password reset email
        sendPasswordResetEmail($email, $resetCode);

        $message = "A password reset link has been sent to your email. Please check your inbox (and your spam or junk folder) to reset your password. The link will expire in 1 hour.";
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Password Reset</title>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '$message',
                    confirmButtonText: 'Okay',
                    allowOutsideClick: false // Disables click outside to close the modal
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'sign_in'; // Redirect to login page after reset request
                    }
                });
            </script>
        </body>
        </html>";
    } else {
        $message = "No account found with that email.";
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Password Reset</title>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '$message',
                    confirmButtonText: 'Try Again'
                });
            </script>
        </body>
        </html>";
    }
}
?>


<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-menu-100vh" dir="ltr" data-theme="theme-default">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Password Reset</title>
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
                                    <div class="card card-bg p-5 m-2 bg-main">
                                        <h2>Forgot your password? </h2>
                                        <form method="post" action="forgot_password">                                       
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
                                            
                                            <button class="btn btn-md btn-primary text-white" type="submit" name="submit">
                                                Reset Password
                                            </button>
                                            <br>
                                            <br>
                                            
                                            <div class="row login">
                                                <a class="mb-2 text-white" href="sign_up">Sign Up</a>
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