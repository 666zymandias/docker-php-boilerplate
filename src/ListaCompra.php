<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private $listaProductos = array();
    public function tratarInstruccion($instruccion) : string {

        $salida = '';

        $argumentosInstruccion = explode(' ', strtolower($instruccion));

        if ($argumentosInstruccion[0] === 'añadir') {

            $listaProductos[$argumentosInstruccion[1]] = intval($argumentosInstruccion[2]);

            foreach ($listaProductos as $producto => $cantidad) {
                $salida .= $producto . ' x' . $cantidad . ', ';
            }
            return $salida;

        }
        return $salida;
    }
}