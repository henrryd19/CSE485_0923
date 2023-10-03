<?php 
    $id = $_GET['uid'];
    $sql = "DELETE from user where id = '$id'";
    $query = mysqli_query($connect, $sql);
    header('location: index1.php?page_layout=index.php');
?>
<!-- header('location: index1.php?page_layout=index.php'); ?> 
là một lệnh được sử dụng trong coding PHP để chuyển hướng trình duyệt của 
người dùng đến một trang web khác. Như trên, nó sẽ chuyển hướng người dùng đến trang
 index1.php với tham số page_layout=index.php.

header location trong PHP là một hàm được sử dụng để chuyển hướng người dùng từ trang hiện 
tại đến một trang khác. Điều này thực hiện bằng cách gửi một header HTTP tới trình duyệt với
 giá trị cho phép chuyển hướng đến trang mong muốn.
-->