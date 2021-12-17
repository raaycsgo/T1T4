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
  
  public function testDivision(){
    $calc = new Calculadora(5,2);
    $this->assertEquals(2.5,$calc->division());
  }
}

?>
