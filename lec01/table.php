<html>
<head>
</head>
<body>
<?php
    $kor = 80;
    $eng = 70;
    $mat = 90;
    $sum = $kor + $eng + $mat;
    $avg = $sum / 3;
?>
    <table border="1">
        <tr>
            <td>국어</td>
            <td><?=$kor?></td>
        </tr>
        <tr>
            <td>영어</td>
            <td><?=$eng?></td>
        </tr>
        <tr>
            <td>수학</td>
            <td><?=$mat?></td>
        </tr>
        <tr>
            <td>총점</td>
            <td><?=$sum?></td>
        </tr>
        <tr>
            <td>평균</td>
            <td><?=$avg?></td>
        </tr>
    </table>
</body>
</html>