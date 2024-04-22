<?php
//kết nối tới session
	include('session.php');
	// Kiểm tra xem dữ liệu POST 'del' đã được thiết lập chưa
	if(isset($_POST['del'])){
		// Lấy ID từ dữ liệu POST
		$id=$_POST['id'];
		//truy vấn và xóa user từ bảng user
		mysqli_query($conn,"delete from `user` where userid='$id'");
	}

?>