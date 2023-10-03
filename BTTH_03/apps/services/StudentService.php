<?php
// require APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/models/Student.php';
// require APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/lib/DBConnection.php';
include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/models/Student.php';
include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/lib/DBConnection.php';
class StudentService
{
  // Lớp thực hiện câu truy vấn, select, insert
  public function getAllStudents()
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "SELECT * FROM student";
        $stmt = $conn->query($query);
        $result = $stmt->fetchAll();

        $students = array();
        foreach ($result as $row) {
          $student = new Student($row[0], $row[1], $row[2], $row[3], $row[4]);
          $students[] = $student;
        }
        return $students;
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function addStudent($studentName, $email, $dateOfBirth, $classID)
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "SELECT count(*) from student where email = '$email'";
        $stmt = $conn->query($query);
        if ($stmt->fetchColumn()[0] != null) {
          return false;
        } else {
          $query = "INSERT into student (studentName, email, dateOfBirth, classID) values
          ('$studentName', '$email', '$dateOfBirth', '$classID')";
          $stmt = $conn->query($query);
          return true;
        }
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function editStudent($id, $studentName, $email, $dateOfBirth, $classID)
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "UPDATE student set studentName = '$studentName', email = '$email', dateOfBirth = '$dateOfBirth', classID = '$classID' where id = '$id'";
        $conn->query($query);
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function deleteStudent($id)
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "DELETE FROM student WHERE id = '$id'";
        $stmt = $conn->query($query);
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function getStudentById($id)
  {
    $students = $this->getAllStudents();
    foreach ($students as $each) :
      if ($each->getID() == $id)
        return $each;
    endforeach;
  }
  public function getClassNameByStudent($std)
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $id = $std->getID();
        $query = "SELECT className from class
        inner join student on student.classID = class.id
        where student.id = '$id'";
        $stmt = $conn->query($query);
        $className = $stmt->fetch()[0];
        return $className;
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function getAllClassName()
  {
    try {
      $dbconnection = new DBConnection();
      $conn = $dbconnection->getConnection();

      if ($conn != null) {
        $query = "SELECT * from class";
        $stmt = $conn->query($query);
        $result = $stmt->fetchAll();
        return $result;
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
}