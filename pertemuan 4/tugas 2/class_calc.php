<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Calculator {
        private $nomber1;
        private $nomber2;
        
        public function __construct($nomber1, $nomber2) {
		$this->A=$nomber1;
        $this->B=$nomber2; 
        }
    
        public function getTambah(){
        return $this->A + $this->B;
        }
    
        public function getKurang() {
        return $this->A - $this->B;    
        }
    
        public function getPerkalian() {
        return $this->A * $this->B;
        }

        public function getPembagian() {
        return $this->A / $this->B;
        }  
    }
    
       $Calculator = new Calculator(4,8);

       echo "<br>Hasil Tambah = " . $Calculator->getTambah();
       echo "<br>Hasil Kurang = " . $Calculator->getKurang();
       echo "<br>Hasil Perkalian = " . $Calculator->getPerkalian();
       echo "<br>Hasil Pembagian = " . $Calculator->getPembagian();

?>