<?php

namespace Nfq\Akademija\Soft;

function calculateHomeWorkSum(int...$numbers): int
{
    $total = 0;
    foreach ($numbers as $n) {
        $total += $n;
    }
    return $total;
}

