<?php
	$con=mysqli_connect("localhost","memberadmin","java301","sqldb")
		or die("mysqlDB 접속 실패");

        $userid=$_POST["userid"];
        $name=$_POST["name"];
        $birthyear=$_POST["birthyear"];
        $addr=$_POST["addr"];
        $mobile1=$_POST["mobile1"];
        $mobile2=$_POST["mobile2"];
        $height=$_POST["height"];
        $mdate=date("y-m-j");

    $sql="insert into usertbl values('".$userid."','".$name."','".$birthyear."','".$addr."','".$mobile1."','".$mobile2."','".$height."','".$mdate."')";
    $ret=mysqli_query($con,$sql);

    echo "<h1>신규 회원 입력 결과</h1>";
    if($ret) {
        echo "데이터 입력 성공";
    } else {
        echo "데이터 입력 실패 <br>";
        echo "실패 원인: ".mysqli_error($con);
    }
    mysqli_close($con);
    echo "<br><br> <a href='main.html'> <-- 초기화면</a>";
?>