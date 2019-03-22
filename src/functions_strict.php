<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: captain
 * Date: 19.3.22
 * Time: 13.57
 */

namespace Nfq\Akademija\Strict;

function calculateHomeWorkSum(): int
{
    $numbers = func_get_args();
    $sum = array_sum($numbers);

    return $sum;
}