<?php

function calculateHomeWorkSum(...$numbers)
{
    $total = 0;
    foreach ($numbers as $n) {
        $total += $n;
    }
    return $total;
}

?>
