<?php 
session_start();
require 'petit_irutabyose_yoramu/petit_irutabyose_yoramu.php';

// Redirect if already authenticated
if (isset($_SESSION['user'])) {
    header('Location: dashboard');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptcha_secret = 'ENTER_YOUR_SECRET_KEY_HERE'; // Get this from Google reCAPTCHA setup
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Verify the user's response with Google's reCAPTCHA API
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    $responseKeys = json_decode($response, true);

    if(intval($responseKeys["success"]) !== 1) {
        // Verification failed
        echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>reCAPTCHA Validation</title>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'reCAPTCHA Required',
            text: 'Please complete the reCAPTCHA challenge to proceed.',
            confirmButtonText: 'Complete reCAPTCHA',
            allowOutsideClick: false,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = 'sign_in';
            }
        });
    </script>
</body>
</html>";
    }
    else {
    $username = validateInput($_POST['username']);
    $email = validateInput($_POST['email']);
    $password = validateInput($_POST['password']);

    $user = getUserByEmailUsername($email, $username); // Function to get user by email or username

    if ($user && password_verify($password, $user['user_password'])) {
        if ($user['user_is_verified'] == 0) {
            $message = "Please verify your email before logging in.";
            echo "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Login</title>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        icon: 'info',
                        title: 'Email Verification Pending',
                        text: '$message',
                        confirmButtonText: 'Got it'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = 'sign_in';
                        }
                    });
                </script>
            </body>
            </html>";
        } else {
            $_SESSION['user'] = [
                'u_id' => $user['user_id'],
                'u_username' => $user['user_username'],
                'u_email' => $user['user_email'],
            ];
            echo '<script>location.href="dashboard"</script>';
        }
    } else {
        $message = "Invalid username, email, or password.";
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Login</title>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: '$message',
                    confirmButtonText: 'Try Again'
                });
            </script>
        </body>
        </html>";
    }
}
}

// ########################################################################################################################

// Sign In With Google AccountAccount

// Require necessary files securely
require 'google-api/vendor/autoload.php';
$client = new Google_Client();
$client->setClientId('ENTER_YOUR_CLIENT_ID_HERE.apps.googleusercontent.com');
$client->setClientSecret('ENTER_YOUR_CLIENT_SECRET_KEY_HERE');
$client->setRedirectUri('http://localhost/offggy.com/sign_in');
$client->addScope("email");
$client->addScope("profile");

if(isset($_GET['code'])):
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token["error"])) {
        $client->setAccessToken($token['access_token']);
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        // Sanitize and validate user inputs
        $id = filter_var($google_account_info->id, FILTER_SANITIZE_STRING);
        $firstName = filter_var(trim($google_account_info->given_name), FILTER_SANITIZE_STRING);
        $lastName = filter_var(trim($google_account_info->family_name), FILTER_SANITIZE_STRING);
        $email = filter_var($google_account_info->email, FILTER_VALIDATE_EMAIL);
        $profile_pic = filter_var($google_account_info->picture, FILTER_SANITIZE_URL);
        $verifiedEmail = filter_var($google_account_info->verified_email, FILTER_VALIDATE_BOOLEAN);

        // Check if user exists with Google ID
        $stmt = $pdo->prepare("SELECT `user_id` FROM `users` WHERE user_google_Id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $yoramu = getUserByEmail($email); // Function to get user by email
            $_SESSION['user'] = [
                'u_id' => $yoramu['user_id'],
                'u_username' => $yoramu['user_lname'],
                'u_email' => $yoramu['user_email'],
            ];
            header('Location: dashboard');
            exit;
        } else {
            // Check if email exists without Google ID
            $stmt = $pdo->prepare("SELECT `user_email` FROM `users` WHERE `user_email` = ? AND user_google_Id = 'empty'");
            $stmt->execute([$email]);
            $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($existingUser) {
                // Update existing user with Google info
                $update_stmt = $pdo->prepare("UPDATE `users` SET user_google_Id = ?, user_fname = ?, user_lname = ?, user_google_profile = ?, user_google_verification = ? WHERE user_email = ?");
                if ($update_stmt->execute([$id, $firstName, $lastName, $profile_pic, $verifiedEmail, $email])) {
                    $yoramu = getUserByEmail($email); // Function to get user by email
                    $_SESSION['user'] = [
                        'u_id' => $yoramu['user_id'],
                        'u_username' => $yoramu['user_lname'],
                        'u_email' => $yoramu['user_email'],
                    ];
                    header('Location: dashboard');
                    exit;
                } else {
                    error_log("Database update failed: " . implode(", ", $update_stmt->errorInfo()));
                    echo '<script>alert("Database update error")</script>';
                    exit;
                }
            } else {
                // Insert new user
                $verificationCode = bin2hex(random_bytes(16)); // Generate verification code
                $stmt = $pdo->prepare("INSERT INTO users (user_email, user_google_Id, user_google_profile, user_google_verification, user_fname, user_lname, user_verification_code) VALUES (?, ?, ?, ?, ?, ?, ?)");
                
                if ($stmt->execute([$email, $id, $profile_pic, $verifiedEmail, $firstName, $lastName, $verificationCode])) {
                    $yoramu = getUserByEmail($email); // Function to get user by email
                    $_SESSION['user'] = [
                        'u_id' => $yoramu['user_id'],
                        'u_username' => $yoramu['user_lname'],
                        'u_email' => $yoramu['user_email'],
                    ];
                    header('Location: dashboard');
                    echo '<script>location.href="dashboard"</script>';
                } else {
                    $message = "Failed to log in as guest";
                    echo "
                    <!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Log in as guest</title>
                        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    </head>
                    <body>
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Log in Failed',
                            text: '$message',
                            confirmButtonText: 'Try Again',
                            allowOutsideClick: false,
                            allowEscapeKey: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                            window.location = 'sign_in';
                            }
                        });
                    </script>
                    </body>
                    </html>";
                }
            }
        }
    } else {
        header('Location: ./');
        exit;
    }
    
else:
// Sign In With Google Account End
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-menu-100vh" dir="ltr" data-theme="theme-default">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Sign in</title>
    <meta name="description" content="">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/css/sign_in_up/boxicons.css">
    <!-- Fallback for icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Font Awesome for backup icons -->
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
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center" 
                     id="layout-navbar" 
                     style="background-color: #0d0b2e !important; box-shadow: none !important;">
                     <!-- <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"> -->
                         <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" id="toggleMobileMenu">
                            <!-- Multiple icon options for better compatibility -->
                            <i class="bx bx-menu bx-sm toggle-icon"></i>
                            <i class="fas fa-bars toggle-icon" style="display: none;"></i>
                            <!-- Fallback text if icons don't load -->
                            <span class="toggle-text" style="display: none;">Menu</span>
                        </a>
                    </div>
                    
                    <!-- Mobile menu (hidden by default) -->
                    <div class="mobile-menu" id="mobileMenu">
                        <a href="index" class="mobile-menu-item">Home</a>
                        <a href="sign_in" class="mobile-menu-item">Sign In</a>
                        <a href="sign_up" class="mobile-menu-item">Sign Up</a>
                        <a href="contactus" class="mobile-menu-item">Contact Us</a>
                    </div>
                </nav>

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid text-white pt-3 pb-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div>
                                    <h1 class="p-3">
                                        <i class="fa-solid fa-hand-holding-dollar"></i> LOGIN
                                    </h1>
                                </div>
                                <div>
                                    <div class="card card-bg p-5 m-2 bg-main">
                                        <form method="post">
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
                                                       required>
                                            </div>
                                            
                                            <div id="div_id_email" class="mb-3">
                                                <label for="email" class="form-label requiredField">
                                                    Email<span class="asteriskField">*</span>
                                                </label>
                                                <input type="email" 
                                                       id="email" 
                                                       name="email" 
                                                       placeholder="Email" 
                                                       autocomplete="email" 
                                                       class="textinput form-control" 
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
                                                       autocomplete="current-password" 
                                                       class="passwordinput form-control" 
                                                       required>
                                            </div>
                                            
                                            <hr>
                                            
        <div class="g-recaptcha" data-sitekey="6Ld1YwQrAAAAACsobrSHDTSZPsESfTb0zzltbWzt"></div>

 <br>                                           
<button class="btn btn-md btn-primary text-white" type="submit" name="submit">
    Log in
</button>

<?php
$space = 1;
while ($space<=2) {
    echo "<br>";
    $space++;
}
?>
                                            
<button class="btn btn-md btn-primary text-white" onclick="return injira()">
    Log in as Guest
</button>
                                            
                                            <hr>
                                            <br>
                                            
                                            <div class="row text-center">
                                                <a class="mb-2 text-white" href="sign_up">Sign Up</a>
                                                <a href="forgot_password">Forgot Password?</a>
                                            </div>
                                            
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- Layout page -->
            </div>
            
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
    </div>
    <!-- Layout wrapper -->
    
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    
    <!-- Toggle Menu Script -->
     <script src="./assets/js/sign_in/petit-irutabyose-yoramu.js"></script>
    <script>
        function injira() {
            location.href="<?php echo @$client->createAuthUrl(); ?>";
            return false;
        }
    </script>
    
    <?php
        endif;
    ?>
</body>
</html>