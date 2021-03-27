<?php
class Review {
  private $menuName;
  private $body;
  private $userName;

  public function __construct($menuName, $userName, $body) {
    $this->menuName = $menuName;
    $this->userName = $userName;
    $this->body = $body;
  }

  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }

  public function getUser($users) {
    foreach ($users as $user) {
      if ($this->userName == $user->getName()) {
        return $user;
      }
    }
  }
}

?>