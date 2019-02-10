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

    /** 
    * @depends testAtributosCalculadora
    */ 
    public function testMetodosCalculadora()
    {
        //Teste se um método existe.
        $this->assertTrue(method_exists(Calculadora::class,'getValorA'),"Falta o Método getValorA");
        $this->assertTrue(method_exists(Calculadora::class,'getValorB'),"Falta o Método getValorB");
        $this->assertTrue(method_exists(Calculadora::class,'getOperador'),"Falta o Método getOperador");
        $this->assertTrue(method_exists(Calculadora::class,'getResultado'),"Falta o Método getResultado");
    }

    /**
     * @depends testMetodosCalculadora
     */
    public function testConstrutorCalculadora()
    {
        $this->assertTrue(method_exists(Calculadora::class,'__construct'),"Falta o método construtor");

        //VERIFICAR SE O CONSTRUTOR ESTÁ ATRIBUINDO VALORES
        $calc = new Calculadora(4,2,"soma");
        $this->assertEquals(4,$calc->getValorA(),"Erro no método getValorA");
        $this->assertEquals(2,$calc->getValorB(),"Erro no método getValorB");
        $this->assertEquals("soma",$calc->getOperador(),"Erro no método getOperador");

        //ACESSO AOS ATRIBUTOS PRIVADOS
        $this->assertFalse(isset($calc->valorA), "Atributo valorA deve ser privado");
        $this->assertFalse(isset($calc->valorB), "Atributo valorB deve ser privado");
        $this->assertFalse(isset($calc->operador), "Atributo operador deve ser privado");

        
    }
}

?>