<?php
require 'db.php'; // Include the database connection
require 'mailer.php'; // Include the mailer file

// Function to sanitize user input
function validateInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Function to check if email already exists
function emailExists($email) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_email = ?");
    $stmt->execute([$email]);
    return $stmt->fetch() ? true : false;
}


// Function to register a new user
function registerUser($username, $email, $password, $confirmPassword) {
    global $pdo;

    // Check if passwords match
    if ($password !== $confirmPassword) {
        $message = "Passwords do not match!";
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Register</title>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Registration Failed',
                    text: '$message',
                    confirmButtonText: 'Try Again'
                });
            </script>
        </body>
        </html>";
        return;
    }

    // Check if the email already exists
    if (emailExists($email)) {
        $message = "Email already exists!";
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Register</title>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Registration Failed',
                    text: '$message',
                    confirmButtonText: 'Try Again'
                });
            </script>
        </body>
        </html>";
        return;
    }

    // Hash password and generate verification code
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $verificationCode = bin2hex(random_bytes(16)); // Generate a random verification code

    // Insert new user into the database
    $stmt = $pdo->prepare("INSERT INTO users (user_username, user_email, user_password, user_verification_code) VALUES (?, ?, ?, ?)");
    
    if ($stmt->execute([$username, $email, $hashedPassword, $verificationCode])) {
        // Send verification email
        sendVerificationEmail($email, $verificationCode);
        $message = "Your account has been created successfully! Please check your email (including your spam or junk folder) to verify your account.";
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Register</title>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Successful',
                    text: '$message',
                    confirmButtonText: 'Okay',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'sign_in'; // Redirect to login page after registration
                    }
                });
            </script>
        </body>
        </html>";
    } else {
        $message = "Failed to create an account.";
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Register</title>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Registration Failed',
                    text: '$message',
                    confirmButtonText: 'Try Again'
                });
            </script>
        </body>
        </html>";
    }
}


// Function to send a verification email
function sendVerificationEmail($email, $verificationCode) {
    $verificationLink = "http://localhost/offggy.com/verify?code=$verificationCode";
    $subject = "Email Verification";
    $message = "<p>Thank you for creating an account! Please click the link below to verify your email:</p>
                <p><a href='$verificationLink'>$verificationLink</a></p>
                <p>If you didn't create an account, please ignore this email.</p>";

    return sendEmail($email, $subject, $message);
}

// Function to send a password reset email
function sendPasswordResetEmail($email, $resetCode) {
    $resetLink = "http://localhost/offggy.com/change_password?code=$resetCode";
    $subject = "Password Reset Request";
    $message = "<p>Click the link below to reset your password. The link will expire in 1 hour:</p>
            <p><a href='$resetLink'>$resetLink</a></p>
            <p>If you did not request this password reset, please ignore this email.</p>";

    return sendEmail($email, $subject, $message);
}


// Function to get user by  and username
function getUserByEmailUsername($email, $username) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_email = ? AND user_username = ?");
    $stmt->execute([$email, $username]);
    return $stmt->fetch();
}

// Function to get user by email
function getUserByEmail($email) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_email = ?");
    $stmt->execute([$email]);
    return $stmt->fetch();
}
?>
