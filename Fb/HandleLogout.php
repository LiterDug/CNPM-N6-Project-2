<?php
session_start();
if(null !== $_SESSION["logined_h"]){
    session_destroy();
    ?>
        <p>Đăng xuất thành công<p>
        <a href="Login.php">Đến trang đăng nhập</a>
    <?php
}
?>