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
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="topbar"></div>
  <div class="container">
    <h1 class="title">Login here</h1>
    <form method="post" action="login_action.php">
      <input type="text" name="username" placeholder="username here" required>
      <input type="password" name="password" placeholder="password here" required>
      <input type="submit" value="login" class="big">
    </form>
    <a class="smalllink" href="register.php">Register</a>
  </div>
</body>
</html>
