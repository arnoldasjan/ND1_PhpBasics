<?php

namespace Nfq\Akademija\NotTyped;

function calculateHomeWorkSum(...$numbers): int
{
    $total = 0;
    foreach ($numbers as $n) {
        $total += $n;
    }
    return $total;
}

?>