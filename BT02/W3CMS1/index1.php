<?php
    require_once 'config/connect.php'; // nhúng mã php từ 1 tệp khác sử dụng các biến cán hàm được định nghĩa trong connect
    // require_once là một lệnh trong PHP được sử dụng để nạp một tệp tin vào mã nguồn hiện tại chỉ một lần duy nhất. Nếu tệp tin đã được nạp trước đó, lệnh require_once sẽ bỏ qua việc nạp tệp tin đó một lần nữa.

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <!-- text -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="./index.css">
</head>
<body style="background-color:#F0F0F0; font-family: 'poppins', sans-serif;">
    <?php
        if(isset($_GET['page_layout'])){ //kiểm tra xem có một tham số có tên page_layout được truyền vào URL không
            /*
            $_GET để lấy dữ liệu từ URL
            
            URL là chuỗi ký tự được sử dụng để xác định địa chỉ của tài nguyên trên Internet
            

            Dữ liệu GET thường được truyền qua URL và hiển thị trực tiếp trong địa chỉ trình duyệt.
            */ 
            switch ($_GET['page_layout']){
                case 'index':
                    require_once 'index.php';
                    break;

                
                case 'add':
                    require_once 'add_user.php';
                    break;  
             
                case 'edit':
                    require_once 'user_edit.php';
                    break;  
                
                case 'delete':
                    require_once 'delete.php';
                    break; 
                
                // case 'delete_table':
                //     require_once 'user/delete_table.php';
                //     break; 
        
                default:
                    require_once 'index.php';
                    break;
            }
        }else{
            
            require_once 'index.php';
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>