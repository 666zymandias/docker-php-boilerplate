<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use PHPUnit\Framework\TestCase;
use Deg540\DockerPHPBoilerplate\Ohce;

class OhceTest extends TestCase
{

    /**
     * @test
     */
    public function testOhceEcho() {
        $ohce = new Ohce('Felipe');
        $answer = $ohce->sayYourThing("hola");
        $this->assertEquals("aloh", $answer);
    }

    /**
     * test
     */
    public function testOhceReactionToPalindrome() {
        $ohce = new Ohce('Felipe');
        $answer = $ohce->sayYourThing("oso");
        $this->assertEquals("oso", $answer);
        $reaction = $ohce->reactToPalindrome($answer, "oso");
        $this->assertEquals("Nice Word!", $reaction);
    }

    /**
     * @test
     */
    public function testOhceSayGodbye() {
        $ohce = new Ohce('Felipe');
        $answer = $ohce->sayYourThing("Stop");
        $this->assertEquals("Goodbye Felipe", $answer);
    }

    /**
     * @test
     */
    public function testOhceSayHelloInTheAfternoon() {
        $ohce = new Ohce('Felipe');
        $answer = $ohce->waveAtUser();
        $this->assertEquals("Buenas tardes Felipe!", $answer); //Si no se ejecuta entre las 13 y las 20h falla
    }
}
