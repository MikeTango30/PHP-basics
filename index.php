<?php
/**
 * Created by PhpStorm.
 * User: captain
 * Date: 19.3.22
 * Time: 13.58
 */
require __DIR__.'/vendor/autoload.php';

use function Nfq\Akademija\Not_Typed\calculateHomeWorkSum as  notTyped;
use function Nfq\Akademija\Soft\calculateHomeWorkSum as soft;
use function Nfq\Akademija\Strict\calculateHomeWorkSum as strict;

echo "calculateHomeWorkSum: ".calculateHomeWorkSum(3, 2.2, "1");
echo "<br>";
echo "<br>";

echo "Nfq\Akademija\Not_Typed\calculateHomeWorkSum: ".notTyped(3, 2.2, "1");
echo "<br>";
echo "<br>";

echo "Nfq\Akademija\Soft\calculateHomeWorkSum: ".soft(3, 2.2, "1");
echo "<br>";
echo "<br>";

echo "Nfq\Akademija\Strict\calculateHomeWorkSum: ".strict(3, 2.2, "1");
echo "<br>";



