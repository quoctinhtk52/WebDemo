<?php


ob_start();

include('system/include/settings.inc');
if($thonline==1)
        header ('Location: choosing.php?');
if(isset($_GET['cookie'])){echo '<center><b>Trình duyệt của bạn đã vô hiệu hóa cookie, để đăng nhập bạn phải mở lại.</b></center>';}
$log = htmlspecialchars(stripslashes(addslashes($_POST['name'])));
$pass = htmlspecialchars(stripslashes(addslashes($_POST['pass'])));
$pass=$pass;
$req = mysql_query("SELECT * FROM `users` WHERE `usr` = '$log' and `pass`='$pass' LIMIT 1");
$avto = mysql_num_rows($req);
if ($log == 'Admin' and $avto==1){
$pass =  trim($pass);
session_start();
$_SESSION['log']=$log;
$_SESSION['pass']=$pass;
setcookie("log", $log, time() + 3600 * 24 );
setcookie("pas", $pass, time() + 3600 * 24 );
header ('Location: choosing.php?loginok');
}else {
header ('Location: index.php?error');exit;
}       
ob_end_flush();
?>

