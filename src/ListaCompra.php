<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private array $listaProductos;

    public function __construct() {
        $this->listaProductos = array();
    }
    public function tratarInstruccion($instruccion) : string {

        $argumentosInstruccion = explode(' ', strtolower($instruccion));

        if ($argumentosInstruccion[0] === 'vaciar') {
            if (! empty($this->listaProductos)) {
                foreach ($this->listaProductos as $producto => $cantidad) {
                    unset($this->listaProductos[$producto]);
                }
            }

            return "";
        }

        else if ($argumentosInstruccion[0] === 'añadir') {

            if (array_key_exists($argumentosInstruccion[1], $this->listaProductos)) {
                $this->listaProductos[$argumentosInstruccion[1]]++;
            }
            else {
                $this->listaProductos[$argumentosInstruccion[1]] = intval($argumentosInstruccion[2] ?? '1');
            }

        }

        else if ($argumentosInstruccion[0] === 'eliminar') {
            if (!array_key_exists($argumentosInstruccion[1], $this->listaProductos)) {
                return "El producto seleccionado no existe";
            }

            unset($this->listaProductos[$argumentosInstruccion[1]]);
        }

        $salida = '';
        foreach ($this->listaProductos as $producto => $cantidad) {
            $salida .= $producto . ' x' . $cantidad . ', ';
        }

        return $salida;
    }
}