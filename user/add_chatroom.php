<?php 
	// include file session.php
	include('session.php');
	// kiểm tra sự tồn tại của biến chat name từ AJAX
	if (isset($_POST['chatname'])){
	// khởi tạo các biến
	$cid="";
	$chat_name=$_POST['chatname'];
	$chat_password=$_POST['chatpass'];
	// lưu thông tin phòng chat vào database
	mysqli_query($conn,"insert into chatroom (chat_name, chat_password, date_created, userid) values ('$chat_name', '$chat_password', NOW(), '".$_SESSION['id']."')");
	$cid=mysqli_insert_id($conn);
	// lưu ID của người tạo phòng vào bảng chat_member
	mysqli_query($conn,"insert into chat_member (chatroomid, userid) values ('$cid', '".$_SESSION['id']."')");
	
	echo $cid;
	}
	
	
?>