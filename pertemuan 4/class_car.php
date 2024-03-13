<?php

    class car {

        // property
        public $brand; 
        public $color;

        // method
        function getBrand() {
            return $this->brand;

        }

    }

    // object
    $rubicon = new car();
    $Tesla = new car();

    // setter
    $rubicon->brand = "Rubicon";
    $Tesla->brand = "Tesla";

    // echo
    echo $rubicon->getBrand();
    echo '<br>';
    echo $Tesla->getBrand();


    ?>
