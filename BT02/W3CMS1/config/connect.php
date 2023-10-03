<!-- <?php

    // $host= "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "w3cs"; //ten database

    // $conn = new mysqli($host, $username, $password, $dbname);

    // if($conn->connect_error){
    //     die("ket noi khong thanh cong: ". $conn->connect_error);
    // }else
    //     echo "ket noi thanh cong".'<br>';
    $connect = mysqli_connect("localhost", "root","","w3cms"); // kết mppos csdl vs html
    if($connect){
       $query = mysqli_query($connect, "set names 'UTF8'");
          //Hỗ trợ cho phiên bản tiếng việt
       echo 'ket noi thanh cong!'.'<br>';
         }
    else{
        echo "ket noi that bai";
    }

?>
     $connect = mysqli_connect('localhost', 'root','','w3cms'); // kết mppos csdl vs html
     if($connect){
        mysqli_query($connect, "set names 'UTF8'");
           Hỗ trợ cho phiên bản tiếng việt
        echo 'ket noi thanh cong!'.'<br>';
          }
     else{
         echo "ket noi that bai";
     }
?> -->
<!-- mysqli_query trong php là một hàm được sử dụng để thực thi một câu truy vấn SQL đến cơ sở dữ liệu MySQL.
    mysqli_query($conn, $query);
    Trong đó:
    - $conn là biến chứa kết nối đến cơ sở dữ liệu MySQL.
    - $query là câu truy vấn SQL muốn thực thi.

    mysqli_connect là một hàm trong PHP được sử dụng để thiết lập kết nối tới cơ sở dữ liệu MySQL.
    mysqli_connect([server], [username], [password], [database], [port], [socket]);

    Trong đó:
    - [server]: Địa chỉ hoặc tên máy chủ MySQL. Mặc định là "localhost".
    - [username]: Tên người dùng MySQL. Mặc định là "root".
    - [password]: Mật khẩu để kết nối tới cơ sở dữ liệu MySQL. Mặc định là rỗng.
    - [database]: Tên cơ sở dữ liệu MySQL mà bạn muốn kết nối tới.
    - [port]: Số cổng mà MySQL đang lắng nghe. Mặc định là 3306.
    - [socket]: Đường dẫn tới socket sử dụng để kết nối tới MySQL. Mặc định là rỗng.

 -->