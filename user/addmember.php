<?php
	include('session.php');
	// kiểm tra sự tồn tại của biến id
	if (isset($_POST['id'])){
		$id=$_POST['id'];
		// truy vấn dữ liệu từ database
		$query=mysqli_query($conn,"select * from chat_member where chatroom='$id' and userid='".$_SESSION['id']."'");
		// kiểm tra số thành viên trong đoạn chat
		if (mysqli_num_rows($query)<1){
			mysqli_query($conn,"insert into chat_member (chatroomid, userid) values ('$id', '".$_SESSION['id']."')");
		}
	}
?>