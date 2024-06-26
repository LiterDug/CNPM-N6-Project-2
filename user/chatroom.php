<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php
	$id=$_REQUEST['id'];
	
	$chatq=mysqli_query($conn,"select * from chatroom where chatroomid='$id'");
	$chatrow=mysqli_fetch_array($chatq);
	
	$cmem=mysqli_query($conn,"select * from chat_member where chatroomid='$id'");
?>
<body>
<?php include('navbar.php'); ?>
<div class="container-fluid">
	<div class="row">
		<?php include('room.php'); ?>
	</div>
</div>
<?php include('room_modal.php'); ?>
<?php include('modal.php'); ?>

<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.min.js"></script>
<script src="../js/dataTables.responsive.js"></script>
<script>
$(document).ready(function(){
	
	$('#myChatRoom').DataTable({
	"sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
	"bLengthChange": false,
	"bInfo": false,
	"bPaginate": true,
	"bFilter": false,
	"bSort": false,
	"pageLength": 8
	});
	
	displayChat();
		// cấu hình nút send tin nhắn
		$(document).on('click', '#send_msg', function(){
			id = <?php echo $id; ?>;
			if($('#chat_msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#chat_msg').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
						msg: $msg,
						id: id,
					},
					success: function(){
						$('#chat_msg').val("");
						displayChat();
					}
				});
			}	
		});
		// cấu hình nút rời phòng chat
		$(document).on('click', '#confirm_leave', function(){
			id = <?php echo $id; ?>;
			$('#leave_room').modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
				$.ajax({
					type: "POST",
					url: "leaveroom.php",
					data: {
						id: id,
						leave: 1,
					},
					success: function(){
						window.location.href='index.php';
					}
				});
				
		});
		// cấu hình nút xoá phòng chat
		$(document).on('click', '#confirm_delete', function(){
			id = <?php echo $id; ?>;
			$('#confirm_delete').modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
				$.ajax({
					type: "POST",
					url: "deleteroom.php",
					data: {
						id: id,
						del: 1,
					},
					success: function(){
						window.location.href='index.php';
					}
				});
				
		});
		
		$(document).keypress(function(e){
			if (e.which == 13){
			$("#send_msg").click();
			}
		});
		
		$("#user_details").hover(function(){
			$('.showme').removeClass('hidden');
		},function(){
			$('.showme').addClass('hidden');
		});
		
	
});
	
	function displayChat(){
		id = <?php echo $id; ?>;
		$.ajax({
			url: 'fetch_chat.php',
			type: 'POST',
			async: false,
			data:{
				id: id,
				fetch: 1,
			},
			success: function(response){
				$('#chat_area').html(response);
				$("#chat_area").scrollTop($("#chat_area")[0].scrollHeight);
			}
		});
	}
</script>	
</body>
</html>