<?php

class Menu {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;

  private static $count = 0;

  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
  }

  public static function getCount() {
    return self::$count;
  }
  
  public function getName() {
    return $this->name;
  }

  public function getTaxIncludedPrice() {
    return floor($this->price * 1.1);
  }

  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }

  public function getImage() {
    return $this->image;
  }

  public function getOrderCount() {
    return $this->orderCount;
  }

  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
}

?>