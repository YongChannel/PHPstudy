<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>회원 관리 시스템</title>
    <style type="text/css"> 
        a { text-decoration: none } 
    </style> 
</head>
<body>
    <h1>신규 회원 입력</h1>
    <form method="post" action="insert_result.php">
        아이디: <input type="text" name="userid"><br>
        이름: <input type="text" name="name"><br>
        출생년도: <input type="text" name="birthyear"><br>
        지역: <input type="text" name="addr"><br>
        휴대폰국번: <input type="text" name="mobile1"><br>
        휴대폰번호: <input type="text" name="mobile2"><br>
        신장: <input type="text" name="height"><br><br>
        <input type="submit" value="회원 입력">
        <button><a href="main.html">뒤로 가기</a></button>
    </form>
</body>
</html>