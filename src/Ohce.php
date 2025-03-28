<?php

namespace Deg540\DockerPHPBoilerplate;

use DateTime;

class Ohce {

    private string $nombre;
    function __construct($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * @param $word
     * @return string
     */
    function sayYourThing($word): string
    {
        if ($word === 'Stop')
            return 'Goodbye ' . $this->nombre;

        $answer = [];
        $word_array = str_split($word);
        for ($i = count($word_array) - 1; $i >= 0; $i--) {
            $answer[] = $word[$i];
        }
        return implode("", $answer);
    }

    /**
     * @param $answer
     * @param $word
     * @return string
     */
    function reactToPalindrome($answer, $word): string {
        if ($answer === $word) {
            return "Nice Word!";
        }
        return "";
    }

    /**
     * @return string
     */
    function waveAtUser(): string {
        $hora_actual = new DateTime();
        $manana  = new DateTime("06:00:00");
        $tarde = new DateTime("13:00:00");
        $noche = new DateTime("20:00:00");

        if ($manana < $hora_actual  && $hora_actual < $tarde) {
            return "Buenos dias ".$this->nombre."!";
        }
        elseif ($tarde < $hora_actual  && $hora_actual < $noche) {
            return "Buenas tardes ".$this->nombre."!";
        }
        return "Buenas noches ".$this->nombre."!";
    }

}
