<?php

function sum($a, $b) {
    $s = $a + $b;
    return "Maxim says, that $a + $b = $s\n";
}

$a = 10;
$b = 15;

echo sum($a, $b);