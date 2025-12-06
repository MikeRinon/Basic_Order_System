<?php
require __DIR__ . '/db.php';
session_start();

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header('Location: index.php');
    exit;
}

$u = trim($_POST['username'] ?? '');
$p = $_POST['password'] ?? '';
if($u === '' || $p === ''){
    echo 'Missing credentials.';
    exit;
}

$stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
$stmt->execute([$u]);
$user = $stmt->fetch();

if(!$user || !password_verify($p, $user['password'])){
    echo 'Invalid username or password. <a href="index.php">Back</a>';
    exit;
}

// success
$_SESSION['user'] = $user['username'];
header('Location: menu.php');
exit;
