<?php

namespace Deviantintegral\SymfonyDeserializeXmlCollection;

class People {

  /**
   * @var \Deviantintegral\SymfonyDeserializeXmlCollection\Person[]
   */
  protected $persons = [];

  /**
   * @return \Deviantintegral\SymfonyDeserializeXmlCollection\Person[]
   */
  public function getPersons(): array {
    return $this->persons;
  }

  /**
   * @param \Deviantintegral\SymfonyDeserializeXmlCollection\Person[] $persons
   */
  public function setPerson(array $persons) {
    $this->persons = $persons;
  }

  /**
   * @param \Deviantintegral\SymfonyDeserializeXmlCollection\Person $person
   */
  public function addPerson(Person $person): void {
    $this->persons[] = $person;
  }
}
