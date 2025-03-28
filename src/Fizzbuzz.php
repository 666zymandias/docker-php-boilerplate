<?php

namespace Deg540\DockerPHPBoilerplate;

use function PHPUnit\Framework\assertEquals;

class Fizzbuzz
{
    /**
     * @param $value
     *
     * @return bool
     */
    function integerChecker($value): bool {
        return is_integer($value);
    }

    /**
     * @param $value
     *
     * @return string
     */
    function sayYourThing($value): string {
        if ($value % 3 == 0 && $value % 5 == 0) {
            return "Fizzbuzz";
        }

        if ($value % 3 === 0) {
            return "Fizz";
        }

        if ($value % 5 === 0) {
            return "Buzz";
        }
        return strval($value);
    }

    /**
     * @param $value ,
     * @param $answer
     * @return void
     */

    function assertYourSaid($value, $answer): void {
        if ($value % 3 == 0 && $value % 5 == 0) {
            assertEquals($answer, "Fizzbuzz");
            return;
        }

        if ($value % 3 === 0) {
            assertEquals($answer, "Fizz");
            return;
        }

        if ($value % 5 === 0) {
            assertEquals($answer, "Buzz");
        }
        else
            assertEquals($answer, strval($value));
    }
}
