<?php
session_start();
require_once 'back_end_functions/core/db.php';

$userId = $_SESSION['user_id'] ?? null;
$authToken = $_SESSION['auth_token'] ?? null;

if (!$userId || !$authToken) {
    header('Location: subscriberAuthUI.php');
    exit;
}

// Verify token from active session
$stmt = $connect->prepare("
    SELECT us.auth_token 
    FROM user_sessions us
    WHERE us.user_id = ? 
    AND us.auth_token = ?
    AND us.is_active = 1
    AND us.expires_at > NOW()
    LIMIT 1
");
$stmt->bind_param("is", $userId, $authToken);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // Session mismatch or expired
    session_destroy();
    header('Location: subscriberAuthUI.php?expired=true');
    exit;
}

header('Location: main.php');
?>