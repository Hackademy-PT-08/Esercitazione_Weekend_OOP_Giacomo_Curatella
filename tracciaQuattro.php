<?php
trait Calculator {
    //!somma
    public function sum($a, $b) {
        return $a + $b;
    }
    //!sottrazione
    public function sub($a, $b) {
        return $a - $b;
    }
    //!moltiplicazione
    public function mul($a, $b) {
        return $a * $b;
    }
    //!divisione
    public function div($a, $b) {
        return $a / $b;
    }
    //!radiceQuadrata
    public function sqr($a) {
        return sqrt($a);
    }
}

class Rettangolo{
    //!importo il tratto
    use Calculator;
    public $base;
    public $altezza;
    public function __construct($base, $altezza){
        $this->base = $base;
        $this->altezza = $altezza;
        echo $this->area();
        echo $this->perimetro();
        echo $this->diagonale();
    }

    //!area
    public function area(){
        return "Area: " . $this->mul($this->base, $this->altezza) . " Metri² \n";
    }

    //!perimetro
    public function perimetro(){
        return "Perimetro: " . $this->sum($this->mul($this->base, 2), $this->mul($this->altezza, 2)) . " Metri\n";
    }

    //!diagonale
    public function diagonale(){
        return "Diagonale: " . round($this->sqr($this->sum($this->mul($this->altezza, $this->altezza), $this->mul($this->base, $this->base))), 2) . " Metri \n";
    }
}

//!creiamo l'istanza dell'oggetto
$rectangle = new Rettangolo(10,5);
?>