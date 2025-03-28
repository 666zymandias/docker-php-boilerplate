<?php

declare(strict_types=1);

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Fizzbuzz;
use PHPUnit\Framework\TestCase;

final class FizzbuzzTest extends TestCase
{

    /**
     * @test
     */
    public function trueAssertion()
    {
        $example = new Fizzbuzz();

        $integerValue = $example->integerChecker(1);

        $this->assertTrue($integerValue);
    }

    /**
     * @test
     */
    public function falseAssertion()
    {
        $example = new Fizzbuzz();

        $integerValue = $example->integerChecker('1');

        $this->assertFalse($integerValue);
    }

    /**
     * @test
     */
    public function equalsAssertion()
    {
        $example = new Fizzbuzz();

        $integerValue = $example->integerChecker(1);

        $this->assertEquals(true, $integerValue);
    }

    /**
     * @test
     */
    public function sayFizz() {
        $example = new Fizzbuzz();
        $answer = $example->sayYourThing(3);
        $this->assertEquals('Fizz', $answer);
    }

    /**
     * @test
     */
    public function sayBuzz() {
        $example = new Fizzbuzz();
        $answer = $example->sayYourThing(5);
        $this->assertEquals('Buzz', $answer);
    }

    /**
     * @test
     */
    public function sayFizzBuzz() {
        $example = new Fizzbuzz();
        $answer = $example->sayYourThing(15);
        $this->assertEquals('Fizzbuzz', $answer);
    }

    /**
     * @test
     */
    public function sayNumber() {
        $example = new Fizzbuzz();
        $answer = $example->sayYourThing(11);
        $this->assertEquals('11', $answer);
    }

    /**
     * @test
     */
    public function sayYourThingFor1to100() {
        $fizzbuzz = new Fizzbuzz();
        for ($i = 1; $i <= 100; $i++) {
            $answer = $fizzbuzz->sayYourThing($i);
            $fizzbuzz->assertYourSaid($i, $answer);
        }
    }
}
