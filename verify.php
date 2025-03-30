<?php
require 'petit_irutabyose_yoramu/db.php'; // Include the database connection

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_verification_code = ?");
    $stmt->execute([$code]);
    $user = $stmt->fetch();

    if ($user) {
        $updateStmt = $pdo->prepare("UPDATE users SET user_is_verified = 1, user_verification_code = NULL WHERE user_verification_code = ?");
        $updateStmt->execute([$code]);
        echo "Your account has been verified! You can now <a href='http://localhost/offggy.com/sign_in'>Login</a>.";
    } else {
        echo "Invalid verification code!";
    }
} else {
    echo "No verification code provided!";
}
?>
