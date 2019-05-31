<?php

namespace Deviantintegral\SymfonyDeserializeXmlCollection;

class Person {

  /**
   * @var string
   */
  protected $name;

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name) {
    $this->name = $name;
  }
}
