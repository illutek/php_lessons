<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 25/01/2016
 * Time: 11:01
 */

function foobar(): int {
    return 50; // strictly type-checked return
}

echo foobar()."\n";
echo "<br>" . "<br>";


// Integers
echo "Integers Spaceship operator <=>" . "<br>";
echo 1 <=> 1; // 0
echo "<br>";
echo 1 <=> 2; // -1
echo "<br>";
echo 2 <=> 1; // 1
echo "<br>";