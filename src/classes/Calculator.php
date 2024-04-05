<?php

class Calculator
{
    static function sum(float $a, float $b): float
    {
        return $a + $b;
    }

    static function sub(float $a, float $b): float
    {
        return $a - $b;
    }

    static function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    static function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new Error("Division by 0 is not possible");
        }
        return $a / $b;
    }

    static function mod(float $a, float $b): float
    {
        if ($b == 0) {
            throw new Error("Division by 0 is not possible");
        }
        return $a % $b;
    }

    static function sqrt(float $num): float
    {
        if ($num < 0) {
            throw new Error("Number must be positive");
        }
        return sqrt($num);
    }

    static function pow(float $num, float $exp): float
    {
        return pow($num, $exp);
    }
}