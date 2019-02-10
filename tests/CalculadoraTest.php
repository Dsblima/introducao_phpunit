<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testAtributosCalculadora()
    {
        $this->assertClassHasAttribute('valorA',Calculadora::class);
        $this->assertClassHasAttribute('valorB',Calculadora::class);
        $this->assertClassHasAttribute('operador',Calculadora::class);
        $this->assertClassHasAttribute('resultado',Calculadora::class);
    }

    public function testMetodosCalculadoras()
    {
        //Teste se um método existe.
        $this->assertTrue(method_exists(Calculadora::class,'getValorA'),"Falta o Método getValorA");
        $this->assertTrue(method_exists(Calculadora::class,'getValorB'),"Falta o Método getValorB");
        $this->assertTrue(method_exists(Calculadora::class,'getOperador'),"Falta o Método getOperador");
        $this->assertTrue(method_exists(Calculadora::class,'getResultado'),"Falta o Método getResultado");
    }
}

?>