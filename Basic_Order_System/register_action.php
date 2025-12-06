<?php
require __DIR__ . '/db.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header('Location: register.php');
    exit;
}

$u = trim($_POST['username'] ?? '');
$p = $_POST['password'] ?? '';
if($u === '' || $p === ''){
    echo 'Please provide username and password.';
    exit;
}

// check existing user
$stmt = $pdo->prepare('SELECT id FROM users WHERE username = ?');
$stmt->execute([$u]);
if($stmt->fetch()){
    echo 'Username already exists. <a href="register.php">Back</a>';
    exit;
}

$hash = password_hash($p, PASSWORD_DEFAULT);
$stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
$stmt->execute([$u, $hash]);

header('Location: index.php');
exit;
