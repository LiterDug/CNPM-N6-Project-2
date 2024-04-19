<div class="col-lg-12">
    <div class="panel panel-default" style="height:50px;">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span class="glyphicon glyphicon-list"></span> Danh sách phòng chat</strong></span>
	</div>
	<table width="100%" class="table table-striped table-bordered table-hover" id="chatRoom">
        <thead>
            <tr>
                <th>Tên phòng chat</th>
                <th>Mật khẩu</th>
				<th>Ngày khởi tạo</th>
				<th>Quản lý</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$query=mysqli_query($conn,"select * from chatroom order by date_created desc");
			while($row=mysqli_fetch_array($query)){
				$num=mysqli_query($conn,"select * from chat_member where chatroomid='".$row['chatroomid']."'");
			?>
			<tr>
				<td><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($num); ?></span> <input type="hidden" id="name<?php echo $row['chatroomid']; ?>" value="<?php echo $row['chat_name']; ?>"><?php echo $row['chat_name']; ?></td>
				<td><input type="hidden" id="pass<?php echo $row['chatroomid']; ?>" value="<?php echo $row['chat_password']; ?>"><?php echo $row['chat_password']; ?></td>
				<td><?php echo date('M d, Y - h:i A', strtotime($row['date_created'])); ?></td>
				<td> 

					<button class="btn btn-danger delete" value="<?php echo $row['chatroomid']; ?>"><span class="glyphicon glyphicon-trash"></span> Xóa</button>
				</td>
			</tr>
			<?php
			}
		?>
        </tbody>
    </table>                     
</div>