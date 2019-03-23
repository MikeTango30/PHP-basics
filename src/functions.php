<?php
/**
 * Created by PhpStorm.
 * User: captain
 * Date: 19.3.22
 * Time: 13.57
 */

namespace Nfq
{
    function calculateHomeWorkSum(...$numbers)
        {
            $numbers = func_get_args();
            $sum = array_sum($numbers);

            return $sum;
        }

}

namespace Nfq\Akademija\Not_Typed
{
    function calculateHomeWorkSum(...$numbers): int
    {
        $numbers = func_get_args();
        $sum = array_sum($numbers);

        return $sum;
    }
}

namespace Nfq\Akademija\Soft
{
    function calculateHomeWorkSum(int...$numbers): int
    {
        $numbers = func_get_args();
        $sum = array_sum($numbers);

        return $sum;
    }
}

