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
    $birthyear=$row['birthyear'];
    $addr=$row['addr'];
    $mobile1=$row['mobile1'];
    $mobile2=$row['mobile2'];
    $height=$row['height'];
    $mdate=$row['mdate'];
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>회원 관리 시스템</title>
</head>
<body>
    <h1>회원 정보 수정</h1>
    <form method="post" action="update_result.php">
        아이디: <input type="text" name="userid" value=<?=$userid?> readonly><br>
        이름: <input type="text" name="name" value=<?=$name?> readonly><br>
        출생년도: <input type="text" name="birthyear" value=<?=$birthyear?>><br>
        지역: <input type="text" name="addr" value=<?=$addr?>><br>
        휴대폰국번: <input type="text" name="mobile1" value=<?=$mobile1?>><br>
        휴대폰번호: <input type="text" name="mobile2" value=<?=$mobile2?>><br>
        키: <input type="password" name="height" value=<?=$height?>><br>
        가입일: <input type="text" name="mdate" value=<?=$mdate?> readonly><br><br>
        위 정보를 수정하시겠습니까? <input type="submit" value="정보 수정">
        <button><a href="main.html">뒤로 가기</a></button>
    </form>
</body>
</html>