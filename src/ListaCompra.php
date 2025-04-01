<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private $listaProductos = array();
    public function tratarInstruccion($instruccion) : string {

        $argumentosInstruccion = explode(' ', $instruccion);

        $listaProductos[$argumentosInstruccion[1]] = intval($argumentosInstruccion[2]);

        $salida = '';
        foreach ($listaProductos as $producto => $cantidad) {
            $salida .= $producto . ' x' . $cantidad . ', ';
        }
        return $salida;
    }
}