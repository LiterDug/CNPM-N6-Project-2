<!DOCTYPE html>
<html>
<head>
	<title>NHÓM 6</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#signup_form{
		width:350px;
		height:430px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
        #backgroundImage {
            background-image: url('Bgr.jpg');
           
            background-size: 100%;
            
            height:850px;
            width:100%;
        }
</style>
</head>
<body>
<div id = "backgroundImage" class = "image">
<div class="container">
	<div id="signup_form" class="well">
		<h2><center><span class="glyphicon glyphicon-user"></span> Đăng ký</center></h2>
		<hr>
		<form method="POST" action="register.php">
		Name: <input type="text" name="name" class="form-control" required>
		<div style="height: 10px;"></div>
		Username: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Đăng ký</button> <a href="index.php"> Trở lại đăng nhập</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['sign_msg'])){
					echo $_SESSION['sign_msg'];
					unset($_SESSION['sign_msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>