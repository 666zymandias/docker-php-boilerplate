<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    private array $listaProductos;

    public function __construct() {
        $this->listaProductos = array();
    }
    public function tratarInstruction($instruction) : string {

        $argumentosInstruction = explode(' ', strtolower($instruction));

        if ($argumentosInstruction[0] === 'vaciar') {
            if (! empty($this->listaProductos)) {
                foreach ($this->listaProductos as $producto => $cantidad) {
                    unset($this->listaProductos[$producto]);
                }
            }

            return "";
        }

        else if ($argumentosInstruction[0] === 'añadir') {

            if (array_key_exists($argumentosInstruction[1], $this->listaProductos)) {
                $this->listaProductos[$argumentosInstruction[1]]++;
            }
            else {
                $this->listaProductos[$argumentosInstruction[1]] = intval($argumentosInstruction[2] ?? '1');
            }

        }

        else if ($argumentosInstruction[0] === 'eliminar') {
            if (!array_key_exists($argumentosInstruction[1], $this->listaProductos)) {
                return "El producto seleccionado no existe";
            }

            unset($this->listaProductos[$argumentosInstruction[1]]);
        }

        $salida = '';
        foreach ($this->listaProductos as $producto => $cantidad) {
            $salida .= $producto . ' x' . $cantidad . ', ';
        }

        return $salida;
    }
}