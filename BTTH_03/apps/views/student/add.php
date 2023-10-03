<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm sinh viên</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="wrapped w-25 mt-5">
          <form method="POST" action="?controller=student&action=store">
            <div class="mb-3">
              <label for="id" class="form-label">Mã sinh viên</label>
              <input type="text" name="id" id="id" class="form-control">
            </div>
            <div class="mb-3">
              <label for="studentName" class="form-label">Tên sinh viên</label>
              <input type="text" name="studentName" id="studentName" class="form-control">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
              <label for="dateOfBirth" class="form-label">Ngày sinh</label>
              <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control">
            </div>
            <div class="mb-3">
              <label for="classID" class="form-label">Tên lớp</label>
              <select name="classID" class="form-select">
                <?php
                $studentService = new StudentService();
                $results = $studentService->getAllClassName();
                foreach ($results as $each) :
                ?>
                  <option value="<?= $each['id'] ?>"><?= $each['className'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <button class="btn btn-primary">Thêm</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>