<?php 
    include './config/connect.php';
         $sql = "SELECT * FROM user ";
         $query = mysqli_query($connect, $sql); // kết nối csdl đc lập 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
</head>
<body>
    <div class="container-fluid full">
        <div class="row">
            <div class="col-md-3 card rounded bg-white">
                <?php 
                    include './layout/sidebar.php'
                ?>   
            </div>

            
            <div class="col-md-9">
                <?php
                    include './layout/header.php';
                ?>

  
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <span class="text-filter">Filter</span>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <div class="row partSec">
                                    <div class="col-md-3">
                                        <input type="text" name="" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="" placeholder="Mobile" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <select name="" class="form-control">
                                            <option value="0">Select Group</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-lg-6 col-xl-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="submit" style="color: white;" class=" btn btn-filter btn-primary w-100 mb-2">
                                                        <i class="bi bi-search text-white"></i>
                                                            Filter
                                                        </button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="" type="button" class=" btn light btn-outline-primary clear-user-filter">Clear</a>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>

                <div class="col-lg-12">
                    <div class="card m-4 p-4">
                        <div class="card-header">
                            <h4 style="color: orangered;" class="card-title">Users</h4>
                            <div class="d-flex ml-9">
                                <button type="button" class="btn light btn-outline-primary me-2">DELETE</button>
                                    <a href="index1.php?page_layout=add" class="btn btn-primary">
                                        ADD USER
                                    <span class="btn-icon-end"><i class="bi bi-plus text-white h3 " ></i></span>
                                    </a>
                            </div>
                        </div>    


   
                    <table class="table m-4 p-4">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Group</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Date of birth</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <?php 
                                
                                $i= 1;
                                while($row = mysqli_fetch_assoc($query)){
                            ?> 
                            <tr>
                                  <td>
                                <?php echo $i++; ?>
                                
                                </td>
                                <td>
                                    <?php echo $row['fullname']; ?>
                                </td>

                                <td>
                                <?php echo $row['email']; ?>
                                
                                </td>
                                <td>
                                <?php echo $row['gender']; ?>
                                
                                </td>
                                <td>
                                <?php echo $row['groups']; ?>
                                
                                </td>
                                <td>
                                    <?php echo $row['phone']; ?>
                                </td>
                                <td>
                                    <?php echo $row['birth']; ?>
                                </td>
                                <td>
                                    <a href="index1.php?page_layout=edit&id=<?php echo $row['uid']; ?>"><span class="icon_edit"><i class="bi bi-pencil"></i></span></a>
                                </td>
                                 <td>
                                 <a class="link-offset-2 link-underline link-underline-opacity-0 btn btn-white "
                                  onclick="return Del('<?php echo $row['fullname']; ?>')" href="index1.php?page_layout=delete&id=<?php echo $row['uid']; ?>"><span class="icon_delete"><i class="bi bi-trash3"></i></span></a>

                                 </td>   

                            </tr>
                            <?php }?>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>                     
                </div>              
            </div>
        </div>
    </div>
    <script>
        function Del(fullname){
            

            return confirm("Are you sure you want to delete this account "+ "'" + fullname +  "'"+ "?");
    }
    </script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>