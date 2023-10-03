<?php  
    $id = $_GET['uid']; // Khai báo id 
    $sql_up = "SELECT * from user where id = $id"; // lệnh spl
    $query_up = mysqli_query($connect, $sql_up); // kết nối sql với 
    $row_up = mysqli_fetch_assoc($query_up);//

    if(isset($_POST['sbm'])){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $groups = $_POST['groups'];
        $phone = $_POST['phone'];
        $birth = $_POST['dob'];
        $sql = "UPDATE user SET fullname='$fullname', email='$email', gender='$gender', groups='$groups', phone='$phone', birth = '$birth'  WHERE id='$id'";
        $query = mysqli_query($connect, $sql);
        header('location: index1.php?page_layout=index.php');

    }
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="./index.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<style>

</style>
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
                <form action="" method="post">
                    <div class="p-3 m-3 bg-white">
                        <div class="">
                            <h5 class="" style="color:orangered;" >New user form</h5>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <div>

                                </div>
                            </div>

                            <div class="row col-md-6">

                                <div class="mb-3 col-md-12">                            
                                    <label class="form-label" for="">FullName</label><span class="text-danger">*</span>
                                    <input type="text" name="fullname" maxlength="190" class="form-control" required value="<?php echo $row_up['fullname']; ?>">
                                </div>
                                

                                <div class="mb-3 col-md-12">                            
                                    <label class="form-label" for="">Email</label><span class="text-danger">*</span>
                                    <input type="text" name="email" maxlength="220" class="form-control" required value="<?php echo $row_up['email']; ?>">
                                </div>
                                

                            </div> 
                                <div class="mb-3 col-md-12">                            
                                    <label class="form-label" for="">Group</label><span class="text-danger">*</span>
                                    <input type="text" name="groups" maxlength="255" class="form-control" required value="<?php echo $row_up['groups']; ?>" >
                                </div>
                                <div class="mb-3 col-md-12">                            
                                    <label class="form-label" for="">Phone Number</label><span class="text-danger">*</span>
                                    <input type="text" name="phone" maxlength="15" class="form-control" required value="<?php echo $row_up['phone']; ?>">
                                </div>
                            
                                <div class="mb-3 col-md-4 custom-user">
                                    <label for="" class="form-label">Gender</label>
                                    <span class="text-danger">*</span> <br>
                                    <!--  -->
                                    
                                    <input type="radio" id="male" name="gender" value="male" required <?php if ($row_up['gender'] === 'Male') echo 'checked'; ?>> 
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="female" required <?php if ($row_up['gender'] === 'Female') echo 'checked'; ?>>
                                    <label for="female">Female</label><br> 
                                    <input type="radio" id="others" name="gender" value="other" required <?php if ($row_up['gender'] === 'Others') echo 'checked'; ?>>
                                    <label for="others">Others</label><br> 
                                    <!--  -->
                                    
                                    <!-- <select name="gender" id="gender" class="multe-select form-control select1-hidden-accessible" aria-hidden="true" tabindex="-1" >
                                        <option value="1" data-select1-id="2">Choose gender</option>
                                        <option value="2" data-select1-id="3">Male</option>
                                        <option value="3" data-select1-id="4">Female</option>
                                        <option value="4" data-select1-id="5">Others</option>
                                    </select> -->
                                    
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="" class="form-label">Date of Birth </label>
                                    <span class="text-danger">*</span>
                                    <input type="date" name="dob" id="id_dob" class="form-control" required value="<?php echo $row_up['birth']; ?>">

                                </div>

                                
                            </div>
                            <div class=" row col-md-6 ">
                                <div class="col-md-3">
                                    <button name="sbm" type="submit" class="btn btn-secondary mt-4 mb-5 bg-primary" style="width:100%;">Save</button>
                                </div>
                                <div class="col-md-3">
                                <a href="./index1.php" class="btn btn-primary mt-4 mb-5 " style="width:100%; ">Cancel</a>
                                </div>
                            </div>

                            

                            
                        </div>
                        
                    </div>
                </form>
                



            </div>    
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>