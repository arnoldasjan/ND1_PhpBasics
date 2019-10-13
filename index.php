<?php

use Codedungeon\PHPCliColors\Color;
use function Nfq\Akademija\NotTyped\calculateHomeWorkSum as nottypedcalc;
use function Nfq\Akademija\Soft\calculateHomeWorkSum as softcalc;
use function Nfq\Akademija\Strict\calculateHomeWorkSum as strictcalc;

require 'vendor/autoload.php';

try {
    echo Color::YELLOW . "calculateHomeWorkSum: " . calculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
    echo Color::CYAN . "Nfq/Akademija/NotTyped/calculateHomeWorkSum: " . nottypedcalc(3, 2.2, '1') . PHP_EOL;
    echo Color::BLUE . "Nfq/Akademija/Soft/calculateHomeWorkSum: " . softcalc(3, 2.2, '1') . PHP_EOL;
    echo Color::BLACK . "Nfq/Akademija/Strict/calculateHomeWorkSum: " . strictcalc(3, 2.2, '1') . PHP_EOL;
} catch (\Throwable $exp) {
    echo 'Sorry, but we have some issues. Contact our support for further investigation';
}
?>