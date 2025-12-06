<?php
session_start();
if(isset($_SESSION['user'])){
  header('Location: menu.php');
  exit;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="topbar"></div>
  <div class="container">
    <h1 class="title">Register here</h1>
    <form method="post" action="register_action.php">
      <input type="text" name="username" placeholder="username here" required>
      <input type="password" name="password" placeholder="password here" required>
      <input type="submit" value="Register" class="big">
    </form>
  </div>
</body>
</html>
