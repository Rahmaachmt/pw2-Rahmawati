<?php
		class hewan {
			  protected $nama;
              protected $warna;
              protected $berkembang;

              
              protected function __construct($nama, $warna, $berkembang){
                $this->nama = $nama;
                $this->warna = $warna;
                $this->berkembang = $berkembang;
            }
		
            protected function getInfo(){
                echo "Nama hewan : " . $this->nama . "<br>";
                echo "Warna hewan : " . $this->warna . "<br>";
                echo "berkembang : " . $this->berkembang . "<br>";
              }
		}
		
        class darat extends hewan{
            public $berkembang;
    
            public function __construct($nama, $warna, $berkembang){
                parent::__construct($nama, $warna, $berkembang);
                $this->berkembang = $berkembang;
            }
    
            public function getInfoDarat(){
                parent::getInfo();
                echo "berkembang : " . $this->berkembang . "<br>";
            } 
		}


        class air {
            protected $nama;
            protected $warna;
            protected $ukuran;

            
            protected function __construct($nama, $warna, $ukuran){
              $this->nama = $nama;
              $this->warna = $warna;
              $this->ukuran = $ukuran;
          }
      
          protected function getInfo(){
              echo "Nama hewan : " . $this->nama . "<br>";
              echo "warna hewan : " . $this->warna . "<br>";
              echo "ukuran : " . $this->ukuran . "<br>";
            }
      }
      
        class hewan extends air{
            public $ukuran;
    
            public function __construct($nama, $jenis, $ukuran){
                parent::__construct($nama, $jenis, $ukuran);
                $this->ukuran = $ukuran;
            }

            public function getInfoAir(){
                parent::getInfo();
                echo "ukuran : " . $this->hewan . "<br>";
            }
        }
?>