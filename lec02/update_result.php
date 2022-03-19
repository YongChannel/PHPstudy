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
    $mdate=$_POST["mdate"];

    $sql="update usertbl set 
        name='".$name."',
        birthyear='".$birthyear."',
        addr='".$addr."',
        mobile1='".$mobile1."',
        mobile2='".$mobile2."',
        height='".$height."',
        mdate='".$mdate."' where userid='".$userid."'";
    
    $ret=mysqli_query($con,$sql);
        echo "<h1>회원 정보 수정 결과</h1>";
        if($ret) {
            echo "데이터 수정 성공"."<br>";
        } else {
            echo "데이터 수정 실패"."<br>";
            echo "실패 원인: ".mysqli_error($con);
        }
    mysqli_close($con);
    echo "<br> <a href='main.html'> <-- 초기화면</a>";
?>
