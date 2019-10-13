<?php declare(strict_types=1);

namespace Nfq\Akademija\Strict;

function calculateHomeWorkSum(int...$numbers): int
{
    $total = 0;
    foreach ($numbers as $n) {
        $total += $n;
    }
    return $total;
}

?>
