<?php /* CalculadoraTest.php */

/* 
* @author Jose Zafrilla Ruiz
*/

use Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase{ //El nombre de las funciones de pruebas debe comenzar por test*
    
    // Test Sumar
    public function testSumar() {

        // Crea la clase calculadora
        $cal = new Calculadora();
        
        // Hace dos tests. Uno que compruebe que la suma dé lo correcto, y otro test que compruebe que es incorrecto.
        $this->assertEquals(6, $cal->sumar(2,4), "2+4 debe dar 6" );
        $this->assertEquals(10, $cal->sumar(2,8), "2+8 debe dar 10" );
        $this->assertNotEquals(3, $cal->sumar(2,4), "2+4 no debe dar 3" );
    }

    // Test Restar
    public function testRestar() {

        // Crea la clase calculadora
        $cal = new Calculadora();

        // Hace dos tests. Uno que compruebe que la resta dé lo correcto, y otro test que compruebe que es incorrecto.
        $this->assertEquals(-6, $cal->restar(2, 8), "2-8 debe dar -6");
        $this->assertEquals(6, $cal->restar(8, 2), "8-2 debe dar 6");
        $this->assertNotEquals(0, $cal->restar(2, 4), "2-4 no debe dar 0");
    }
    
    // Test Multiplicar
    public function testMultiplicar() {

        // Crea la clase calculadora
        $cal = new Calculadora();

        // Hace dos tests. Uno que compruebe que la multiplicación dé lo correcto, y otro test que compruebe que es incorrecto.
        $this->assertEquals(8, $cal->multiplicar(2, 4), "2*4 debe dar 8");
        $this->assertEquals(16, $cal->multiplicar(4, 4), "4*4 debe dar 16");
        $this->assertNotEquals(10, $cal->multiplicar(2, 4), "2*4 no debe dar 10");
    }
    
    // Test Dividir
    public function testDividir() {

        // Crea la clase calculadora
        $cal = new Calculadora();

        // Hace dos tests. Uno que compruebe que la división dé lo correcto, y otro test que compruebe que es incorrecto.
        $this->assertEquals(2, $cal->dividir(8, 4), "8/4 debe dar 2");
        $this->assertEquals(4, $cal->dividir(16, 4), "16/4 debe dar 4");
        $this->assertNotEquals(3, $cal->dividir(12, 5), "12/5 no debe dar 3");
    }
}
