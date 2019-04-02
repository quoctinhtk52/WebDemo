<?php
ob_start();
$title='Đăng ký';
include('system/include/settings.inc');
include('system/include/head.inc');
echo '<div class="title"><center>Đăng ký thành viên</center></div><div>';
echo '<center><img src="member.gif" width = 120px height = 120px></center>';
if($thonline == 0)
{
if (isset($_GET['null']))
{ echo'<font color="red"><div id="thongbao">Không được để trống</div></font><br>';}
if (isset($_GET['tenerr']))
{ echo'<font color="red"><div id="thongbao">Họ tên vượt quá kí tự cho phép</div></font><br>';}
if (isset($_GET['ktdb']))
{ echo'<font color="red"><div id="thongbao">Username không được chứa ký tự đặc biệt</div></font><br>';}
if (isset($_GET['tktt']))
{ echo'<font color="red"><div id="thongbao">Username đã tồn tại</div></font><br>';}
if (isset($_GET['chieudai']))
{ echo'<font color="red"><div id="thongbao">Username hoặc Password vượt quá kích thước quy định</div></font><br>';}
if (isset($_GET['sdttt']))
{ echo'<font color="red"><div id="thongbao">Số điện thoại đã tồn tại</div></font><br>';}
if (isset($_GET['sdterr']))
{ echo'<font color="red"><div id="thongbao">Số điện thoại không hợp lệ</div></font><br>';}
if (isset($_GET['gioitinherr']))
{ echo'<font color="red"><div id="thongbao">Giới tính không hợp lệ</div></font><br>';}
if (isset($_GET['ngaysinherr']))
{ echo'<font color="red"><div id="thongbao">Ngày sinh không hợp lệ</div></font><br>';}

switch($_GET[mod])
{
default:
echo '<b><center>Hãy điền đầy đủ các thông tin dưới đây</center>';
echo '<hr>';
echo '*Lưu ý: Nếu nhập khoảng trắng trong Password thì sẽ tự mất. Yêu cầu trên 5 tuổi để đăng ký thành viên<br>';
echo '<form action="reg.php?mod=add" method="post">';
echo"Username: (không quá 10 ký tự, chỉ được nhập chữ và số)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"usr\"/><br/>
Password: (không quá 20 ký tự)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"pass\"/><br/>
Họ và chữ lót: (không quá 20 kí tự) <br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"holot\"/><br/>
Tên: (Không quá 10 kí tự) <br/>
<input class='input' type=\"text\" value=\"$b[mp3]\" size=\"50\" name=\"ten\"/><br/>
SDT:<br/>
<input class='input' type=\"numbers\" value=\"\" size=\"50\" name=\"sdt\"/><br/>
Giới tính: (Nam hoặc Nữ)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"gioitinh\"/><br/>
Ngày sinh: (dạng YYYY-MM-DD) năm trong khoảng 1920 đến 2013 <br/>
<input class='input' type=\"text\" value=\"\" size=\"7\" name=\"nam\"/>
<input class='input' type=\"text\" value=\"\" size=\"5\" name=\"thang\"/>
<input class='input' type=\"text\" value=\"\" size=\"5\" name=\"ngay\"/><br/>
<input class=\"button\" type=\"submit\" value=\"Đăng ký\" /></form>";
break;
case 'add':
$_POST['pass'] = preg_replace('/\s+/', '', ($_POST['pass']));
$dater=date("Y-m-d");
$ngaysinh = $_POST['nam']."-".$_POST['thang']."-".$_POST['ngay'];
$tk = mysql_query("SELECT * FROM `users` WHERE `usr` = '$_POST[usr]'");
$tkr=mysql_num_rows($tk);
$sdt1 = mysql_query("SELECT * FROM `users` WHERE `SDT` = '$_POST[sdt]'");
$sdt2=mysql_num_rows($sdt1);
$so = '/^[0-9]+$/';
if(($_POST[usr]) == '' || ($_POST[pass]) == '' || ($_POST[holot]) == '' || ($_POST[ten]) == '' || ($_POST[sdt]) == '' || ($_POST[gioitinh]) == '' || ($_POST[ngay]) == '' || ($_POST[thang]) == '' || ($_POST[nam]) == '')
        {header ('Location: reg.php?null');exit;}
if (preg_match('/^[a-zA-Z0-9]+$/', ($_POST['usr'])) == false)
        {header ('Location: reg.php?ktdb');exit;}
if($tkr > 0)
        {header ('Location: reg.php?tktt');exit;}
if(strlen($_POST[usr]) > 10 || strlen($_POST[pass]) > 20)
        {header ('Location: reg.php?chieudai');exit;}
if($sdt2 > 0)
        {header ('Location: reg.php?sdttt');exit;}

if (preg_match($so, ($_POST[sdt])) == false)
{header ('Location: reg.php?sdterr');exit;}
if(@strlen($_POST['holot']) > 20 || @strlen($_POST['ten']) > 10)
        {header ('Location: reg.php?tenerr');exit;}
if(($_POST[sdt]) < 1 || @strlen($_POST[sdt]) < 9 || @strlen($_POST[sdt]) > 11 )
        {header ('Location: reg.php?sdterr');exit;}
if($_POST[gioitinh]!='Nam' and ($_POST[gioitinh])!='Nữ')
        {header ('Location: reg.php?gioitinherr');exit;}
if(preg_match($so, ($_POST[ngay])) == false || preg_match($so, ($_POST[thang])) == false || preg_match($so, ($_POST[nam])) == false || (($_POST[ngay]) < 1 || ($_POST[ngay]) > 31) || (($_POST[thang]) < 1 || ($_POST[thang]) > 12) || (($_POST[nam]) > 2013 || ($_POST[nam]) < 1920))
        {header ('Location: reg.php?ngaysinherr');exit;}
if($_POST[thang] == 2 and $_POST[ngay]>29)
        {header ('Location: reg.php?ngaysinherr');exit;}
mysql_query("INSERT INTO
        `users` SET
        `usr` = '$_POST[usr]',
        `pass` = '$_POST[pass]',
        `data_reg` = '$dater',
        `holot` = '$_POST[holot]',
        `ten` = '$_POST[ten]',
        `ngaysinh` = '$ngaysinh',
        `SDT` = '$_POST[sdt]',
        `gioitinh` = '$_POST[gioitinh]',
        `capdo` = 'Thường'");

$myfile = fopen("demo/user.txt", "w");
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC");
$avto=mysql_num_rows($req);
{
$stt = 0;
if($avto>=1){
While($mag = mysql_fetch_array($req)){
$stt = $stt + 1;
if($stt < $avto)
        $txt = $mag[usr]."#";
else
        $txt = $mag[usr];
fwrite($myfile, $txt);
}
}
        
}

fclose($myfile);
/////////////////////////////
$myfile = fopen("demo/pass.txt", "w");
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC");
$avto=mysql_num_rows($req);
{
$stt = 0;
if($avto>=1){
While($mag = mysql_fetch_array($req)){
$stt = $stt + 1;
if($stt < $avto)
        $txt = $mag[pass]."#";
else
        $txt = $mag[pass];
fwrite($myfile, $txt);
}
}
        
}

fclose($myfile);
/////////////////////////////
$myfile = fopen("demo/ngaydangky.txt", "w");
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC");
$avto=mysql_num_rows($req);
{
$stt = 0;
if($avto>=1){
While($mag = mysql_fetch_array($req)){
$stt = $stt + 1;
if($stt < $avto)
        $txt = $mag[data_reg]."#";
else
        $txt = $mag[data_reg];
fwrite($myfile, $txt);
}
}
        
}

fclose($myfile);
/////////////////////////////
$myfile = fopen("demo/holot.txt", "w");
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC");
$avto=mysql_num_rows($req);
{
$stt = 0;
if($avto>=1){
While($mag = mysql_fetch_array($req)){
$stt = $stt + 1;
if($stt < $avto)
        $txt = $mag[holot]."#";
else
        $txt = $mag[holot];
fwrite($myfile, $txt);
}
}
        
}

fclose($myfile);
/////////////////////////////
$myfile = fopen("demo/tentv.txt", "w");
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC");
$avto=mysql_num_rows($req);
{
$stt = 0;
if($avto>=1){
While($mag = mysql_fetch_array($req)){
$stt = $stt + 1;
if($stt < $avto)
        $txt = $mag[ten]."#";
else
        $txt = $mag[ten];
fwrite($myfile, $txt);
}
}
        
}

fclose($myfile);
/////////////////////////////
$myfile = fopen("demo/ngaysinh.txt", "w");
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC");
$avto=mysql_num_rows($req);
{
$stt = 0;
if($avto>=1){
While($mag = mysql_fetch_array($req)){
$stt = $stt + 1;
if($stt < $avto)
        $txt = $mag[ngaysinh]."#";
else
        $txt = $mag[ngaysinh];
fwrite($myfile, $txt);
}
}
        
}

fclose($myfile);
/////////////////////////////
$myfile = fopen("demo/SDT.txt", "w");
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC");
$avto=mysql_num_rows($req);
{
$stt = 0;
if($avto>=1){
While($mag = mysql_fetch_array($req)){
$stt = $stt + 1;
if($stt < $avto)
        $txt = $mag[SDT]."#";
else
        $txt = $mag[SDT];
fwrite($myfile, $txt);
}
}
        
}

fclose($myfile);
/////////////////////////////
$myfile = fopen("demo/gioitinh.txt", "w");
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC");
$avto=mysql_num_rows($req);
{
$stt = 0;
if($avto>=1){
While($mag = mysql_fetch_array($req)){
$stt = $stt + 1;
if($stt < $avto)
        $txt = $mag[gioitinh]."#";
else
        $txt = $mag[gioitinh];
fwrite($myfile, $txt);
}
}
        
}

fclose($myfile);
/////////////////////////////
$myfile = fopen("demo/capdo.txt", "w");
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC");
$avto=mysql_num_rows($req);
{
$stt = 0;
if($avto>=1){
While($mag = mysql_fetch_array($req)){
$stt = $stt + 1;
if($stt < $avto)
        $txt = $mag[capdo]."#";
else
        $txt = $mag[capdo];
fwrite($myfile, $txt);
}
}
        
}

fclose($myfile);
/////////////////////////////
echo '<div id="thongbao">Đăng ký thành công, hãy đăng nhập vào ứng dụng để nghe nhạc.<br><a href=index.php>Trang chủ</a></div>';
break;

}
echo '<a href="index.php"><center>Trang chủ</center></a><br>';
}else{
header ('Location: index.php');
}
echo '<hr>';
include('system/include/end.inc');
?>