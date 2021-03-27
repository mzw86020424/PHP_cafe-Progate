<?php
class User {
  private $name;
  private $gender;
  private $id;

  private static $count = 0;

  public function __construct($name, $gender) {
    $this->name = $name;
    $this->gender = $gender;
    self::$count++;
    $this->id = self::$count;
  }

  public function getName() {
    return $this->name;
  }

  public function getGender() {
    return $this->gender;
  }

  public function getId() {
    return $this->id;
  }
}

?>