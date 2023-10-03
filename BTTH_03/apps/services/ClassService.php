<?php
// require APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/models/Classes.php';
// require APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/lib/DBConnection.php';
include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/models/Classes.php';
include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/lib/DBConnection.php';
class classService
{
  // Lớp thực hiện câu truy vấn, select, insert
  public function getAllClasses()
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "SELECT * FROM class";
        $stmt = $conn->query($query);
        $result = $stmt->fetchAll();

        $classes = array();
        foreach ($result as $row) {
          $class = new Classes($row[0], $row[1]);
          $classes[] = $class;
        }
        return $classes;
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function addClass($id, $nameClass)
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "SELECT count(*) from class where id = '$id'";
        $stmt = $conn->query($query);
        if ($stmt->fetchColumn()[0] != null) {
          return false;
        } else {
          $query = "INSERT into class (nameClass) values ('$nameClass')";
          $stmt = $conn->query($query);
          return true;
        }
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function editClass($id, $className)
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "UPDATE class set className = '$className' where id = '$id'";
        $conn->query($query);
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function deleteClass($id)
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "DELETE FROM class WHERE id = '$id'";
        $conn->query($query);
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function getClassByID($id)
  {
    $class = $this->getAllClasses();
    foreach ($class as $each) :
      if ($each->getID() == $id)
        return $each;
    endforeach;
  }
  public function deleteAllStudentByClass($classID)
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "DELETE FROM student where classID = '$classID'";
        $conn->query($query);
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
}