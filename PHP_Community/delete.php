<?php
//접속
include('./db_conn.php');

//1. 사용자가 입력한 비밀번호 맞을 수도 있고, 틀릴 수도 있음
$_pass = $_POST['password'];
echo "사용자가 입력한 password: ".$_pass."<br/>";

//1-1. 아이디값 가지고 와서 출력하기
$_idx = $_POST["b"];
echo "삭제할 idx: ".$_idx."<br/>";

//2. 진짜 비밀번호 가지고 옴 -- select
$query = "select * from bbs where id=$_idx";
$result = mysqli_query($conn, $query); //$result: 2차원 배열
$re = mysqli_fetch_row($result); //한 줄씩 가지고 오기

// 진짜 비밀번호 출력하기
if($_pass===($re[3])){//타입까지 맞아야 함
    $query = "delete from bbs where id=$_idx";
    mysqli_query($conn, $query);
    echo "삭제되었습니다";      
}else {
    echo "<script>alert('비밀번호 오류');history.go(-1);s</script>";
}
?>
<meta http-equiv="refresh" content="0; url=http://localhost/bbs/">