<?php
session_start();
require("Models/clsLogin.php");

$user = $_REQUEST["username"];
$pass= $_REQUEST["password"];
$people = new clsLogin();
$ketqua = $people->CheckUser($user,$pass);
if($ketqua==FALSE)
{
	?>
        <p>Lỗi CSDL</p>
    <?php
	die();
}
$row = $people->data;
if($row!=NULL)
{

	$_SESSION["logined_h"] ="OK";
	$_SESSION["user"] = $row["fullname"];
	?>
        <p>Đăng nhập thành công</p>
    <?php
	
}
else
{
	?>
        <p>Đăng nhập thất bại</p>
    <?php
}


if(isset($_SESSION["user"])){
    ?>
        <p>Xin chào <?=$_SESSION["user"]?></p>
        <a href="index.php">Đến trang chủ</a>
        <!-- <form id="frmLogout" name="frmLogout" method="post" action="HandleLogout.php">
            <button type="submit">Đăng xuất</button>
        </form> -->
    <?php
}
?>

