<?php

namespace Deg540\DockerPHPBoilerplate;

class Calculator
{
    function add(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }

    function multiply(int $number1, int $number2): int
    {
        return $number1 * $number2;
    }
}
