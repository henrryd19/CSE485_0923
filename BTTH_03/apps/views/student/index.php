<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container">
    <?php include '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/public/layout/header.php'; ?>
    <h3 class="text-center text-uppercase">STUDENT MANAGEMENT</h3>
    <?php if (isset($_GET['message'])) : ?>
      <h5 class="text-info"><?= $_GET['message'] ?></h5>
    <?php endif; ?>
    <a class="btn btn-outline-success" href="?controller=student&action=add">Add student</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Fullname</th>
          <th scope="col">Email</th>
          <th scope="col">DateOfBirth</th>
          <th scope="col" class="text-center">Class</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $each) : ?>
          <?php
          $className = $studentService->getClassNameByStudent($each);
          ?>
          <tr>
            <td><?= $each->getID(); ?></td>
            <td><?= $each->getStudentName(); ?></td>
            <td><?= $each->getEmail(); ?></td>
            <td><?= $each->getDateOfBirth(); ?></td>

            <td class="text-center"><?= $className; ?></td>
            <td>
              <a class=" btn btn-warning btn-sm" href="?controller=Student&action=edit&id=<?= $each->getID() ?>">
                <i class="fa-solid fa-pen-to-square"></i>
              </a>
            </td>
            <td>
              <a class="btn btn-danger btn-sm" href="?controller=Student&action=edit&id=<?= $each->getID() ?>" data-bs-toggle="modal" data-bs-target="#id<?= $each->getID() ?>">
                <i class="fa-solid fa-trash"></i>
              </a>
              <!-- Modal -->
              <div class="modal fade" id="id<?= $each->getID() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Deleted users</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Did you want to delete the student whose code is: <?= $each->getID() ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="?controller=Student&action=delete&id=<?= $each->getID() ?>">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>