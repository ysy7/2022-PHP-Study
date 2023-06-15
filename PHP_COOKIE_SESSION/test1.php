<?php
setcookie("myCookie", "kim", time()+3600); //로그인 한 시간동안 유지(초 단위로 설정)
echo $_COOKIE['myCookie'];
?>

<?php
session_start();
$_SESSION['city']='seoul';
$_SESSION['id']='userid';
?>