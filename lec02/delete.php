<?php
	$con=mysqli_connect("localhost","memberadmin","java301","sqldb")
		or die("mysqlDB 접속 실패");

    $sql="select*from usertbl where userid='".$_GET['userid']."'";
    $ret=mysqli_query($con,$sql);

    if($ret) {
        $count=mysqli_num_rows($ret);
        if($count==0) {
            echo $_GET['userid']."아이디의 회원이 없음"."<br>";
            echo "<br> <a href='main.html'> <-- 초기화면</a>";
            exit();
        }
    } else {
        echo "데이터 조회 실패"."<br>";
        echo "실패 원인: ".mysqli_error($con);
        echo "<br> <a href='main.html'> <-- 초기화면</a>";
        exit();
    }
    $row=mysqli_fetch_array($ret);
    $userid=$row['userid'];
    $name=$row['name'];
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>회원 관리 시스템</title>
</head>
<body>
    <h1>회원 삭제</h1>
    <form method="post" action="delete_result.php">
        아이디: <input type="text" name="userid" value=<?=$userid?> readonly><br>
        이름: <input type="text" name="name" value=<?=$name?> readonly><br><br>
        위 회원을 삭제 하시겠습니까? <input type="submit" value="정보 삭제">
        <button><a href="main.html">뒤로 가기</a></button>
    </form>
</body>
</html>