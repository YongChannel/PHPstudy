<?php
	$con=mysqli_connect("localhost","memberadmin","java301","sqldb")
		or die("mysqlDB 접속 실패");

	$sql="create table usertbl
		(userid char(8) not null primary key,
		name varchar(10) not null,
		birthyear int not null,
		addr varchar(10) not null,
		mobile1 char(3),
		mobile2 char(8),
		height smallint,
		mdate date)";

	$ret=mysqli_query($con,$sql);
	if($ret){
		echo "usertbl이 성공적으로 생성";
	} else{
		echo "usertbl이 생성 실패"."<br>";
		echo "실패 원인: ".mysqli_error($con);
	}

	mysqli_close($con);
?>