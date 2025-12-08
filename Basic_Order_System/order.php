<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit;
}
$item = $_POST['item'] ?? '';
$quantity = max(1, intval($_POST['quantity'] ?? 1));
$cash = floatval($_POST['cash'] ?? 0);
$prices = ['Fishball'=>30,'Kikiam'=>40,'Corndog'=>50];
if(!isset($prices[$item]) || $quantity<=0){
    echo 'Invalid order. <a href="menu.php">Back</a>';
    exit;
}
$price_each = $prices[$item];
$total = $price_each * $quantity;
$change = $cash - $total;
$date = date('m/d/Y h:i:s a');
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Order Result</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="topbar"></div>
  <div class="container result">
    <p><strong>The total cost is <?php echo $total;?></strong></p>
    <?php if($change < 0): ?>
      <p><strong>Not enough cash. You still owe <?php echo abs($change);?> PHP</strong></p>
    <?php else: ?>
      <p><strong>Your change is <?php echo $change;?></strong></p>
    <?php endif; ?>
    <p><strong>Thanks for the order! <?php echo htmlspecialchars($_SESSION['user'], ENT_QUOTES);?></strong></p>
  </div>
</body>
</html>
