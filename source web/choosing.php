<?php
ob_start();
$title='Quản lý';
include('system/include/settings.inc');
include('system/include/head.inc');
echo '<div class="title"><center>Chức năng Quản Trị Viên</center></div><div>';
if($thonline == 1)
{
    echo '<center><img src="quantri1.jpg"></center>';
    echo '<center>';
        if (isset($_GET['loginok']))
        { echo'<font color="red"><div id="thongbao">Đăng nhập thành công</div></font><br>';}
        if (isset($_GET['null']))
        { echo'<font color="red"><div id="thongbao">Không được để trống</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['tenerr']))
        { echo'<font color="red"><div id="thongbao">Họ tên vượt quá kí tự cho phép</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['ktdb']))
        { echo'<font color="red"><div id="thongbao">Username không được chứa ký tự đặc biệt</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['tktt']))
        { echo'<font color="red"><div id="thongbao">Username đã tồn tại</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['chieudai']))
        { echo'<font color="red"><div id="thongbao">Username vượt quá kích thước quy định</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['sdterr']))
        { echo'<font color="red"><div id="thongbao">Số điện thoại không hợp lệ</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['gioitinherr']))
        { echo'<font color="red"><div id="thongbao">Giới tính không hợp lệ</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['ngaysinherr']))
        { echo'<font color="red"><div id="thongbao">Ngày sinh không hợp lệ</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['capdoerr']))
        { echo'<font color="red"><div id="thongbao">Cấp độ không hợp lệ</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['sdttt']))
        { echo'<font color="red"><div id="thongbao">Số điện thoại đẫ tồn tại</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
        if (isset($_GET['bhcd']))
        { echo'<font color="red"><div id="thongbao">Chiều dài ký tự vượt quá mức cho phép</div></font><a href="javascript: history.go(-1)">  Trở lại</a><br>';}
    echo '</center>';
switch($_GET[mod])
{
default:
    echo '<br><br><div style="border-bottom: 1px solid #0099FF; margin-left: 4px; margin-right: 4px;"></div><div style="background-color: #fff; border-left: 2px solid #0099FF; border-right: 2px solid #0099FF; padding-top: 1px; margin-left: 2px; margin-right: 2px;"></div><div style="background-color: #fff; border-left: 1px solid #0099FF; border-right: 1px solid #0099FF; padding-top: 2px; margin-left: 1px; margin-right: 1px;"></div><div style="background: #fff repeat bottom; padding-left: 2px; border-left: 1px solid #0099FF; padding-right: 3px; border-right: 1px solid #0099FF;" align="center"><b> <b style="color: #0099FF;">Dưới đây là các chức năng mà Quản Trị có thể dùng </b> </b> </a></div><div style="background-color: #fff; border-left: 1px solid #0099FF; border-right: 1px solid #0099FF; padding-top: 2px; margin-left: 1px; margin-right: 1px;"></div><div style="background-color: #fff; border-left: 2px solid #0099FF; border-right: 2px solid #0099FF; padding-top: 1px; margin-left: 2px; margin-right: 2px;"></div><div style="border-bottom: 1px solid #0099FF; margin-left: 4px; margin-right: 4px;"></div></td><table width="100%"> <tbody><tr> <td width="50%"> <div style="background-color: #ffffff; border-style: double; border-width: 1px; border-color: #88beff;" align="center"> <b> <b style="color:#FF0000;"><a href="choosing.php?mod=ds_bh"> <b> <b style="color: #ff00ff;">Danh sách bài hát</b> </b> </a></b> </b> </div> <b> </b> </td> <td width="50%"> <b> <b style="color: #FF0000;"> </b> </b> <div style="background-color: #ffffff; border-style: double; border-width: 1px; border-color: #88beff;" align="center"> <b> <b style="color:#FF0000;"> <b> <b style="color:#FF0000;"><a href="choosing.php?mod=ds_tv"> <b> <b style="color: #FF9900;">Danh sách thành viên</b> </b> </a></b> </b> </b> </b> </div> </td> </tr> </tbody></table><td><div style="border-bottom: 1px solid #0099FF; margin-left: 4px; margin-right: 4px;"></div><div style="background-color: #fff; border-left: 2px solid #0099FF; border-right: 2px solid #0099FF; padding-top: 1px; margin-left: 2px; margin-right: 2px;"></div><div style="background-color: #fff; border-left: 1px solid #0099FF; border-right: 1px solid #0099FF; padding-top: 2px; margin-left: 1px; margin-right: 1px;"></div><div style="background: #fff repeat bottom; padding-left: 2px; border-left: 1px solid #0099FF; padding-right: 3px; border-right: 1px solid #0099FF;" align="center"><a href="choosing.php?mod=exit"> <b> <b style="color: #00CC00;">Đăng xuất</b> </b> </a></div><div style="background-color: #fff; border-left: 1px solid #0099FF; border-right: 1px solid #0099FF; padding-top: 2px; margin-left: 1px; margin-right: 1px;"></div><div style="background-color: #fff; border-left: 2px solid #0099FF; border-right: 2px solid #0099FF; padding-top: 1px; margin-left: 2px; margin-right: 2px;"></div><div style="border-bottom: 1px solid #0099FF; margin-left: 4px; margin-right: 4px;"></div></td></div>';
    
    echo '<hr size="5px" color="black" /> ';
break;
case 'exit':
setcookie('log', '');
setcookie('pas', '');
$thonline == 0;
session_destroy();

    echo '<div id="thongbao"><b>Thoát thành công</b></div><br>';

break;
case 'ds_tv':
    echo '<center><b><font color="#01DF01">Dưới đây là danh sách thành viên có trong hệ thống</font></b></center>';
    echo '<div style="overflow-x:auto;">';
    echo '<br><table border="1">
    <tbody>
    <tr>
    <td align="center" bgcolor="#D0F5A9" width="5%"><font color="#004800">Mã thành viên</font></td>
    <td align="center" bgcolor="#D0F5A9" width="10%"><font color="#004800">Tên nặc danh</font></td>
    <td align="center" bgcolor="#D0F5A9" width="15%"><font color="#004800">Họ và chữ lót</font></td>
    <td align="center" bgcolor="#D0F5A9" width="10%"><font color="#004800">Tên</font></td>
    <td align="center" bgcolor="#D0F5A9" width="20%"><font color="#004800">Ngày sinh</font></td>
    <td align="center" bgcolor="#D0F5A9" width="10%"><font color="#004800">SĐT</font></td>
    <td align="center" bgcolor="#D0F5A9" width="5%"><font color="#004800">Giới tính</font></td>
    <td align="center" bgcolor="#D0F5A9" width="25%"><font color="#004800">Cấp độ</font></td>
    <td align="center" bgcolor="#D0F5A9"><font color="#004800">Hành động</font></td></tr>';
$at_page=10;
$page = (int)$_GET['page'];
$s=mysql_result(mysql_query("SELECT COUNT(`id`) FROM `users`"),0);
$total = intval(($s - 1) / $at_page) + 1;
$page = (int)$page;
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$from = $page * $at_page - $at_page;
$req = mysql_query("SELECT * FROM `users` ORDER BY `id` ASC LIMIT ".$from.",".$at_page."");
$avto=mysql_num_rows($req);
{

if($avto>=1){
While($mag = mysql_fetch_array($req)){

 echo '<tr>
         <td align="center" width="5%"><font color="#004800">'.$mag[id].'</font></td>
         <td align="center" width="10%"><font color="#004800">'.$mag[usr].'</font></td>
         <td align="center" width="15%"><font color="#004800">'.$mag[holot].'</font></td>
         <td align="center" width="10%"><font color="#004800">'.$mag[ten].'</font></td>
         <td align="center" width="20%"><font color="#004800">'.$mag[ngaysinh].'</font></td>
         <td align="center" width="10%"><font color="#004800">'.$mag[SDT].'</font></td>
         <td align="center" width="5%"><font color="#004800">'.$mag[gioitinh].'</font></td>
         <td align="center" width="15%"><font color="#004800">'.$mag[capdo].'</font></td>
         <td align="center" width="10%"><font color="red"><a href="choosing.php?mod=sua_tv&&maso='.$mag[id].'">[Sửa]</a></font></td></tr>';

}
echo '</tbody></table></div>';
}else{
echo'<b>Không có thành viên nào trong danh sách.</b><br/>';}
}
echo '<div class="trang">';
echo'<b>';
if($s > 1)
{
if($s > $onpage) echo '';
if ($page >= 10) $go1 = '<a href= ?mod=ds_tv&page=1>1</a> ... ';
if ($page != $total and $page != $total-1) $outpage = ' ... <a href= ?mod=ds_tv&page=' .$total. '>'.$total.'</a>';
if($page - 2 > 0) $page2left = ' <a href= ?mod=ds_tv&page='. ($page - 2) .'>'. ($page - 2) .'</a> ';
if($page - 1 > 0) $page1left = '<a href= ?mod=ds_tv&page='. ($page - 1) .'>'. ($page - 1) .'</a> ';
if($page + 2 <= $total) $page2right = ' <a href= ?mod=ds_tv&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' <a href= ?mod=ds_tv&page='. ($page + 1) .'>'. ($page + 1) .'</a>';
if($s > $onpage) echo 'Trang: '.$go1.''.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.''.$outpage.'<br/>';
}
echo'</b>';
echo'</div>';
break;
case 'sua_tv':

 $id=abs(intval($_GET['maso']));
    $req1 = mysql_query("SELECT * FROM `users` WHERE `id`='$id'");
    $b = mysql_fetch_array($req1);
$avto1=mysql_num_rows($req1);
if($avto1<1)
{
    echo '<div id="thongbao">Thành viên không tồn tại.</div><br>';
break;
}
else
{
    echo '<b><center>Hãy sửa lại các thông tin theo mong muốn<hr>
    <br>Mã số :</b> '.$id.'
    <br><b>Username :</b> '.$b[usr].'
    <br><b>Họ và chữ lót :</b> '.$b[holot].'
    <br><b>Tên :</b> '.$b[ten].'
    <br><b>Ngày sinh :</b> '.$b[ngaysinh].'
    <br><b>SĐT :</b> '.$b[SDT].'
    <br><b>Giới tính :</b> '.$b[gioitinh].'
    <br><b>Cấp độ :</b> '.$b[capdo].'</center><br>';
    echo '<form action="choosing.php?mod=sua_tvxong&id='.$id.'" method="post">';
echo"Họ và chữ lót: (không quá 20 kí tự)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"holot\"/><br/>
Tên: (Không quá 10 kí tự)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"ten\"/><br/>
Ngày sinh: năm trong khoảng 1920 đến 2013 (dạng YYYY-MM-DD)<br/>
<input class='input' type=\"text\" value=\"\" size=\"7\" name=\"nam\"/>
<input class='input' type=\"text\" value=\"\" size=\"5\" name=\"thang\"/>
<input class='input' type=\"text\" value=\"\" size=\"5\" name=\"ngay\"/><br/>
SĐT (trong khoảng 9 đến 11 số)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"SDT\"/><br/>
Giới tính: (Nam hoặc Nữ)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"gioitinh\"/><br/>
Cấp độ (Thường hoặc Vip)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"capdo\"/><br/>
<input class=\"button\" type=\"submit\" value=\"Sửa\" /></form>";
}
break;
case 'sua_tvxong':
    $id=abs(intval($_GET['id']));
$sdt1 = mysql_query("SELECT * FROM `users` WHERE `SDT` = '$_POST[SDT]'");
$sdt2=mysql_num_rows($sdt1);
    $req1 = mysql_query("SELECT * FROM `users` WHERE `id`='$id'");
    $b = mysql_fetch_array($req1);
$avto1=mysql_num_rows($req1);
            if($avto1<1)
             {
                echo '<div id="thongbao">Thành viên không tồn tại.</div><br>';
              }
            else
                {
                $ngaysinh = $_POST['nam']."-".$_POST['thang']."-".$_POST['ngay'];
                $so = '/^[0-9]+$/';
if(($_POST[holot]) == '' || ($_POST[ten]) == '' || ($_POST[SDT]) == '' || ($_POST[gioitinh]) == '' || ($_POST[ngay]) == '' || ($_POST[thang]) == '' || ($_POST[nam]) == '' || ($_POST[capdo]) == '')
        {header ('Location: choosing.php?null');exit;}
if (preg_match($so, ($_POST[SDT])) == false)
{header ('Location: choosing.php?sdterr');exit;}
if(@strlen($_POST['holot']) > 20 || @strlen($_POST['ten']) > 10)
        {header ('Location: choosing.php?tenerr');exit;}
if(($_POST[SDT]) < 1 || @strlen($_POST[SDT]) < 9 || @strlen($_POST[SDT]) > 11 )
        {header ('Location: choosing.php?sdterr');exit;}
if($b['SDT'] != ($_POST['SDT']))
{
        if($sdt2 > 0)
                {header ('Location: choosing.php?sdttt');exit;}     
}
if($_POST[gioitinh]!='Nam' and ($_POST[gioitinh])!='Nữ')
        {header ('Location: choosing.php?gioitinherr');exit;}
        if($_POST[capdo]!='Thường' and ($_POST[capdo])!='Vip')
        {header ('Location: choosing.php?capdoerr');exit;}
if(preg_match($so, ($_POST[ngay])) == false || preg_match($so, ($_POST[thang])) == false || preg_match($so, ($_POST[nam])) == false || (($_POST[ngay]) < 1 || ($_POST[ngay]) > 31) || (($_POST[thang]) < 1 || ($_POST[thang]) > 12) || (($_POST[nam]) > 2013 || ($_POST[nam]) < 1920))
        {header ('Location: choosing.php?ngaysinherr');exit;}
if($_POST[thang] == 2 and $_POST[ngay]>29)
        {header ('Location: choosing.php?ngaysinherr');exit;}
            mysql_query("UPDATE
            `users` SET
            `holot` = '$_POST[holot]',
            `ten` = '$_POST[ten]',
            `ngaysinh` = '$ngaysinh',
            `SDT` = '$_POST[SDT]',
            `gioitinh` = '$_POST[gioitinh]',
            `capdo` = '$_POST[capdo]'
            WHERE `id`='$id' LIMIT 1") or die (mysql_error());
            echo '<div id="thongbao"><b><font color=green>Sửa thành công</font></b></div><br/>';
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
                }

break;
case 'ds_bh':
    echo '<center><b><font color="#01DF01">Dưới đây là danh sách bài hát có trong hệ thống</font></b></center>';
    echo '<div style="overflow-x:auto;">';
    echo '<br>
    <table border="1">
    <tbody>
    <tr>
            <td align="center" bgcolor="#D0F5A9" width="15%"><font color="#004800">Mã số</font></td>
            <td align="center" bgcolor="#D0F5A9" width="15%"><font color="#004800">Tên bài hát</font></td>
            <td align="center" bgcolor="#D0F5A9" width="15%"><font color="#004800">Thể loại</font></td>
            <td align="center" bgcolor="#D0F5A9" width="15%"><font color="#004800">Ca sĩ</font></td>
            <td align="center" bgcolor="#D0F5A9" width="20%"><font color="#004800">Đường dẫn</font></td>
            <td align="center" bgcolor="#D0F5A9" width="20%"><font color="#004800">Ảnh</font></td>
            <td align="center" bgcolor="#D0F5A9" width="10%"><font color="#004800">Hành động</font></td>
    </tr>';
$at_page=10;
$page = (int)$_GET['page'];
$s=mysql_result(mysql_query("SELECT COUNT(`idBH`) FROM `baihat`"),0);
$total = intval(($s - 1) / $at_page) + 1;
$page = (int)$page;
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$from = $page * $at_page - $at_page;
$req = mysql_query("SELECT * FROM `baihat` ORDER BY `idBH` ASC LIMIT ".$from.",".$at_page."");
$avto=mysql_num_rows($req);
{

if($avto>=1){
While($mag = mysql_fetch_array($req)){
echo '
<tr>
<td align="center"><font color="#1C1C1C">'.$mag[idBH].'</font></td>
<td align="center"><font color="#1C1C1C">'.$mag[TenBH].'</font></td>
<td align="center"><font color="#1C1C1C">'.$mag[theloai].'</font></td>
<td align="center"><font color="#1C1C1C">'.$mag[casi].'</font></td>
<td align="center"><font color="#1C1C1C">'.$mag[mp3].'</font></td>
<td align="center"><font color="#1C1C1C">'.$mag[anh].'</font></td>
<td align="center"><font color="red"><a href="choosing.php?mod=xoa_bh&&maso='.$mag[idBH].'">[Xóa]</a></font>
| <font color="red"><a href="choosing.php?mod=sua_bh&&maso='.$mag[idBH].'">[Sửa]</a></font></td>
</tr>';

}
echo '</tbody></table>';
echo '</div>';
}else{
echo'<b>Không có bài hát nào trong danh sách.</b><br/>';}
}
echo '<div class="trang">';
echo'<b>';
if($s > 1)
{
if($s > $onpage) echo '';
if ($page >= 10) $go1 = '<a href= ?mod=ds_bh&page=1>1</a> ... ';
if ($page != $total and $page != $total-1) $outpage = ' ... <a href= ?mod=ds_bh&page=' .$total. '>'.$total.'</a>';
if($page - 2 > 0) $page2left = ' <a href= ?mod=ds_bh&page='. ($page - 2) .'>'. ($page - 2) .'</a> ';
if($page - 1 > 0) $page1left = '<a href= ?mod=ds_bh&page='. ($page - 1) .'>'. ($page - 1) .'</a> ';
if($page + 2 <= $total) $page2right = ' <a href= ?mod=ds_bh&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' <a href= ?mod=ds_bh&page='. ($page + 1) .'>'. ($page + 1) .'</a>';
if($s > $onpage) echo 'Trang: '.$go1.''.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.''.$outpage.'<br/>';
}
echo'</b>';
echo'</div>';
echo'<b><a href="choosing.php?mod=them_bh">Thêm bài hát</a></b><br/>';
break;
case 'them_bh':
    echo '<center><b>Hãy nhập thông tin bài hát cần thêm vào hệ thống. Đường dẫn được lấy từ nguồn Zing Mp3</b></center><hr>';
    echo '<form action="choosing.php?mod=them" method="post">';
echo"Tên bài hát: (Không quá 70 ký tự)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"ten\"/><br/>
Ca sĩ: (không quá 40 ký tự) <br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"casi\"/><br/>
Thể loại: (không quá 20 ký tự)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"theloai\"/><br/>
Đường dẫn:<br/>
<input class='input' type=\"text\" value=\"\" size=\"60\" name=\"duongdan\"/><br/>
Ảnh:<br/>
<input class='input' type=\"text\" value=\"\" size=\"60\" name=\"anh\"/><br/>
<input class=\"button\" type=\"submit\" value=\"Thêm\" /></form>";
break;
case 'them':
    if(($_POST[ten]) == '' || ($_POST[casi]) == '' || ($_POST[theloai]) == '' || ($_POST[duongdan]) == '' || ($_POST[anh]) == '' )
         {header ('Location: choosing.php?null');exit;}
    if(@strlen($_POST[ten]) > 70 || @strlen($_POST[casi]) > 40 || @strlen($_POST[theloai]) > 20 )
        {header ('Location: choosing.php?bhcd');exit;}
        else
        {
            mysql_query("INSERT INTO
            `baihat` SET
            `TenBH` = '$_POST[ten]',
            `theloai` = '$_POST[theloai]',
            `casi` = '$_POST[casi]',
            `mp3` = '$_POST[duongdan]',
            `anh` = '$_POST[anh]'") or die (mysql_error());
            echo '<div id="thongbao"><b><font color=green>Thêm thành công</font></b></div><br/>';
        }
            
break;
case 'sua_bh':
     $id=abs(intval($_GET['maso']));
    $req1 = mysql_query("SELECT * FROM `baihat` WHERE `idBH`='$id'");
    $b = mysql_fetch_array($req1);
$avto1=mysql_num_rows($req1);
if($avto1<1)
{
    echo '<div id="thongbao">Bài hát không tồn tại.</div><br>';
break;
}
else
{
    echo '<b><center>Hãy sửa lại các thông tin theo mong muốn<hr>
    <br>Mã số :</b> '.$id.'
    <br><b>Tên bài hát :</b> '.$b[TenBH].'
    <br><b>Ca sĩ :</b> '.$b[casi].'
    <br><b>Thể loại :</b> '.$b[theloai].'
    <br><b>Liên kết nguồn :</b> '.$b[mp3].'
    <br><b>Ảnh :</b> '.$b[anh].'</b></center><br>';
    echo '<form action="choosing.php?mod=sua&id='.$id.'" method="post">';
echo"Tên bài hát: (Không quá 70 ký tự)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"ten\"/><br/>
Ca sĩ: (không quá 40 ký tự)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"casi\"/><br/>
Thể loại: (không quá 20 ký tự)<br/>
<input class='input' type=\"text\" value=\"\" size=\"50\" name=\"theloai\"/><br/>
Liên kết nguồn:<br/>
<input class='input' type=\"text\" value=\"\" size=\"60\" name=\"duongdan\"/><br/>
Ảnh:<br/>
<input class='input' type=\"text\" value=\"\" size=\"60\" name=\"anh\"/><br/>
<input class=\"button\" type=\"submit\" value=\"Sửa\" /></form>";
}
break;
case 'sua':
if(($_POST[ten]) == '' || ($_POST[casi]) == '' || ($_POST[theloai]) == '' || ($_POST[duongdan]) == '' || ($_POST[anh]) == '' )
{header ('Location: choosing.php?null');exit;}
    $id=abs(intval($_GET['id']));
    $req1 = mysql_query("SELECT * FROM `baihat` WHERE `idBH`='$id'");
$avto1=mysql_num_rows($req1);
            if($avto1<1)
             {
                echo '<div id="thongbao">Bài hát không tồn tại.</div><br>';
            }
            else
                {
                
                 if(@strlen($_POST[ten]) > 70 || @strlen($_POST[casi]) > 40 || @strlen($_POST[theloai]) > 20 )
                 {header ('Location: choosing.php?bhcd');exit;}
            mysql_query("UPDATE
            `baihat` SET
            `TenBH` = '$_POST[ten]',
            `theloai` = '$_POST[theloai]',
            `casi` = '$_POST[casi]',
            `mp3` = '$_POST[duongdan]',
            `anh` = '$_POST[anh]'
            WHERE `idBH`='$id' LIMIT 1") or die (mysql_error());
            echo '<div id="thongbao"><b><font color=green>Sửa thành công</font></b></div><br/>';
                }
    
break;
case 'xoa_bh':
    $id=abs(intval($_GET['maso']));
    $req1 = mysql_query("SELECT * FROM `baihat` WHERE `idBH`='$id'");
$avto1=mysql_num_rows($req1);
if($avto1>=1){
    echo '<div id="thongbao"><b>Xóa thành công</b></div><br>';
    mysql_query("DELETE FROM `baihat` WHERE `idBH`='$id'");
}else
echo '<div id="thongbao"><b>Bài hát không tồn tại</b></div><br>';
    
    
break;

}
echo '<a href="?"><center>Trang chủ</center></a><br>';
}else{
header ('Location: index.php');
}
echo '<hr>';
include('system/include/end.inc');
?>
