<?php
    // Kết nối tới file session.php
    include('session.php');
    // Kiểm tra xem dữ liệu POST 'adduser' đã được thiết lập chưa
    if(isset($_POST['adduser'])){
        // Lấy dữ liệu 'name','username','password','access' từ yêu cầu POST
        $name=$_POST['name'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $access=$_POST['access'];
        // Thực hiện truy vấn MySQL để chèn dữ liệu người dùng mới vào bảng 'user'
        mysqli_query($conn,"insert into `user` (uname, username, password, access) values ('$name', '$username', '$password', '$access')");
    }
?>
