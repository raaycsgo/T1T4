<?php
use PHPUnit\Framework\TestCase;
include './src/Calculadora.php';

final class CalculadoraTest extends TestCase
{
  public function testSuma()
  {
      $calc = new Calculadora(3,4);
      $this->assertEquals(7,$calc->suma());
  }
  
  public function testMultiplicacion()
    {
        $calc = new Calculadora(3,4);
        $this->assertEquals(12,$calc->multiplicacion());
    }
  
  public function testDivision(){
    $calc = new Calculadora(5,2);
    $this->assertEquals(2.5,$calc->division());
  }
  public function testResta()
    {
        $calc = new Calculadora(5,4);
        $this->assertEquals(1,$calc->resta());
    }

    public function testResto()
    {
        $calc = new Calculadora(5,2);
        $this->assertEquals(1,$calc->resto());
    }
}

?>
