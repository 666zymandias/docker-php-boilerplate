<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase {

    /**
     * @test
     */
    public function addProductoAListaCompra() {
        $listaCompra = new ListaCompra();

        $respuesta = $listaCompra->tratarInstruccion('añadir pan 4');
        $this->assertEquals('pan x4, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruccion('añadir pan');
        $this->assertEquals('pan x5, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruccion('añadir cafe 2');
        $this->assertEquals('pan x5, cafe x2, ', $respuesta);
    }

    public function eliminarProductoListaCompra() {
        $listaCompra = new ListaCompra();

        $respuesta = $listaCompra->tratarInstruccion('añadir pan 4');
        $this->assertEquals('pan x4, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruccion('añadir pan');
        $this->assertEquals('pan x5, ', $respuesta);

    }
}