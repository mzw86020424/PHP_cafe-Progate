<?php

class Menu {
  private $name;
  private $price;
  private $image;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function getName() {
    return $this->name;
  }

  public function getTaxIncludedPrice() {
    return floor($this->price * 1.1);
  }

  public function getImage() {
    return $this->image;
  }
}

?>