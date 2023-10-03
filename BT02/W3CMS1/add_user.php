<?php  
    

    // if(isset($_POST['sbm'])){
    //     $fullname = $_POST['fullname'];
    //     $email = $_POST['email'];
    //     $gender = $_POST['gender'];
    //     $groups = $_POST['groups'];
    //     $phone = $_POST['phone'];
    //     $birth = $_POST['birth'];
    //     $sql = "INSERT INTO user (fullname, email, gender, groups, phone, birth)
    //     Values ('$fullname',' $email', '$gender',' $groups', '$phone', '$birth')";
    //     $query = mysqli_query($connect, $sql);
    //     header('location: index1.php?page_layout=index.php');

    // }
    require 'config/connect.php';
    if(isset($_POST['sbm'])){
        echo "da submit ";
        // echo '<pre>';
        // print_r($_POST);
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $groups = $_POST['groups'];
        $phone = $_POST['phone'];
        $birth = $_POST['dob'];

        if(!empty($birth)&&!empty($fullname)&&!empty($phone)&&!empty($gender)&&!empty($email)&&!empty($groups)){
            //insert du lieu
            // echo '<pre>';
            // print_r($_POST);

            $sql = "INSERT INTO `user` (`fullname`, `email`,`gender`, `groups`, `phone`, `birth`) 
            VALUES ('$fullname', '$email', '$gender', '$groups', '$phone', '$birth')";
            $query = mysqli_query($connect, $sql);
            header('location: index1.php?page_layout=index.php');


            if($connect->query($sql)===TRUE){
                echo "luu du lieu thanh cong".'<br>';
            }else{
                echo "loi~ {$sql}".$connect->error;
            }
        }else{
            echo "ban can nhap day du thong tin truoc khi dang ky";
        }

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
                                    <input type="text" name="fullname" placeholder="Fullname" class="form-control" required >
                                </div>
                                

                                <div class="mb-3 col-md-12">                            
                                    <label class="form-label" for="">Email</label><span class="text-danger">*</span>
                                    <input type="text" name="email" placeholder="Email" class="form-control" required >
                                </div>
                                

                            </div> 
                                <div class="mb-3 col-md-12">                            
                                    <label class="form-label" for="">Group</label><span class="text-danger">*</span>
                                    <input type="text" name="groups" placeholder="Group" class="form-control" required  >
                                </div>

                                <div class="mb-3 col-md-12">                            
                                    <label class="form-label" for="">Phone Number</label><span class="text-danger">*</span>
                                    <input type="text" name="phone" placeholder="Phone Number" class="form-control" required >
                                </div>
                            
                                <div class="mb-3 col-md-4 custom-user inline">
                                    <label for="" class="form-label">Gender</label>
                                    <span class="text-danger">*</span> <br>
                                   
                                    
                                    <input type="radio" id="male" name="gender" value="male" required > 
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="female" required >
                                    <label for="female">Female</label><br> 
                                    <input type="radio" id="others" name="gender" value="other" required>
                                    <label for="others">Others</label><br> 
                                    <!--  -->
                                    
                                   
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="" class="form-label">Date of Birth</label>
                                    <span class="text-danger">*</span>
                                    <input type="date" name="dob" id="dob" class="form-control" required >

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