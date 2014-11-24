<?php
namespace Sequence;

class Sequence
{

    public static function fibonacci($number)
    {
        $fibonacci=[1,1];
        for ($iteration=0; $iteration<$number-2; $iteration++) {
            $operators=Sequence::getFibonacciOperators($fibonacci);
            $value= $operators[0] + $operators[1];
            array_push($fibonacci, $value);
        }
        return $fibonacci;
    }

    private static function getFibonacciOperators($fibonacciList)
    {
        return [$fibonacciList[sizeof($fibonacciList)-1] ,$fibonacciList[sizeof($fibonacciList)-2]];
    }
}
