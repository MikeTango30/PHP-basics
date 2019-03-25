<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: captain
 * Date: 19.3.22
 * Time: 13.57
 */

namespace Nfq\Akademija\Strict;

function calculateHomeWorkSum(...$numbers): int
{
    return calculateNumbersSum(...$numbers);
}

function calculateNumbersSum(int...$numbers): int
{
    $numbers = func_get_args();

    return $sum = array_sum($numbers);
}
