<?php
    session_start();
    // Kết nối tới cơ sở dữ liệu
    include('../conn.php');
    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (!isset($_SESSION['id']) || (trim ($_SESSION['id']) == '')) {
        header('location:../');
        exit();
    }
    $sq=mysqli_query($conn,"select * from `user` where userid='".$_SESSION['id']."'");
    $srow=mysqli_fetch_array($sq); 
    // Kiểm tra xem người dùng có quyền truy cập không
    if ($srow['access']!=1){
        header('location:../');
        exit();
    }
    $user=$srow['username'];
?>
