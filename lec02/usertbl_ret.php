<?php
	$con=mysqli_connect("localhost","memberadmin","java301","sqldb")
		or die("mysqlDB 접속 실패");

	$sql="insert into usertbl values
		('LSG','이승기','1987','서울 강남','010','11111111',182,'2008-08-08'),
		('KBS','김범수','1979','서울 여의도','010','22222222',173,'2012-04-04'),
		('KKH','김경호','1971','서울 강북','019','33333333',177,'2007-07-07'),
		('JYP','조용필','1950','서울 강서','011','56785678',166,'2012-12-12'),
		('LJB','임재범','1963','경기 안양','019','12341234',182,'2009-09-09')";

	$ret=mysqli_query($con,$sql);
	if($ret){
		echo "usertbl이 성공적으로 생성";
	} else{
		echo "usertbl이 생성 실패"."<br>";
		echo "실패 원인: ".mysqli_error($con);
	}

	mysqli_close($con);
?>