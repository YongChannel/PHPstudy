<html>
<head>
</head>
<body>
    <table border = '1' width = '700'>
        <tr align = 'center'>
            <th>2단</th><th>3단</th><th>4단</th><th>5단</th>
                <th>6단</th><th>7단</th><th>8단</th><th>9단</th>
        </tr>
    <?php
        for($b = 1; $b <= 9; $b++) {
            echo "<tr align = 'left'>";
            for($a = 2; $a <= 9; $a++) {
                $c = $a * $b;
                echo "<td> $a X $b = $c </td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>