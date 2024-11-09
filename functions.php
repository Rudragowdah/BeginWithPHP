<?php

    function hello() {
        echo "This is a simple Hello Function...<br>";
    }
    hello();
    // hello();
    // hello();

    function sum($x,$y) {
        return $x + $y;
    }

    $sum = sum(10,20);
    echo $sum . "<br>";

    function power(int $x, int $y) {
        return pow($x, $y);
    }
    function power2(float $x, float $y) {
        return pow($x,$y);
    }
    echo power(10,2) . "<br>";
    echo power2(10.5,2.5) . "<br>";

?>