<html>
<head>
</head>
<body>
    <h3>섭씨 화씨 변환</h3>
    <table border = '1' width = '300'>
        <tr align = 'center'>
            <th width = '150'>섭씨</th><th width = '150'>화씨</th>
        </tr>
        <?php
            for($c = -15; $c <= 35; $c += 5) {
                $f = $c * 9 / 5 + 32;
                echo "<tr align = 'center'><td>$c</td><td>$f</td></tr>";
            }
        ?>
    </table>
</body>
</html>