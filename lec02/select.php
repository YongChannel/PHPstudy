<?php
	$con=mysqli_connect("localhost","memberadmin","java301","sqldb")
		or die("mysqlDB 접속 실패");

	$sql="select*from usertbl";

    $ret=mysqli_query($con, $sql);
    if($ret) {
        echo mysqli_num_rows($ret), "건이 조회 됨..<br><br>";
        $count=mysqli_num_rows($ret);
    } else {
        echo "usertbl 데이터 조회 실패<br>";
        echo "실패 원인: ".mysqli_error($con);
        exit();
    }
    
    echo "<h1>회원 조회 결과</h1>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>아이디</th><th>이름</th><th>출생년도</th><th>지역</th><th>국번</th>";
    echo "<th>전화번호</th><th>키</th><th>가입일</th><th>수정</th><th>삭제</th>";
    echo "</tr>";

    while($row=mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>", $row['userid'], "</td>";
        echo "<td>", $row['name'], "</td>";
        echo "<td>", $row['birthyear'], "</td>";
        echo "<td>", $row['addr'], "</td>";
        echo "<td>", $row['mobile1'], "</td>";
        echo "<td>", $row['mobile2'], "</td>";
        echo "<td>", $row['height'], "</td>";
        echo "<td>", $row['mdate'], "</td>";
        echo "<td>", "<a href='update.php?userid=",$row['userid'],"'>수정</a></td>";
        echo "<td>", "<a href='delete.php?userid=",$row['userid'],"'>삭제</a></td>";
        echo "</tr>";
    }
    mysqli_close($con);
    echo "</table>";
    echo "<br> <a href='main.html'> <-- 초기화면</a>";
?>
