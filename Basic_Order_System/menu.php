<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit;
}
$user = htmlspecialchars($_SESSION['user'], ENT_QUOTES);
$prices = ['Fishball'=>30,'Kikiam'=>40,'Corndog'=>50];
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Menu</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="topbar"></div>
  <div class="container">
    <div class="welcome">Welcome to the canteen, <span class="uname"><?php echo $user;?></span></div>
    <h3>Here are the prices:</h3>
    <a href="logout.php">Logout</a>
    <div class="prices">
      <ul>
        <?php foreach($prices as $k=>$v): ?>
        <li><?php echo htmlspecialchars($k);?> - <?php echo $v;?> PHP</li>
        <?php endforeach;?>
      </ul>
    </div>
    <form method="post" action="order.php" class="menu-form">
      <div class="form-row">
        <label for="item">Choose your order:</label>
        <select id="item" name="item">
          <?php foreach($prices as $k=>$v): ?>
            <option value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-row">
        <label for="qty">Quantity:</label>
        <input type="text" id="qty" name="quantity" value="">
      </div>
      <div class="form-row">
        <label for="cash">Cash:</label>
        <input type="text" id="cash" name="cash" value="">
      </div>
      <div class="form-row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
