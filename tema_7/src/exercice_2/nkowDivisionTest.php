<?php // Rubén recuerda que los test pasan pero sigo teniendo problemas si no están en la misma carpeta
use PHPUnit\Framework\TestCase;

require_once 'NkowDivision.php';

class NkowDivisionTest extends TestCase {
    
    public function testNotaInferiorATrentaTres() {
        $this->assertEquals("Està reprovat", nkowDivision(20));
    }

    public function testNotaEntreTrentaTresIQuarantaQuatre() {
        $this->assertEquals("Tercera Divisió.", nkowDivision(40));
        $this->assertEquals("Tercera Divisió.", nkowDivision(33));
        $this->assertEquals("Tercera Divisió.", nkowDivision(44));
    }

    public function testNotaEntreQuarantaCincICinquantaNou() {
        $this->assertEquals("Segona Divisió.", nkowDivision(50));
        $this->assertEquals("Segona Divisió.", nkowDivision(59));
    }

    public function testNotaSuperiorAQuarantaNou() {
        $this->assertEquals("Primera Divisió.", nkowDivision(60));
        $this->assertEquals("Primera Divisió.", nkowDivision(75));
    }
}
?>
