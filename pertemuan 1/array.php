<?php

    // $fruits = ["mangga", "durian", "alpuket"];
    
    // foreach ($fruits as $fruit) {
    //     echo $fruit;
    //     echo '<br>';    
    // }

    // $dinos = [
    //     "dinoName" => "tricera",
    //     "dinoAge" => 300,
    //     "isMarried" => false 
    // ];

    // foreach ($dinos as $dino) {
    //     echo $dino;
    //     echo '<br>';
    // }

    $dinos =[
        [
            "dinoName" => "tricera",
            "dinoAge" => 300

        ],
        [
            "dinoName" => "rex",
            "dinoAge" => 500
        ],
        [
            "dinoName" => "ptera",
            "dinoAge" => 250
        ],

    ];

    foreach ($dinos as $dino){
        echo $dino["dinoName"] . " - " .$dino["dinoAge"] . " tahun";
        echo '<br>';
    }
?>   