<?php
namespace Sequence;

class Sequence
{

    public static function fibonacci($number)
    {
        $fibonacci=[1,1];
        for ($iteration=0; $iteration<$number-2; $iteration++) {
            $fibonacci[] = Sequence::getNextNumber($fibonacci);
        }
        return $fibonacci;
    }

    public static function isFibo($number)
    {
        $fibonacci=[1,1];
        while ($fibonacci[sizeof($fibonacci)-1] < $number) {
            $fibonacci[] = Sequence::getNextNumber($fibonacci);
        }
        return $fibonacci[sizeof($fibonacci)-1] == $number;
    }

    private static function getFibonacciOperators($fibonacciList)
    {
        return [$fibonacciList[sizeof($fibonacciList)-1] ,$fibonacciList[sizeof($fibonacciList)-2]];
    }

    private static function getNextNumber($fibonacci)
    {
        $operators=Sequence::getFibonacciOperators($fibonacci);
        return  $operators[0] + $operators[1];
    }
}
