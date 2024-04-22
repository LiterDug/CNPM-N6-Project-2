<?php
    // Kết nối tới cơ sở dữ liệu
    include('../conn.php');
    // Kiểm tra xem dữ liệu POST 'del' đã được thiết lập chưa
    if (isset($_POST['del'])){
        // Lấy ID từ dữ liệu POST
        $id=$_POST['id'];
        // truy vấn để xóa phòng từ bảng 'chatroom', 'chat', 'chat_member'
        mysqli_query($conn,"delete from `chatroom` where chatroomid='$id'");
        mysqli_query($conn,"delete from `chat` where chatroomid='$id'");
        mysqli_query($conn,"delete from `chat_member` where chatroomid='$id'");
    }
?>
