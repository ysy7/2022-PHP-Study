<?php
//로그인 안 되어 있을 경우(cookie가 없음)
if(!isset($_COOKIE['userid'])or !isset($_COOKIE['userpass'])){
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}
//로그인 되었을 경우
//~~님 반갑습니다 출력
$_userid=$_COOKIE['userid'];
$_passwd=$_COOKIE['userpass'];

echo "<p>".$_userid."님 반갑습니다</p>";

?>

<a href="logout.php">로그아웃<a>