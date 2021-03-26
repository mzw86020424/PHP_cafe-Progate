<?php

class Menu {
  public $name;
}

$curry = new Menu();
$pasta = new Menu();

$curry->name = 'CURRY';
echo $curry->name;

$pasta->name = 'PASTA';
echo $pasta->name;
?>