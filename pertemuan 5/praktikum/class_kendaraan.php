<?php

    class vehicle {
        protected $type;
        protected $fuel;

        protected function __construct($type, $fuel)
        {
            $this->type = $type;
            $this->fuel = $fuel;
        }

        protected function getInfo() {
            echo "jenis Kendaraan:" . $this->type . "<br>";
            echo "jenis Bahan Bakar:" . $this->fuel . "<br>";
        }
    }



    class Motor extends vehicle {
        public $wheels;

        public function __construct($type, $fuel, $wheels)
        {
            parent::__construct($type, $fuel);
            $this->wheels = $wheels;
        }

        public function getInfoMotor() {
            parent::getInfo();
            echo "jumlah Roda:" . $this->wheels . "<br>";
        }
}


class submarine extends vehicle {
    public $max_depth;

    public function __construct($type, $fuel, $max_depth)
    {
    parent::__construct($type, $fuel);
    $this->max_depth = $max_depth;
    }

    public function getInfosubmarine() {
        parent::getInfo();
        echo "kedalaman maksimal:" . $this->max_depth . "<br>";

    }

}

    





    
        

            


?>