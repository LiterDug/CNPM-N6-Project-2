<!-- form rời phòng chat-->
    <div class="modal fade" id="leave_room" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Đang rời phòng chat...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h3><center>Bạn đã chắc chưa?</center></h3>
					<span style="font-size: 11px;"><center><i>Lưu ý: Khi bạn rời phòng chat, muốn quay lại phòng cần nhập đúng mật khẩu.</i></center></span>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Hủy</button>
                    <button type="submit" class="btn btn-warning" id="confirm_leave"><span class="glyphicon glyphicon-check"></span> Rời phòng</button>
				
                </div>
            </div>
        </div>
    </div>

<!-- Form xóa phòng chat -->
    <div class="modal fade" id="delete_room" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Đang xóa phòng...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h3><center>Bạn đã chắc chưa?</center></h3>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Hủy</button>
                    <button type="submit" class="btn btn-danger" id="confirm_delete"><span class="glyphicon glyphicon-check"></span> Xóa phòng</button>
				
                </div>
            </div>
        </div>
    </div>

<!-- Form thêm thành viên -->
    <div class="modal fade" id="add_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Thêm thành viên</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="addnewmember.php?id=<?php echo $id; ?>">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Lựa chọn:</span>
						<select style="width:350px;" class="form-control" name="user">
							<?php
							include('../conn.php');
								$mem=array();
								$um=mysqli_query($conn,"select * from `chat_member` where chatroomid='$id'");
								while($umrow=mysqli_fetch_array($um)){
									$mem[]=$umrow['userid'];
								}
								$users=implode("', '", $mem);
								
								$u=mysqli_query($conn,"select * from `user` where userid not in ('".$users."')");
								if(mysqli_num_rows($u)<1){
									?>
									<option value="">Không có người dùng</option>
									<?php
								}
								else{
								while($urow=mysqli_fetch_array($u)){
									?>
										<option value="<?php echo $urow['userid']; ?>"><?php echo $urow['uname']; ?></option>	
									<?php
								}
								}
							
							?>
						</select>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Hủy</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Thêm</button>
					</form>
                </div>
            </div>
        </div>
    </div>