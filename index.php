<?php
class Menu {
  public $name;

  public function hello() {
    echo "私はMenuクラスのインスタンスです";
  }
}

$curry = new Menu();
$pasta = new Menu();

$curry->name = 'CURRY';
echo $curry->name;
$curry->hello();

$pasta->name = 'PASTA';
echo $pasta->name;
$pasta->hello();
?>