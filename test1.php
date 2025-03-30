<?php 
session_start();
require 'petit_irutabyose_yoramu/petit_irutabyose_yoramu.php';

// Redirect if already authenticated
if (isset($_SESSION['user'])) {
    header('Location: dashboard');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... [unchanged reCAPTCHA and login code] ...
}

// ########################################################################################################################

// Sign In With Google Account

// Require necessary files securely
require 'google-api/vendor/autoload.php';
$client = new Google_Client();
$client->setClientId('901763077428-hjqirv1nmle2k584k38dfmacb2t0u2mr.apps.googleusercontent.com');
$client->setClientSecret('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');
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
            $_SESSION['user_id'] = $id; // Fixed session variable
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
                    $_SESSION['user'] = [
                        'u_id' => $update_stmt->fetchColumn(), // Get last inserted ID
                        'u_email' => $email
                    ];
                    echo '<script>location.href="dashboard"</script>';
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
                    $_SESSION['user'] = [
                        'u_id' => $pdo->lastInsertId(),
                        'u_email' => $email
                    ];
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
// ... [unchanged HTML code] ...
?>