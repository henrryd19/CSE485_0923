<?php
class Classes
{
  private $id;
  private $className;
  public function __construct($id, $className)
  {
    $this->id = $id;
    $this->className = $className;
  }
  public function getID()
  {
    return $this->id;
  }
  public function setID($id)
  {
    $this->id = $id;
  }

  public function getClassName()
  {
    return $this->className;
  }
  public function setClassName($className)
  {
    $this->className = $className;
  }
}