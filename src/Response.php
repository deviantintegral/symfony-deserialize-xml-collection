<?php

namespace Deviantintegral\SymfonyDeserializeXmlCollection;

class Response {

  /**
   * @var \Deviantintegral\SymfonyDeserializeXmlCollection\People
   */
  protected $people;

  /**
   * @return \Deviantintegral\SymfonyDeserializeXmlCollection\People
   */
  public function getPeople() {
    return $this->people;
  }

  /**
   * @param \Deviantintegral\SymfonyDeserializeXmlCollection\People $people
   */
  public function setPeople(People $people) {
    $this->people = $people;
  }

}
