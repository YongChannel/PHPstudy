<?php
	$con=mysqli_connect("localhost","memberadmin","java301","sqldb")
        or die("mysqlDB 접속 실패");

    $userid=$_POST['userid'];
    $sql="delete from usertbl where userid='".$userid."'";
    $ret=mysqli_query($con,$sql);

    echo "<h1>회원 삭제 결과</h1>";
    if($ret) {
        echo $userid."회원이 성공적으로 삭제됨..";
    } else {
        echo "데이터 삭제 실패"."<br>";
        echo "실패 원인: ".mysqli_error($con);
    }
    mysqli_close($con);
    echo "<br> <a href='main.html'> <-- 초기화면</a>";
?>