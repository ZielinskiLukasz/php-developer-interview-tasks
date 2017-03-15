<?php

foreach (range(1, 100) as $i) {
    $val = ($i%3 ? "" : "Fizz") . ($i%5 ? "" : "Buzz");
    echo ($val ? $val : $i) .  '<br />';
}

