<!-- kết nối các thành phần giao diện -->
<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
	<div class="row">
		<?php include('chatlist.php'); ?>
	</div>
</div>
<?php include('crudroom_modal.php'); ?>
<?php include('modal.php'); ?>
<!-- kết nối đến các thư viện JS -->
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.min.js"></script>
<script src="../js/dataTables.responsive.js"></script>
<script>
// Khởi tạo DataTable cho'chatRoom'
$(document).ready(function(){
	$('#chatRoom').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": false,
	"pageLength": 7
	});
	
	//xóa phòng chat
	$(document).on('click', '.delete', function(){
		var rid=$(this).val();
		$('#delete_room').modal('show');
		$('.modal-footer #confirm_delete').val(rid);
	});
	//xác nhận xóa phòng
	$(document).on('click', '#confirm_delete', function(){
		var nrid=$(this).val();
		$('#delete_room').modal('hide');
		$('body').removeClass('modal-open');
		$('.modal-backdrop').remove();
			// Thực hiện một yêu cầu AJAX để xóa phòng chat
				$.ajax({
				url:"deleteroom.php",
				method:"POST",
				data:{
					id: nrid,
					del: 1,
				},
				success:function(){
					window.location.href='index.php';
				}
			});
	});
});
</script>	
</body>
</html>