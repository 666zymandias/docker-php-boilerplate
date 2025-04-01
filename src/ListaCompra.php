<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    public array $listaProductos;

    public function __construct() {
        $this->listaProductos = array();
    }
    public function tratarInstruccion($instruccion) : string {

        $salida = '';

        $argumentosInstruccion = explode(' ', strtolower($instruccion));

        if ($argumentosInstruccion[0] === 'añadir') {

            if (array_key_exists($argumentosInstruccion[1], $this->listaProductos)) {
                $this->listaProductos[$argumentosInstruccion[1]]++;
            }
            else {
                $this->listaProductos[$argumentosInstruccion[1]] = intval($argumentosInstruccion[2] ?? '1');
            }

            foreach ($this->listaProductos as $producto => $cantidad) {
                $salida .= $producto . ' x' . $cantidad . ', ';
            }

            return $salida;
        }

        else if ($argumentosInstruccion[0] === 'eliminar') {

            unset($this->listaProductos[$argumentosInstruccion[1]]);

            foreach ($this->listaProductos as $producto => $cantidad) {
                $salida .= $producto . ' x' . $cantidad . ', ';
            }

            return $salida;
        }

        return $salida;
    }
}