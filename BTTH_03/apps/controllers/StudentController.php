<?php
// require APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/services/StudentService.php';
include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/services/StudentService.php';
class StudentController
{
  public function index()
  {
    $studentService = new StudentService();
    $students = $studentService->getAllStudents();
    // include APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/student/index.php';
    include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/student/index.php';
  }
  public function add()
  {
    // include APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/student/add.php';
    include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/student/add.php';
  }
  public function store()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $studentName = $_POST['studentName'];
      $email = $_POST['email'];
      $dateOfBirth = $_POST['dateOfBirth'];
      $classID = $_POST['classID'];

      $studentService = new StudentService();
      if ($studentService->addStudent($studentName, $email, $dateOfBirth, $classID)) {
        header('location: ?controller=student&action=index&message=Thêm thành công');
      } else {
        header('location: ?controller=student&action=index&message=Trùng email');
      }
    }
  }
  public function edit()
  {
    $id = $_GET['id'];
    $studentService = new StudentService();
    $each = $studentService->getStudentById($id);
    // include APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/student/edit.php';
    include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/student/edit.php';
  }
  public function update()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id = $_POST['id'];
      $studentName = $_POST['studentName'];
      $email = $_POST['email'];
      $dateOfBirth = $_POST['dateOfBirth'];
      $classID = $_POST['classID'];

      $studentService = new StudentService();
      $studentService->editStudent($id, $studentName, $email, $dateOfBirth, $classID);
      header('location: ?controller=student&action=index&message=Sửa thành công');
    }
  }
  public function delete()
  {
    $id = $_GET['id'];
    $studentService = new StudentService();
    $studentService->deleteStudent($id);
    header('location: ?controller=student&action=index&message=Xóa thành công');
  }
}