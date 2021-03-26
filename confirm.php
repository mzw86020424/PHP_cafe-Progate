<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <?php foreach ($menus as $menu): ?>
      <?php $orderCount = $_POST[$menu->getName()] ?>
      <p class="order-amount">
      <?php echo $menu->getName() ?>
      x
      <?php echo $orderCount ?>
      個
      </p>
    <?php endforeach ?>
  </div>
</body>
</html>