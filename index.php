<?php require_once('data.php') ?>
<?php require_once('menu.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <h3>メニュー<?php echo Menu::getCount() ?>品</h3>
    <form action="confirm.php" method="POST">
      <div class="menu-items">
        <?php foreach($menus as $menu) : ?>
        <div class="menu-item">
          <img src="<?php echo $menu->getImage() ?>" alt="">
          <a href="show.php?name=<?php echo $menu->getName() ?>">
            <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
          </a>
          <?php if ($menu instanceof Drink) : ?>
            <p class="menu-item-type"><?php echo $menu->getType() ?></p>
          <?php elseif($menu instanceof Food) : ?>
            <?php for ($i=0; $i < $menu->getSpiciness(); $i++) : ?> 
              <img class="icon-spiciness" src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" alt="">
            <?php endfor ?>
          <?php endif ?>
          <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（ 税込 ）</p>
          <input type="text" name="<?php echo $menu->getName() ?>" value="0">
          <span>個</span>
        </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>
