<?php

session_start();

$host = 'fdb23.biz.nf';
$user = '2837907_quang';
$pass = 'thanhquang1';
$table = '2837907_quang' ;
$connect = @ mysql_pconnect($host, $user, $pass) or die("không thể kết nối đến MySql...");

@ mysql_select_db($table) or die("không thể kết nối đến MySql...");
date_default_timezone_set('Asia/Ho_Chi_Minh');
@ mysql_query("SET NAMES 'utf8'", $connect);
$ip = $_SERVER['REMOTE_ADDR'];
$brauser=htmlspecialchars(stripslashes($_SERVER['HTTP_USER_AGENT']));
$thonline = 0;
session_start();
if (isset ($_SESSION['log']) && isset ($_SESSION['pass'])) {
    $log = $_SESSION['log'];
    $pas = $_SESSION['pass'];
}
elseif (isset ($_COOKIE['log']) && isset ($_COOKIE['pas'])) {
    $log = base64_decode($_COOKIE['log']);
    $_SESSION['log'] = $log;
    $pas = $_COOKIE['pas'];
    $_SESSION['pass'] = $pas;
}
$req = mysql_query("SELECT * FROM `users` WHERE `usr` = '$log' and `pass`='$pas' LIMIT 1");
$avto = mysql_num_rows($req);
if ($avto == 1)
    $thonline = 1;

$login = $_SESSION['log'];
////


?>
