<?php
    $a = 10;
    $b = 5;
    $c = 2;
    $d = "ab";
    $e = "AB";
	
    $a += $b;
    echo "$a <br>";
    $a -= $b;
    echo "$a <br>";
    $b *= $c;
    echo "$b <br>";
    $a /= $c;
    echo "$a <br>";
    $a %= $c;
    echo "$a <br>";
    $d .= $e;
    echo "$d <br>";
	
    echo $a < $b;
    echo "<br>";
    echo $b > $c;
    echo "<br>";
    echo $d != $e;
    echo "<br>";

    echo $a < $b && $d != $e;
    echo "<br>";
    echo $a < $b || $d == $e;
?>