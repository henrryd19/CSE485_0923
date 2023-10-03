<?php
class Student
{
  private $id;
  private $studentName;
  private $mail;
  private $dateOfBirth;
  private $classID;
  public function __construct($id, $studentName, $mail, $dateOfBirth, $classID)
  {
    $this->id = $id;
    $this->studentName = $studentName;
    $this->mail = $mail;
    $this->dateOfBirth = $dateOfBirth;
    $this->classID = $classID;
  }
  public function getID()
  {
    return $this->id;
  }
  public function setID($id)
  {
    $this->id = $id;
  }

  public function getStudentName()
  {
    return $this->studentName;
  }
  public function setStudentName($studentName)
  {
    $this->studentName = $studentName;
  }
  public function getEmail()
  {
    return $this->mail;
  }
  public function setEmail($mail)
  {
    $this->mail = $mail;
  }
  public function getDateOfBirth()
  {
    return $this->dateOfBirth;
  }
  public function setDateOfBirth($dateOfBirth)
  {
    $this->dateOfBirth = $dateOfBirth;
  }
  public function getClassID()
  {
    return $this->classID;
  }
  public function setClassID($classID)
  {
    $this->classID = $classID;
  }
}