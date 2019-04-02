<?php



ob_start();
$title='Thế giới âm nhạc';
include('system/include/settings.inc');
include('system/include/head.inc');


 
    echo '<center><img src="logomusic1.jpg" /></center>';
    echo'<div class = "opis" ><center>';
echo 'Đây là phần đăng nhập quản lý dành cho Quản Trị Viên của hệ thống. Nếu là thành viên vui lòng đăng ký và tải APP về để sử dụng. ';

echo'</center></div>';
 echo'<div class = "opis" ><center>';

echo'</center></div>';
if (isset($_GET['error']))
{ echo'<div id="thongbao"><color="red">Tên đăng nhập hoặc mật khẩu QTV không chính xác.</div>';}
echo'<div class = "auth" >';
echo'<div class = "knopka" >';
echo '<center>';
echo'<form method="post" action="enter.php">';

echo "<b>Tên đăng nhập</b><br/>";

echo "<input name=\"name\" maxlength=\"20\" title=\"nick\" emptyok=\"true\"/><br/>";

echo "<b>Mật khẩu:</b><br/>";
echo "<input name=\"pass\"  type=\"password\"  maxlength=\"20\" title=\"password\" emptyok=\"true\"/><br/>";
echo '<input class="button" type="submit" value="Đăng nhập"/>';
echo'</div></form>';
echo '<center><a href="reg.php">Đăng ký</a>  || <a href="#">Tải APP</a></center>';
echo '</center>';
echo'</div><div class = "opis" >';
echo '<a href="index.php">Trang chủ</a> <br />';
echo'</div>';

include('system/include/end.inc');
?>