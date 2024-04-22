<!-- Thanh điều hướng -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="">Admin - NHÓM 6</a>
		</div>

		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-list"></span> Quản lý phòng chat</a></li>
			<li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Quản lý tài khoản</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> <?php echo $user; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
                    </ul>
			</li>
		</ul>
    </div>
</nav>
