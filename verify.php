<?php
require 'petit_irutabyose_yoramu/db.php'; // Include the database connection

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_verification_code = ?");
    $stmt->execute([$code]);
    $user = $stmt->fetch();

    if ($user) {
        $updateStmt = $pdo->prepare("UPDATE users SET user_is_verified = 1, user_verification_code = NULL WHERE user_verification_code = ?");
        $updateStmt->execute([$code]);echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Account Verification</title>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Verification Successful',
                    text: 'Your account has been successfully verified! You can now log in.',
                    confirmButtonText: 'Go to Login',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'http://localhost/offggy.com/sign_in'; // Redirect to login page
                    }
                });
            </script>
        </body>
        </html>";        
    } else {
        echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Verification Error</title>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Verification Failed',
            text: 'The verification link you opened is invalid or has expired. Please check your email for a valid link or create account.',
            confirmButtonText: 'Create Account',
                    allowOutsideClick: false,
                    allowEscapeKey: false
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = 'sign_up'; // Redirect to sign-up page
            }
        });
    </script>
</body>
</html>";
    }
} else {echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Verification Error</title>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Verification Link Missing',
                text: 'No verification link was provided. Please check the email you received for the correct link.',
                confirmButtonText: 'Create Account',
                    allowOutsideClick: false,
                    allowEscapeKey: false
            }).then((result) => {
                if (result.isConfirmed) {
                window.location = 'sign_up'; // Redirect to sign-up page
                }
            });
        </script>
    </body>
    </html>";
}
?>
