<?php
// require APP_ROOT . '/apps/services/classService.php';
include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/services/ClassService.php';
class ClassController
{
  public function index()
  {
    $classService = new ClassService();
    $classes = $classService->getAllClasses();
    // include APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/class/index.php';
    include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/class/index.php';
  }
  public function add()
  {
    // include APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/class/add.php';
    include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/class/add.php';
  }
  public function store()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id = $_POST['id'];
      $className = $_POST['className'];

      $classService = new ClassService();
      $classService->addClass($id, $className);
      header('location: ?controller=class&action=index&message=Thêm thành công');
    }
  }
  public function edit()
  {
    $id = $_GET['id'];
    $classService = new ClassService();
    $each = $classService->getClassByID($id);
    // include APP_ROOT . '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/class/edit.php';
    include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/views/class/edit.php';
  }
  public function update()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id = $_POST['id'];
      $className = $_POST['className'];

      $classService = new ClassService();
      $classService->editClass($id, $className);
      header('location: ?controller=class&action=index&message=Sửa thành công');
    }
  }
  public function delete()
  {
    $id = $_GET['id'];
    $classService = new ClassService();
    $classService->deleteAllStudentByClass($id);
    $classService->deleteClass($id);
    header('location: ?controller=class&action=index&message=Xóa thành công');
  }
}