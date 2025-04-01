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

        $respuesta = $listaCompra->tratarInstruction('añadir pan 4');
        $this->assertEquals('pan x4, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruction('añadir pan');
        $this->assertEquals('pan x5, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruction('añadir cafe 2');
        $this->assertEquals('pan x5, cafe x2, ', $respuesta);
    }

    /**
     * @test
     */
    public function eliminarProductoListaCompra() {
        $listaCompra = new ListaCompra();

        $respuesta = $listaCompra->tratarInstruction('añadir pan 4');
        $this->assertEquals('pan x4, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruction('añadir pan');
        $this->assertEquals('pan x5, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruction('añadir cafe 2');
        $this->assertEquals('pan x5, cafe x2, ', $respuesta);

        $respuesta = $listaCompra->tratarInstruction('eliminar pan');
        $this->assertEquals('cafe x2, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruction('eliminar harina');
        $this->assertEquals('El producto seleccionado no existe', $respuesta);

    }

    /**
     * @test
     */
    public function vaciarListaCompra() {
        $listaCompra = new ListaCompra();

        $respuesta = $listaCompra->tratarInstruction('añadir pan 4');
        $this->assertEquals('pan x4, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruction('añadir cafe 2');
        $this->assertEquals('pan x4, cafe x2, ', $respuesta);
        $respuesta = $listaCompra->tratarInstruction('añadir harina');
        $this->assertEquals('pan x4, cafe x2, harina x1, ', $respuesta);

        $respuesta = $listaCompra->tratarInstruction('vaciar');
        $this->assertEquals('', $respuesta);
        $respuesta = $listaCompra->tratarInstruction('vaciar');
        $this->assertEquals('', $respuesta);
    }
}